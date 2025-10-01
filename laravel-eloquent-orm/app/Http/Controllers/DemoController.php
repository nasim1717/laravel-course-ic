<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;

class DemoController extends Controller
{
    public function demo1()
    {
        $result = User::create([
            'name'              => 'admin2',
            'email'             => 'admin2@example.com',
            'password'          => bcrypt('123456'),
            'remebar_token'     => 'xwert',
            'email_verified_at' => now(),
        ]);
        return $result;
    }

    public function demo2()
    {
        $result = User::where('id', 1)->update([
            'name' => 'nasim',
        ]);

        return $result;

    }

    public function demo3()
    {
        $result = User::where('id', 3)->delete();
        return $result;
    }

    public function demo4()
    {
// select data
        // return Customer::get();
        // return Customer::all();
        // return Customer::first();
        // return Customer::find(3);
        return Customer::pluck('name', 'mobile');

    }

    public function demo5()
    {
        // Aggregation count(),sum(),avg(),min(),max()

        // return Product::count();
        // return Product::avg('price');
        // return Product::sum('price');
        // return Product::min('price');
        return Product::max('price');
    }

    public function demo6()
    {
        // use select clalus
        return Product::select('name', 'price')->get();
    }

    public function demo7()
    {
        // pagination
        // return Product::paginate(2);
        return Product::paginate($perPage = 2, $columns = ['*'], $pageName = 'list', );
    }

    public function demo8()
    {
        // relationship
        //Direct -> Has Relationship -> hasOne, hasMany (যখন ফরেন কি পেটের বাইরে থাকবে )
        //Inverse -> Belongs Relationship -> belongsTo, belongsToMany (যখন ফরেন কি পেটের ভিতরে থাকবে)

        // return Product::get();

        // return Product::with('categories')->get();
        return Product::with(['categories', 'users'])->get();
    }
}
