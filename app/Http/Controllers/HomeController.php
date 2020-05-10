<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use FarhanWazir\GoogleMaps\GMaps;
use App\Http\Requests\BuyCardRequest;
use App\Buyer;
use App\Http\Requests\AddCardRequest;
use App\Category;
use App\Image;

class HomeController extends Controller
{
    public function getCards()
    {
        session()->flush();
        $cards = Card::where('is_approved',1)->get();
        $categories=Category::all();
        return view('welcome', ['cards' => $cards,'categories'=>$categories]);
    }
    public function getSingleCard(Request $request)
    {
        $images=Image::where('card_id',$request->route('id'))->get();
        $id = $request->route('id');
        $card = Card::where('id', $id)->first();
        $cardAddress = $card->address;
        $config['center'] = $cardAddress;
        $config['zoom'] = '2';
        $config['map_height'] = '300px';
        $config['scrollwheel'] = false;
        $gmap = new GMaps();
        $gmap->initialize($config);
        $marker['position']=$cardAddress;
        $gmap->add_marker($marker);
        $map = $gmap->create_map();
        return view('singlecard', ['card' => $card,'images'=>$images])->with('map', $map);
    }
    public function buyCard(Request $request)
    {
        return view('buycard',['id'=>$request->id]);
    }
    public function submitCard(BuyCardRequest $request)
    { 
      $buyer= new Buyer();
      $buyer->name=$request->name;
      $buyer->company_name=$request->company_name;
      $buyer->number_of_employees=$request->num_employees;
      $buyer->phone_number=$request->phone_number;
      $buyer->card_id=$request->card_id;
      $buyer->save();
      return redirect()->back()->with('message','Картичката е успешно купена!');
    }
    public function addDiscount(){
        return view('adddiscount');
    }
    public function addCard(AddCardRequest $request){
        $category = Category::where('name', $request->category)->first();
        $newcard= new Card();
        $newcard->company_name=$request->company_name;
        $newcard->discount=$request->discount;
        $newcard->category_id=$category->id;
        $file = $request->thumbnail;
        $destination = 'images';
        $file->move($destination, $file->getClientOriginalName());
        $newcard->thumbnail = $destination . '/' . $file->getClientOriginalName();
        $newcard->description=$request->description;
        $newcard->link=$request->website;
        $newcard->facebook=$request->facebook;
        $newcard->phone_number=$request->phone;
        $newcard->email=$request->email;
        $newcard->price=100;
        $newcard->google_maps=$request->google_maps;
        $newcard->address=$request->address;
        $newcard->save();
        if($request->image_one){
            $image_one=new Image();
            $image_one->name=$request->image_one;
            $image_one->card_id=$newcard->id;
            $image_one->save();
        }
        if($request->image_two){
            $image_two=new Image();
            $image_two->name=$request->image_two;
            $image_two->card_id=$newcard->id;
            $image_two->save();
        }
        if($request->image_three){
            $image_three=new Image();
            $image_three->name=$request->image_three;
            $image_three->card_id=$newcard->id;
            $image_three->save();
        }
        if($request->image_four){
            $image_four=new Image();
            $image_four->name=$request->image_four;
            $image_four->card_id=$newcard->id;
            $image_four->save();
        }
        if($request->image_five){
            $image_five=new Image();
            $image_five->name=$request->image_five;
            $image_five->card_id=$newcard->id;
            $image_five->save();
        }
        if($request->image_six){
            $image_six=new Image();
            $image_six->name=$request->image_six;
            $image_six->card_id=$newcard->id;
            $image_six->save();
        }
        if($request->image_seven){
            $image_seven=new Image();
            $image_seven->name=$request->image_seven;
            $image_seven->card_id=$newcard->id;
            $image_seven->save();
        }
        if($request->image_eight){
            $image_eight=new Image();
            $image_eight->name=$request->image_eight;
            $image_eight->card_id=$newcard->id;
            $image_eight->save();
        }
        return redirect()->back();
    }
}
