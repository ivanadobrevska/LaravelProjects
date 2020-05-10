@extends('layout.master')
@section('main')
<div class="container allpets">
  
        
    <form action="{{route('searchpets')}}" method="POST">
        <div class="row">
            <div class="col-md-2">
                <h5 class="text-center">SIZE</h5>
                <select name="size">
                    <option value="Any">Any</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Big">Big</option>
                </select>
            </div>
            <div class="col-md-2">
                <h5 class="text-center">COAT LENGTH</h5>
                <select name="coat_length">
                    <option value="Any">Any</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Long">Long</option>
                </select>
            </div>
            <div class="col-md-2">
                <h5>GENDER</h5>
                <select name="gender">
                    <option value="Any">Any</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="search">Search</button>
            </div>
        </div>
        {{ csrf_field() }}
    </form>
    @foreach ($pets as $pet)
    <div class="col-md-2 col-xs-4 text-center">
            <a href="{{route('petprofile',['id'=>$pet->id])}}" >
                <div>
                    <figure class="effect-zoe">
                        <div class="animal-image">
                            <img src="{{$pet->image}}">
                        </div>
                        <div class="panel-clip"></div>
                        <div class="animal-name purplecolor">
                            <p>{{$pet->name}}</p>
                        </div>
                        <figcaption class="text-center figcaption">
                            <div class="image-on-hover">
                                <img src="{{$pet->image}}" class="circle-image" alt="">
                            </div>
                            <div class="text-on-hover">
                                <p class="h4 purplecolor">{{$pet->name}}</p>
                                <p>{{$pet->race}} <span>&#183</span> {{$pet->gender}} {{$pet->city}}</p>
                            </div>
                            <div class="social" style="display:none;">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-pinterest-p"></i>
                                <i class="far fa-envelope"></i>
                                <i class="far fa-copy"></i>
                                <p class="social-text"><b>Share this pet.</b></p>
                            </div>
                            <div class="hover-button" id="myDiv" >
                                <div class="button share"><i id="share" class="fa fa-share purplecolor"></i></div>
                                <div class="button exit"><i id="close" class="fas fa-times" style="display: none;"></i></div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection