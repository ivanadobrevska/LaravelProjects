@extends('layout.master')
@section('main')
@foreach ($pets as $pet)
    <div class="blackBg">
        <div class="container-fluid text-center">
            <img src="{{$pet->image}}">
        </div>
    </div>
    <div class="greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 whiteBg">
                    <h2 class="purpleText">{{$pet->name}}</h2>
                    <h6>{{$pet->race}}<span>&#183</span>{{$pet->city}}</h6>
                    <hr>
                    <h5><span>&#183</span> {{$pet->gender}} <span>&#183</span> {{$pet->size}} <span>&#183</span></h5>
                    <h2 class="purpleText">About</h2>
                    <h3>COAT LENGTH</h3>
                    <h6>{{$pet->coat_length}}</h6>
                    <h3>HOUSE-TRAINED</h3>
                    <h6>{{$pet->house_trained}}</h6>
                    <h3>HEALTH</h3>
                    <h6>{{$pet->health}}</h6>
                    <h3>GOOD IN A HOME WITH</h3>
                    <h6>{{$pet->good_with}}</h6>
                    <hr>
                    <h2 class="purpleText">Meet {{$pet->name}}</h2>
                    <p>{{$pet->description}}</p>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="purpleBg text-center askAbout">
                        <div class="row noMargin borderBottom">
                            <div class="col-md-12">
                                <button href="#myDropdownAsk" onclick="myFunction()" class=" purpleText">ASK ABOUT {{$pet->name}} </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 whiteText borderTop borderRight">
                                <a  href="#"><i class="fas fa-share"></i> SHARE</p>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-6 whiteText">
                                <a href="#"><i class="fas fa-print"></i> PRINT</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="whiteBg dropdown-ask" id="myDropdownAsk">
            <div class="purpleBg">
                <div class="container" style="border-bottom:1px solid white">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img src="{{$pet->image}}" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 whiteText">
                            <h2>Ask About {{$pet->name}}</h2>
                            <h5>{{$pet->race}}</h5>
                            <h4><span>&#183</span>{{$pet->gender}} <span>&#183</span> {{$pet->size}} <span>&#183</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">                
                <form action="{{route('sendmessage',['id'=>$pet->id])}}" action="POST">
                    <div class="row">
                        @if (session()->get('first_name')!=null)
                        <div class="col-md-6">
                            <h3>FROM</h3>
                            <h2>{{session()->get('first_name')}} {{session()->get('last_name')}}</h2> 
                        </div>   
                        @else
                        <div class="col-md-6">
                            <h5>Have an account? <a href='#' type='button' data-toggle='modal' data-target='#myModal' class="purple-text">Sign in</span></h5></a>
                            <h4>OR INQUIRE AS A GUEST</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="firstname" placeholder="First name">
                                    <input type="text" name="email" placeholder="Email"><br>
                                    <div class="form-group">
                                        <label class="form-control-placeholder" for="country">Countries</label>
                                        <select name="country" id="countries" class="form-control purpleText" required>
                                            @foreach ($countries as $country)
                                                <option value="{{$country->name}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lastname" placeholder="Last name">
                                    <input type="text" name="phone_number" placeholder="Phone Number (Optional)">
                                    <input type="text" name="postal_code" placeholder="Postal Code">
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>YOUR MESSAGE (5000 CHARACTERS LIMIT)</h4>
                                </div>
                                <div class="col-md-5 text-left">
                                    <h6><em>Additional comments for the Shelter/Rescue</em></h6>
                                </div>
                            </div> 
                            <div class="row">                        
                                <div class="col-md-12">
                                    <textarea name="questions" cols="30" rows="8" placeholder="I'am wondering if Harley is..."></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ csrf_field() }}
                                    <button class="purpleBg">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </div>        
                </form>
            </div>
        </div>
    </div>
    <div class="whiteBg fixedFooter">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="{{$pet->image}}" class="img-responsive img-circle">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <h5 class="purpleText">{{$pet->name}}</h5>
                    <h6>{{$pet->race}} <span>&#183</span> {{$pet->gender}} <span>&#183</span> {{$pet->size}} <span>&#183</span></h6>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="row">
                        <div class="col-md-8">
                            <button class="purpleBg">ASK ABOUT {{$pet->name}}</button>
                        </div>
                        <div class="col-md-4"><i class="fas fa-share purpleBg"></i></div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection