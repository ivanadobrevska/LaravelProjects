<li class="hidden-xs hidden-sm">
    <a href='#' type='button' data-toggle='modal' data-target='#myModal'> Sign In / Register</a>
    <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <div class='container-fluid'>
                        <div class='row'>
                            <div class='col-md-6 col-sm-6 purpleBg whiteText modalHeight'>
                                <div class='container-fluid'>
                                    <h2>We Make Adopting Easier</h2>
                                    <ul>
                                        <li>Create and save your adopter profile</li>
                                        <li>Save and manage your pet searches and email communications</li>
                                        <li>Learn helpful pet care tips and receive expert advice</li>
                                        <li>Get involved and help promote adoptable pets in your area</li>
                                    </ul>
                                </div>
                            </div>
                            <div class='col-md-6 col-sm-6'>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onClick="closeAll()"><span aria-hidden='true'>&times;</span></button>
                                <div class='container-fluid'>
                                    <h2>Log in</h2>
                                    @foreach ($errors->myModal->all() as $error)
                                        <p style="color:red">{{$error}}</p>
                                    @endforeach
                                    <form method='POST' action='{{route("signin")}}'>
                                        <input type='email' name='email' placeholder='Email'>
                                        <input type='password' name='password' placeholder='Password'>
                                        <button type='submit' class='purpleBg'>LOG IN</button>
                                        <button class='purpleBg'><a href='#'><i class='fab fa-facebook-f'></i> SIGN IN WITH FACEBOOK</a></button>
                                        {{ csrf_field() }}
                                    </form>
                                    <div class='purpleText'>
                                        <h6 class='text-center'>FORGOT PASSWORD?</h6>
                                    </div>
                                    <h6 class='text-center'>DON'T HAVE AN ACCOUNT?</h6>
                                    <a href='#' type='button' data-toggle='modal' data-target='#myModal2' button type='button' data-dismiss='modal' aria-label='Close'><button class='purpleBg registerBtn'>REGISTER NOW</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="hidden-lg hidden-xl hidden-md">
    <a href='#' type='button' data-toggle='modal' data-target='#myModalReversed'> Sign In / Register</a>
    <div class='modal fade' id='myModalReversed' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <div class='container-fluid'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onClick="closeAll()"><span aria-hidden='true'>&times;</span></button>
                                <div class='container-fluid'>
                                    <h2>Log in</h2>
                                    @foreach ($errors->myModal->all() as $error)
                                        <p style="color:red">{{$error}}</p>
                                    @endforeach
                                    <form method='POST' action='{{route("signin")}}' name="signin">
                                        <input type='email' name='email' placeholder='Email'>
                                        <input type='password' name='password' placeholder='Password'>
                                        <button type='submit' class='purpleBg'>LOG IN</button>
                                        <button class='purpleBg'><a href='#'><i class='fab fa-facebook-f'></i> SIGN IN WITH FACEBOOK</a></button>
                                        {{ csrf_field() }}
                                    </form>
                                    <div class='purpleText'>
                                        <h6 class='text-center'>FORGOT PASSWORD?</h6>
                                    </div>
                                    <h6 class='text-center'>DON'T HAVE AN ACCOUNT?</h6>
                                    <a href='#' type='button' data-toggle='modal' data-target='#myModal2' button type='button' data-dismiss='modal' aria-label='Close'><button class='purpleBg registerBtn'>REGISTER NOW</button></a>
                                </div>
                            </div>
                            <div class='col-md-6 purpleBg whiteText'> 
                                <div class='container-fluid'>
                                    <h2>We Make Adopting Easier</h2>
                                    <ul>
                                        <li>Create and save your adopter profile</li>
                                        <li>Save and manage your pet searches and email communications</li>
                                        <li>Learn helpful pet care tips and receive expert advice</li>
                                        <li>Get involved and help promote adoptable pets in your area</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
{{-- Registration modal --}}
<div class='modal fade' id='myModal2' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='container-fluid'>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <div class='row'>
                        <h2>Register</h2>
                    </div>
                    @foreach ($errors->myModal2->all() as $error)
                        <p style="color:red">{{$error}}</p>
                    @endforeach
                    <form action='{{route('registeruser')}}' method="POST" name="register">
                        <div class='row'>
                            <div class='col-md-6'>
                                <input type='text' name='firstname' placeholder='First Name'>
                            </div>
                            <div class='col-md-6'>
                                <input type='text' name='lastname' placeholder='Last Name'>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-6'>
                                <select name='country'>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class='col-md-6'>
                                <input type='text' name='postalcode' placeholder='Postal Code'>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-6'>
                                <input type='email' name='email' placeholder='Email'>
                            </div>
                            <div class='col-md-3'><em>You will use your email addres to log in</em></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-6'>
                                <input type='password' name='password' placeholder='Password'>
                            </div>
                            <div class='col-md-6'>
                                <input type='password' name='password_confirmation' placeholder='Confirm Password'>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class='row'>
                            <div class='col-md-6'>
                                <button type='submit' class='purpleBg registerBtn'>Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
