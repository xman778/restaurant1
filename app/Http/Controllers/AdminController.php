<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\food;
use App\Models\User;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // !--user deleted--!

    public function destroy($id)
    {
        $del=user::find($id)->delete();
        return redirect()->back();
    }




    // !--food deleted--!

    public function fooddelete($id)
    {
        $del=food::find($id)->delete();
        return redirect()->back();
    }


     // !--reservration deleted--!

    public function editrevers($id)
    {
        reservation::find($id)->delete();
        return redirect()->back();
    }




     // !--food show by id--!

    public function foodedit($id)
    {
        $food =food::where('id',$id)->get();
        return view('food.foodedit', compact('food'));
 
    }



     // !--food update--!

    public function foodupdate(request $request)
    {

        $imagename=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        
        $food =food::updateOrCreate([
            'title'=>$request->title,
            'price'=>$request->price,
            'image'=>$imagename,
            'description'=>$request->description

        ]);
        return redirect()->route('food');
 
    }


     // !--user show--!
    public function users()
    {
        $users = User::all();
        return view('admin.adminusers', compact('users'));
 
    }

    // !--chef show--!
    public function showchef()
    {

        $chef=chef::all();
        return view('admin.adminchef',compact('chef'));

    }

     // !--food show--!



    public function food()
    {
        $data=food::all();

         return view('food.foodhome',compact('data'));
    }



     // !--food create--!


    public function foodcreate(Request $request)
    {


        $imagename=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        
        $upload=food::create([
            'title'=>$request->title,
            'image'=>$imagename,
            'price'=>$request->price,
            'description'=>$request->description
        ]);

         return redirect()->back();
    }





     // !--rservation create --!




    public function reservation(Request $request)
    {
        

        $upload=reservation::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'date'=>$request->date,
            'time'=>$request->time,
            'guest'=>$request->guest,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ]);

         return redirect()->back();
    }




     // !--reservration show--!



    public function showreservation()
    {
        $data=reservation::all();

         return view('admin.adminreservation',compact('data'));
    }


    // admin add chef ---------

    public function chef(Request $request)
    {


        $imagename=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        
        $upload=chef::create
        ([
            'name'=>$request->name,
            'image'=>$imagename,
            'Specialization'=>$request->Specialization,
        ]);

         return redirect()->back();
    }


    // delete chef ----------

    public function deletechef($id)
    {
        chef::find($id)->delete();

        return redirect()->back();


    }

    // -------------show edit chef

    public function editchef($id)
    {
   
        $data2 =chef::where('id',$id)->get();

        return view ('admin.admineditchef',compact('data2'));

    }

    // ---update chef info ---------

    public function updatechef(Request $request)
    {
        
        if(isset($request->image))
        {
        $imagename=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        }
        
        $chef=Chef::where('id', $request->id)->update
        ([
            'name'=>$request->name,
            'image'=>$imagename,
            'Specialization'=>$request->Specialization,
        ]);
       
        $chef =Chef::all();
         return view('admin.adminchef',compact('chef'));
    }

   

}
