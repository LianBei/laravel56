<?php


namespace App\Http\Controllers\Admin\index;


use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        return view('Admin/index/index');
    }
}