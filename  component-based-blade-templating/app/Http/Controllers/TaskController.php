<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index(Request $request){
        $columns = ['id','name','email'];
        $data = [
            ['1','John Doe','john@doe.com'],
            ['2','Jane Doe','jane@doe.com'],
            ['3','Jimmy Doe','jimmy@doe.com'],
        ];
        return view('tasks.index',['message'=>'Hello Everyone!','columns'=>$columns, 'data'=>$data]);
    }
}
