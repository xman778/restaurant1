<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index()
    {
        $food=food::all();
        $data2=chef::all();

         return view('home',compact('food','data2'));
    }

    public function forward()
    {
        $food=food::all();
        $data2=chef::all();
        $type=Auth::user()->user_type;
        if($type=='1')
        {
            return view('admin.admin_home');
            
        }else
        {
            return view('home',compact('data2','food'));
            
        }
    }
    

}
