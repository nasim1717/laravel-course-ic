<?php
namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $data = $request->validate(
            [
                'name'     => 'required|string|max:255',
                'email'    => 'required|email|unique:users,email',
                'password' => 'required|string|min:3',
            ]
        );

        User::created([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function createRole(Request $request)
    {
        $data = $request->validate(
            [
                'name'         => 'required',
                'display_name' => 'required',
                'description'  => 'required',
            ]
        );

        $role = Role::create([
            'name'         => $data['name'],
            'display_name' => $data['display_name'],
            'description'  => $data['description'],
        ]);

        return response()->json(['message' => 'Role created successfully', 'role' => $role], 201);
    }

    public function createPermission(Request $request)
    {
        $data = $request->validate(
            [
                'name'         => 'required',
                'display_name' => 'required',
                'description'  => 'required',
            ]
        );

        Permission::create([
            'name'         => $data['name'],
            'display_name' => $data['display_name'],
            'description'  => $data['description'],
        ]);

        return response()->json(['message' => 'Permission created successfully'], 201);
    }

    public function assignPermissionToRole(Request $request)
    {
        $data = $request->validate(
            [
                'role'       => 'required',
                'permission' => 'required',
            ]
        );

        $role = Role::where('name', $data['role'])->first();

        $role->givePermission($data['permission']);

        return response()->json(['message' => 'Permission assigned to role successfully'], 201);
    }

    public function assignRoleToUser(Request $request)
    {
        $data = $request->validate(
            [
                'user_id' => 'required',
                'role'    => 'required',
            ]
        );

        $user = User::findOrFail($data['user_id']);
        $user->addRole($data['role']);

        return response()->json(['message' => 'Role assigned to user successfully'], 201);
    }

    public function login(Request $request)
    {
        $data = $request->validate(
            [
                'email'    => 'required',
                'password' => 'required|string|min:3',
            ]
        );

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $user = User::find(Auth::user()->id);
            $user->load('roles', 'permissions');

            return response()->json(['message' => 'User logged in successfully', 'user' => $user, 'roles' => $user->roles->pluck('name'), 'permissions' => $user->allPermissions()->pluck('name')], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
}
