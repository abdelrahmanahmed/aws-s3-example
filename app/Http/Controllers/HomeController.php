<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data = App('FileService')->getAll();

        return view('welcome')->with('data',$data);
    }
    public function save(Request $request){

        App('FileService')->store($request->except('_token'));

        return redirect()->back();
    }
}
