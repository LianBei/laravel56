<?php


namespace App\Http\Controllers\Admin\auth;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller {
    public function index(){
        return view('Admin/auth/login');
    }
    public function check(Request $request){
        $account = Input::post('account');
        $password = Input::post('password');
        $rule = [
            'account' => 'required | exists:admin,account',
            'password'=>'required',
        ];
        $message = [
          'account.required'=>'账号必填',
            'account.exists'=>'账号不存在',
            'password.required'=>'密码必填',
        ];
        if ($this->validate($request,$rule,$message)){
            $Admin=new Admin();
            $result = $Admin->getRow(['account'=>$account]);
            if (Hash::check($password,$result->password)){
                session(['admin_id'=>$result->id,'admin_account'=>$result->account,'admin_name'=>$result->adminname]);
                return redirect('/admin/index');
            }else{
                return redirect()->back()->with('error','密码错误');
            }
        }
    }
}