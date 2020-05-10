<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        {!!$map['js']!!}
</head>
<body>
    <div class="grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{$card->thumbnail}}" class="img-responsive">
                </div>
                @if(session()->has('loggedin'))
                    <div class="col-md-2 col-md-offset-2">
                        <button class="black-btn"><a href="{{route('approvecard',['id'=>$card->id])}}">Одобри</a></button>
                    </div>
                    <div class="col-md-2">
                        <button class="black-btn"><a href="{{route('disapprovecard',['id'=>$card->id])}}">Одбиј</a></button>
                    </div>
                    <div class="col-md-2">
                        <button class="black-btn"><a href="{{route('editcard',['id'=>$card->id])}}">Едитирај</a></button>
                    </div>                    @endif
            </div>
           <div class="row">
               <div class="col-md-4">
                    <button class="grey-btn">{{$card->category->name}}</button>
                </div>
            </div>
           <div class="row">
               <div class="col-md-12">
                   <h1>{{$card->company_name}}</h1>
                </div>
            </div>
           <div class="row">
               <div class="col-md-12">
                   <h3 class="yellow-text">{{$card->discount}}</h3>
                </div>
            </div>
           <div class="row">
               <div class="col-md-7">
                    <div class="w3-content" style="max-width:1200px">
                        <?php for ($i = 0; $i < count($images); $i++)
                            if($i==1){?>
                                <img src="{{$images[$i]->name}}" class="mySlides" style="width:100%">
                            <?php }else{?>
                            <img src="{{$images[$i]->name}}" class="mySlides" style="width:100%;display:none">
                            <?php } ?>                              
                            <div class="w3-row-padding w3-section">
                                <?php for ($i = 0; $i < count($images); $i++){?>
                                    <div class="w3-col s4">
                                        <img src="{{$images[$i]->name}}" class="demo w3-opacity w3-hover-opacity-off" style="width:100%;cursor:pointer" onclick="currentDiv({{$i}})">
                                    </div>
                                <?php } ?>
                            </div>
                    </div>          
                    <p>{{$card->description}}</p>
                </div>
               <div class="col-md-5 darkGrey-bg white-text info">
                    <h3>{{$card->price}} денари</h3>
                    <h5 class="yellow-text">Имејл</h5>
                    <h5>{{$card->email}}</h5>
                    <h5 class="yellow-text">Физичка адреса</h5>
                    <h5>{{$card->address}}</h5>
                    <h5 class="yellow-text">Вебсајт</h5>
                    <div class="row">
                        <div class="col-xs-10">
                            <h5>{{$card->link}}</h5>
                        </div>
                        <div class="col-xs-2">
                            <a href="{{$card->link}}" class="yellow-text"><span class="glyphicon glyphicon-new-window"></span></a>
                        </div>
                    </div>
                    <h5 class="yellow-text">Фејсбук страна</h5>
                    <div class="row">
                        <div class="col-xs-10">
                            <h5>{{$card->facebook}}</h5>
                        </div>
                        <div class="col-xs-2">
                            <a href="{{$card->facebook}}" class="yellow-text"><span class="glyphicon glyphicon-new-window"></span></a>
                        </div>
                    </div>
                    <h5 class="yellow-text">Телефонски број</h5>
                    <div class="row">
                        <div class="col-md-10">
                            <h5>{{$card->phone_number}}</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="" class="yellow-text"><span class="glyphicon glyphicon-new-window"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!!$map['html']!!}
                        </div>
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-md-4">
                    <button class="black-btn buy-now"><a href="{{route('buycard',['id' => $card->id])}}" class="white-text">КУПИ СЕГА</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
<script>
function currentDiv(n) {
        showDivs(slideIndex = n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
      }
</script>
</html>