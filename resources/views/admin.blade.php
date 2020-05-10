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
</head>
<body>
    <div class="yellow-bg">
        <div class="container text-center">
            <h1>Листа со купени картички</h1>
        </div>
    </div>
    <div class="grey-bg">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <th>Реден број</th>
                    <th>Дата на внесување на апликацијата</th>
                    <th>Име и презиме</th>
                    <th>Име на компанијата</th>
                    <th>Број на вработени</th>
                    <th>Телефонски број</th>
                </thead>
                @foreach ($buyers as $buyer)
                <tr>
                    <td>{{$buyer->id}}</td>
                    <td>{{$buyer->created_at}}</td>
                    <td>{{$buyer->name}}</td>
                    <td>{{$buyer->company_name}}</td>
                    <td>{{$buyer->number_of_employees}}</td>
                    <td>{{$buyer->phone_number}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="yellow-bg">
        <div class="container text-center">
            <h1>Листа со компании кои нудат попуст</h1>
        </div>
    </div>
    <div class="grey-bg">
            <div class="container" id="all-cards">
                @foreach ($cards as $card)
                <div class="col-md-4 text-center inline-cards">
                    <div class="card">
                        <div class="image-card">
                            <img src="{{$card->thumbnail}}" class="img-responsive center-block">
                        </div>
                        <div class="card-main">
                            <h3 class="company-name">{{$card->company_name}}</h3>
                            <p class="yellow-text">{{$card->discount}}</p>
                            <button class="white-btn">{{$card->category->name}}</button>
                        </div>
                        <div class="card-more">
                            <button class="black-btn"><a href="{{route('singlecard',['id'=>$card->id])}}" class="white-text">ВИДИ ПОВЕЌЕ</a></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
</html>