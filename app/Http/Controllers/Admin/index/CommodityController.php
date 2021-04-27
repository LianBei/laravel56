<?php


namespace App\Http\Controllers\Admin\index;


use App\Http\Controllers\Controller;
use App\Models\commodity;

class CommodityController extends Controller {
    public function index(){
        return view('Admin/index/commodity');
    }
    public function recommend(){
        $commodity=new commodity();
        $data = $commodity->getAllData('5');
        return view('Admin/index/recommend',compact('data'));
    }
    public function img(){
        return view('Admin/index/img');
    }
    public function classification(){
        return view('Admin/index/classification');
    }
    public function comment(){
        return view('Admin/index/comment');
    }
    public function opinion(){
        return view('Admin/index/opinion');
    }
    public function vip(){
        return view('Admin/index/vip');
    }
    public function grade(){
        return view('Admin/index/grade');
    }
    public function character(){
        return view('Admin/index/character');
    }
    public function admin(){
        return view('Admin/index/admin');
    }
}