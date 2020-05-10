<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\apps_country;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class DatabaseController extends Controller
{
    public function getData()
    {
        $pets = Pet::all()->take(4);
        $count_pets = Pet::count();
        $countries = apps_country::all();
        return view('welcome', ['pets' => $pets, 'count_pets' => $count_pets, 'countries' => $countries]);
    }
    public function showPet(Request $request)
    {
        $countries = apps_country::all();
        $id = $request->route('id');
        $pets = Pet::where('id', $id)->get();
        return view('petprofile', ['pets' => $pets, 'countries' => $countries]);
    }
    public function signin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator, 'myModal');
        }
        $users = User::all();
        foreach ($users as $user) {
            if (($user->email == $request->email) & ($user->password == $request->password)) {
                $pets = Pet::all()->take(4);
                $count_pets = Pet::count();
                $signeduser = User::where('id', $user->id)->get();
                session([
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'id' => $user->id,
                    'email' => $user->email
                ]);
                // \Auth::loginUsingId($user->id);

                return view('welcome', session()->all(), ['signeduser' => $signeduser, 'pets' => $pets, 'count_pets' => $count_pets]);
            }
        }
    }
    public function registerUser(Request $request)
    {
        $rules = [
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'postalcode' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator, 'myModal2');
        }
        $user = new User();
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->zip = $request->postalcode;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->country = $request->country;
        $user->save();
        session([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'id' => $user->id,
            'email' => $user->email
        ]);
        $pets = Pet::all()->take(4);
        $count_pets = Pet::count();
        return view('welcome', session()->all(), ['pets' => $pets, 'count_pets' => $count_pets]);
    }


    public function myprofile(Request $request)
    {
        $id = $request->route('id');
        $users = User::where('id', $id)->get();
        $countries = apps_country::all();

        return view('myprofile', ['countries' => $countries, 'users' => $users]);
    }
    public function signOut(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('welcome');
    }
    public function addPet(Request $request)
    {
        $file = $request->image;
        $destination = 'css/Images';
        $file->move($destination, $file->getClientOriginalName());
        $pet = new Pet();
        $pet->name = $request->pet_name;
        $pet->race = $request->race;
        $pet->city = $request->location_pet;
        $pet->gender = $request->gender;
        $pet->size = $request->size;
        $pet->coat_length = $request->coat_length;
        $pet->house_trained = $request->house_trained;
        $pet->good_with = $request->good_with;
        $pet->description = $request->long_description;
        $pet->image = $destination . '/' . $file->getClientOriginalName();
        $pet->characteristics = $request->characteristics;
        $pet->health = $request->short_description;
        $pet->user_id = session('id');
        $pet->save();
        return redirect()->route('welcome');
    }
    public function sendMessage(Request $request)
    {
        $id = $request->route('id');
        $pet = Pet::where('id', $id)->first();
        $user = User::where('id', $pet->user_id)->first();
        $to_email = $user->email;
        $data = array('name' => "Sam Jose", "body" => "Test mail");
        Mail::send('emails.mail', $data, function ($message) use ($to_email) {
            $message->to($to_email)
                ->subject('Artisans Web Testing Mail');
        });
        return Redirect::back();
    }
    public function showAllPets()
    {
        $pets = Pet::all();
        $countries = apps_country::all();
        return view('allpets',['pets'=>$pets,'countries' => $countries]);
    }
    public function searchPets(Request $request){
        $pets=Pet::all();
        $searchpets=Pet::all();
        if($request->size!='Any'){
            $searchpets=Pet::where('size',$request->size)->get();
        }
        if($request->gender==='Any'){
            $searchpets=Pet::where('size',$request->size)->get();
        }else{
            $searchpets=Pet::where('gender',$request->gender)->get();
        }
        if($request->coat_length==='Any'){
            $searchpets=Pet::where('gender',$request->gender)->get();
        }else{
            $searchpets=Pet::where('coat_length',$request->coat_length)->get();
        }
        return view('allpets',['pets'=>$searchpets]);
    }
}
