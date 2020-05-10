<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use App\Card;
use App\Buyer;
use App\Category;

class AdminController extends Controller
{
    public function logIn(){
        return view('login');
    }
    public function signIn(AdminRequest $request){
        $cards=Card::all();
        $admins=Admin::all();
        $buyers=Buyer::all();
        foreach($admins as $admin){
            if((Hash::check($request->password,$admin->password))&&($admin->username==$request->username)){
                session(['loggedin'=>true]);
                return view('admin',['cards' => $cards,'buyers'=>$buyers]);
            }
        }
        return redirect()->back()->with('message',' Погрешно корисничко име или лозинка!');
    }
    public function approveCard($id){
        $card=Card::where('id',$id)->first();
        $card->is_approved=1;
        $card->save();
        return redirect()->back();
    }
    public function disapproveCard($id){
        $card=Card::where('id',$id)->first();
        $card->is_approved=0;
        $card->save();
        return redirect()->back();
    }
    public function editCard($id){
        $card=Card::where('id',$id)->first();
        return view('adddiscount',['card'=>$card]);
    }
    public function changecard($id,Request $request){
        $card=Card::where('id',$id)->first();
        $card->company_name=$request->company_name;
        $card->discount=$request->discount;
        $category = Category::where('name', $request->category)->first();
        $card->category_id=$category->id;
        $card->description=$request->description;
        $card->link=$request->website;
        $card->facebook=$request->facebook;
        $card->phone_number=$request->phone;
        $card->email=$request->email;
        $card->price=100;
        $card->google_maps=$request->google_maps;
        $card->address=$request->address;
        $card->save();
        return redirect()->back();
    }
}
