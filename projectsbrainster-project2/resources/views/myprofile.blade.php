@extends('layout.master')
@section('main')
@foreach ($users as $user)
<div class="container-fluid">
        <h1 class="purpleText">My Profile</h1>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About Me</a></li>
            <li role="presentation"><a href="#account" aria-controls="account" role="tab" data-toggle="tab">Account Settings</a></li>
            <li role="presentation"><a href="#searches" aria-controls="searches" role="tab" data-toggle="tab">Saved Searches & Alerts</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="about">
                <form action="" method="">
                    <h4>WHAT IS YOUR NAME?</h4>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input type="text" id="name" name="name" class="form-control purpleText" required placeholder="{{$user->first_name}}">
                            <label class="form-control-placeholder" for="name">First Name</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" id="lastname" name="lastname" class="form-control purpleText" required placeholder="{{$user->last_name}}">
                            <label class="form-control-placeholder" for="lastname">Last Name</label>
                        </div>
                    </div>
                    <h4>HOW CAN YOU BE REACHED?</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="phonenumber" name="phonenumber" class="form-control purpleText" required placeholder="{{$user->phone_number}}">
                            <label class="form-control-placeholder" for="phonenumber">Phone number</label>   
                        </div>
                    </div>
                    <h4>WHERE DO YOU LIVE?</h4>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="form-control-placeholder" for="country">Countries</label>
                            <select name="country" id="countries" class="form-control purpleText" required>
                            <option selected="selected" value="{{$user->country}}">{{$user->country}}</option>    
                                @foreach ($countries as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="address" name="address" class="form-control purpleText" required placeholder="{{$user->address}}">
                            <label class="form-control-placeholder" for="address">Street Address</label>
                        </div>
                        <div class="col-sm-6">
                                <input type="text" id="address2" name="street_continued" class="form-control purpleText" required placeholder="{{$user->street_continued}}">
                                <label class="form-control-placeholder" for="street_continued">Street Continued</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="city" name="city" class="form-control purpleText" required placeholder="{{$user->city}}">
                            <label class="form-control-placeholder" for="city">City/Town</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label class="form-control-placeholder" for="states">States</label>
                            <select name="states" id="states" class="form-control purpleText" required>
                                    <option selected="selected" value="{{$user->state}}">{{$user->state}}</option>
                                    @foreach ($countries as $country)
                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                        @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="zip_code" name="zip_code" class="form-control purpleText" required placeholder="{{$user->zip}}">
                            <label class="form-control-placeholder" for="zip_code">ZIP code</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="add-pet">YOUR CURRENT PETS</label>
                        </div>
                    </div>
                    
                </form>
                <div class="row">
                        <div class="col-md-6">
                            <button class="purpleBg registerBtn" onclick="myProfile()">ADD A PET</button>
                        </div>
                    </div>
                <form action="{{route('addpet')}}" method="POST" class="dropdown-content" id="addPet" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pet_name">Pet Name</label>
                            <input type="text" name="pet_name" placeholder="Name">
                        </div>
                        <div class="col-md-3">
                                <label for="pet_type">Type</label>
                                <input type="text" name="race" placeholder="Race">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="location_pet">Location</label>
                            <input type="text" name="location_pet" placeholder="Location">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="image">Image</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="short_description">Health</label>
                            <input type="text" name="short_description">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="characteristics">Characteristics</label>
                        </div>
                        <div class="col-md-3">
                            <label for="coat_length">Coat length</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="characteristics">
                        </div>
                        <div class="col-md-3">
                            <select name="coat_length">
                                    <option selected='selected'>Choose...</option>
                                    <option value="Small">Small</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Long">Long</option>
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="house_trained">House trained</label>
                        </div>
                        <div class="col-md-4">
                            <label for="good_with">Good in a home with</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                                <select name="house_trained">
                                        <option selected='selected'>Choose...</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="good_with">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="size">Size</label>
                        </div>
                        <div class="col-md-3">
                            <label for="gender">Gender</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                                <select name="size">
                                        <option selected='selected'>Choose...</option>
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Big">Big</option>
                                    </select>
                        </div>
                        <div class="col-md-3">
                                <select name="gender">
                                        <option selected='selected'>Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Femal">Female</option>
                                    </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="long_description">Long description</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <textarea name="long_description" rows="4"></textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit"  class="purpleBg registerBtn">Add a Pet</button>
                        </div>
                    </div>

                </form>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>You may <a href="#" class="purpleText">search our database</a> of thousands of pets looking for forever homes</p>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="account">
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="email">EMAIL</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="email-input" name="email" placeholder="Email from DB">
                        </div>
                        <div class="col-md-3">
                            <button class="email-change purple-text">Change</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="change_password">CHANGE PASSWORD</label>
                            <input type="password" name="current_password" placeholder="Current password">
                            <input type="password" name="new-password" placeholder="New password">
                            <input type="password" name="confirm-password" placeholder="Confirm password">
                            <button type="submit" class="purpleBg registerBtn">UPDATE PASSWORD </button>
                        </div>
                    </div>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="searches">
                <div class="row">
                    <div class="col-md-6">
                        <p>Yoy have set up 0 alerts for new pets.</p>
                        <p>Pet search alerts monitor for you, so you can get a first look at any newly added pets.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>To set one up, choose 'SET ALERT' next to the bell icon in youe search results.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    @endforeach
@endsection