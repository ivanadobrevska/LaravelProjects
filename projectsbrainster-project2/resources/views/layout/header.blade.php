<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="row menu">
            <div class="col-md-2 col-sm-2 col-xs-1 text-left">
                <a class="dropbtn" onclick="menu()" href="#"><i class="fas fa-bars"></i></a>
            </div>
            <div class="col-md-5 col-md-offset-5 col-sm-5 col-sm-offset-5 col-xs-9 col-xs-offset-2">
                <ul class="nav navbar-nav navbar-right">
                    <li class="borderRight hidden-sm hidden-xs"><a href="#"><i class="fas fa-search searchBtn"></i> </a></li>
                    <li class="hidden-xs"><i class='fas fa-user-alt user'></i></li>
                    <li class="hidden-xs hideDiv">
                        @if (session()->get('first_name')!=null)
                            <div class="dropdown hidden-xs">
                                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{session('first_name')}}
                                    {{session('last_name')}}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="{{route('myprofile',['id'=>session('id')])}}">Account Info</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="{{route('signout')}}">Sign Out</a>
                                        </div>
                                    </div>
                                    
                                </ul>
                            </div>
                        @else
                            @include('layout.modal')    
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center purpleBg dropdown-content" id="myDropdown">
        <div class="row">
            <div class="col-md-2"><a href="#">ABOUT PET ADOPTION</a></div>
            <div class="col-md-2"><a href="#">DOG ADOPTION </a></div>
            <div class="col-md-2"><a href="#">CAT ADOPTION</a></div>
            <div class="col-md-2"><a href="#">PET ADOPTION STORIES </a></div>
            <div class="col-md-2"><a href="#">INFORMATIONS</a></div>
            <div class="col-md-2"><a href="#">VIDEOS</a></div>
            <div class="col-sm-12 hidden-lg hidden-xl hidden-md">
                <div class="input-group searchGroup">
                    <input type="text" class="form-control" placeholder="Search Articles">
                    <div class="input-group-addon"><i class="fas fa-search searchBtn"></i></div>
                </div>
            </div>
            <div class="col-xs-12 hidden-lg hidden-xl hidden-md hidden-sm">
                @if (session()->get('first_name')!=null)
                    <div class="dropdown">
                        <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{session('first_name')}}
                            {{session('last_name')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <a href="{{route('myprofile',['id'=>session('id')])}}">Account Info</a>
                            <a href="{{route('signout')}}">Sign Out</a>
                        </ul>
                    </div>
                @else
                    @include('layout.modal')    
                @endif
            </div>
        </div>
    </div>
</nav>