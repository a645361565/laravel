<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //展示首页
    public function index(){
        return view('admin.index.index');
    }
    //展示首页内容
    public function info(){
        return view('admin.index.info');
    }
}
