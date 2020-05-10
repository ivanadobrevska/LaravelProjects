<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proekt</title>
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="yellow-bg">
            <div class="container">
                <h1>Купете картичка со попуст за вашите вработени. </h1>
                <h4 class="grey-text">Најдобри онлајн попусти за производи, услуги, фитнес центри, ресторани, едукација и кариера</h4>
            </div>
        </div>
        <div class="search-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <input type="text" name="discount" id="discount" placeholder="Пребарај попусти">
                    </div>
                    <div class="col-xs-3 dropdown">
                        <div href="#" class="dropdown-toggle row" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="col-xs-6" id="main-li">Сите</div>
                            <div class="col-xs-6 text-right"> <span class="glyphicon glyphicon-chevron-down"></span></div>
                        </div>
                        <ul class="dropdown-menu">
                            <li id="all" style="display:none">Сите</li>
                            <li role="separator" class="divider" id="all-separator" style="display:none"></li>
                            <li id="products">Производи</li>
                            <li role="separator" class="divider" id="products-separator"></li>
                            <li id="service">Услуги</li>
                            <li role="separator" class="divider" id="service-separator"></li>
                            <li id="restaurant">Ресторани</li>
                            <li role="separator" class="divider" id="restaurant-separator"></li>
                            <li id="fittness">Фитнес центри</li>
                            <li role="separator" class="divider" id="fittness-separator"></li>
                            <li id="education">Образование и кариера</li>
                        </ul>
                    </div>
                    <div class="col-md-3 list-type hidden-sm hidden-xs">
                        <span class="glyphicon glyphicon-th white-text" id="three-cards"></span>
                        <span class="glyphicon glyphicon-th-list yellow-text" id="list-cards"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grey-bg">
            <div class="container" id="all-cards">
                @foreach ($cards as $card)
                <div class="col-md-4 text-center inline-cards 
                    <?php foreach($categories as $category){
                        if($category->name==$card->category->name){?>
                            {{str_replace(' ','_',$category->name)}}
                       <?php }
                    } ?>">
                    <div class="card">
                        <div class="image-card">
                            <img src="{{$card->thumbnail}}" class="img-responsive center-block">
                        </div>
                        <div class="card-main">
                            <h3 class="company-name">{{$card->company_name}}</h3>
                            <p class="yellow-text">{{$card->discount}}</p>
                            <button class="white-btn category-name">{{$card->category->name}}</button>
                        </div>
                        <div class="card-more">
                            <button class="black-btn"><a href="{{route('singlecard',['id'=>$card->id])}}" class="white-text">ВИДИ ПОВЕЌЕ</a></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
       
        <div class="darkGrey-bg">
                <div class="container">
                    <h1 class="white-text">Дали сте заинтересирани вашата компанија да понуди попуст?</h1>
                    <h4>Најдобри онлајн попусти за производи, услуги, фитнес центри, ресторани, едукација и кариера</h4>
                    <button class="yellow-btn yellow-bg"><a href="{{route('adddiscount')}}" class="black-text">КРЕИРАЈ ПОПУСТ</a></button>
                </div>
            </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
</html>
