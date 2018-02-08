<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //登录页面展示
    public function login(){
        return view('admin.admin.login');
    }
    //完成验证方法
    public function login_check(Request $request){
        $this->validate($request,[
            'username'=>'required|min:2|max:16|regex:/^[a-zA-Z1-9\x{2e80}-\x{9FFF}]*$/u',
            'password'=>'required',
            'code'=>'required|size:4|captcha'
        ]);
        //验证用户名和密码
        $data=$request->only(['username','password']);
        //使用auth类，完成验证
        $res=Auth::guard('admin')->attempt($data,$request->has('online'));
        if ($res){
            //登录成功，跳转首页
            return redirect('admin/index');
        }else{
            //失败，跳转登录页面，并返回错误信息
            return redirect('admin/login')->withErrors(['msg'=>'用户名或密码错误']);
        }
    }

    //退出登录
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
