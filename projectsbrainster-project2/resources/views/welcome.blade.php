@extends('layout.master')
@section('main')
<div class="main1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Where Pets Find Their People</h1>
                <h3>Thousands of adoptable pets are looking for people. People like you</h3>
                <button class="btn btn-lg">LEARN MORE!</button>
            </div>
        </div>
    </div>
</div>
<div class="main2">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-12">
                <input type="text" name="location" placeholder="Enter your location here" class="searchinput  hidden-sm hidden-xs"><!--
             --><button class="findPet">
                    <i class="fas fa-dog"></i>
                    <span>Find a dog</span>
                </button><!--
            --><button class="findPet">
                    <i class="fas fa-cat"></i>
                    <span>Find a cat</span>
                </button><!--
            --><button class="findPet findOtherPets hidden-xs">
                    <span>Find other pets <i class="fas fa-angle-down"></i></span>
                </button><!--
            --><button class="findPet otherPetsXs hidden-lg hidden-xl hidden-md hidden-sm">
                    <span>Find other pets <i class="fas fa-angle-down"></i></span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="cards">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h1>Pets waiting for adoption</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($pets as $pet)
                <div class="col-md-2 text-center col-sm-4 col-xs-6">
                    <a href="{{route('petprofile',['id'=>$pet->id])}}" >
                        <div>
                            <figure class="effect-zoe">
                                <div class="animal-image">
                                    <img src="{{$pet->image}}">
                                </div>
                                <div class="panel-clip"></div>
                                <div class="animal-name purpleText">
                                    <p>{{$pet->name}}</p>
                                </div>
                                <figcaption class="text-center figcaption">
                                    <div class="image-on-hover">
                                        <img src="{{$pet->image}}" class="circle-image" alt="">
                                    </div>
                                    <div class="text-on-hover">
                                        <p class="h4 purpleText">{{$pet->name}}</p>
                                        <p>{{$pet->race}} <span>&#183</span> {{$pet->gender}} {{$pet->city}}</p>
                                    </div>
                                    <div class="social" style="display:none;">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-pinterest-p"></i>
                                        <i class="far fa-envelope"></i>
                                        <i class="far fa-copy"></i>
                                        <p class="social-text"><b>Share {{$pet->name}}.</b></p>
                                    </div>
                                    <div class="hover-button" id="myDiv" >
                                        <div class="button share"><i id="share" class="fa fa-share purpleText"></i></div>
                                        <div class="button exit"><i id="close" class="fas fa-times" style="display: none;"></i></div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="col-md-2 col-sm-4 col-xs-6 bluecards purpleBg whiteText">
                <div>
                    <div class="row">
                        <a href="{{route('allpets')}}" class="whiteText">
                            <div class="col-md-12">
                                <i class="fas fa-paw"></i>
                                <p>{{$count_pets}} more pets available</p>
                                <div class="border-top">
                                    <a><h3>MEET THEM</h3></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div>
<div class="bgDog"></div>
<div class="container text-center adoptPet hidden-sm hidden-xs">
    <h3>Planning to Adopt a Pet?</h3>
    <div class="row">
        <div class="col-md-4">
            <img src="/css/Images/PCE_Blue_Icon-18.png">
            <h4>Checklist for New Adopters</h4>
            <p>Help make the transition as smooth as possible.</p>
            <button>LEARN MORE</button>
        </div>
        <div class="col-md-4">
            <img src="/css/Images/PCE_Blue_Icon-17.png">
            <h4>Finding the Right Pet</h4>
            <p>Get tips on figurin out who you should adopt.</p>
            <button>LEARN MORE</button>
        </div>
        <div class="col-md-4">
            <img src="/css/Images/PCE_Blue_Icon-8.png">
            <h4>Pet Adoptaion FAQs</h4>
            <p>Get answers to question you havent thought of.</p>
            <button>LEARN MORE</button>
        </div>
    </div>
</div>
<div id="carousel-example-generic" class="carousel slide hidden-md hidden-lg" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="carousel-text text-center">
                <img src="/css/Images/PCE_Blue_Icon-18.png">
                <h4>Checklist for New Adopters</h4>
                <p>Help make the transition as smooth as possible.</p>
            </div>
            <button>LEARN MORE</button>
        </div>
        <div class="item">
            <div class="carousel-text text-center">
                <img src="/css/Images/PCE_Blue_Icon-17.png">
                <h4>Finding the Right Pet</h4>
                <p>Get tips on figurin out who you should adopt.</p>
            </div>
            <button>LEARN MORE</button>
        </div>
        <div class="item">
            <div class="carousel-text text-center">
                <img src="/css/Images/PCE_Blue_Icon-8.png">
                <h4>Pet Adoptaion FAQs</h4>
                <p>Get answers to question you havent thought of.</p>
            </div>
            <button>LEARN MORE</button>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
     </a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center articles">
                <div class="leftcard">
                    <img src="/css/Images/1card.jpeg">
                </div>
                <div class="content"></div>
                    <img src="/css/Images/1card.jpeg" class=" imgbadge img-circe img-responsive">
                    <div class="content-body">
                        <h3>Cat Adoption Articles</h3>
                        <p>Learn more about caring your new dog</p>
                    </div>
                    <div class="readmore btn">
                        <h4>READ MORE</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center articles">
                    <div class="leftcard">
                        <img src="css/Images/1card.jpeg">
                    </div>
                    <div class="content"></div>
                        <img src="css/Images/1card.jpeg" class=" imgbadge  img-responsive">
                        <div class="content-body">
                            <h3>Cat Adoption Articles</h3>
                            <p>Learn more about caring your new dog</p>
                        </div>
                        <div class="readmore btn">
                            <h4>READ MORE</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection