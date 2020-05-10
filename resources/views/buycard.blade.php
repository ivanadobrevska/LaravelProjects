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
        <div class="container">
            <a href="{{route('welcome')}}" class="black-text"><i class="fas fa-long-arrow-alt-left"></i></a>
            <h1>Купи картичка за вработените</h1>
        </div>
    </div>
    <div class="grey-bg">
        <div class="container buy-card">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{route('submitcard')}}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <label for="name">Име и презиме</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('name') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="name" placeholder="пр. Кристијан Ѓорѓиевски">    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="company_name">Име на компанија</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <p class="errors">
                                @foreach($errors->get('company_name') as $error)
                                    {{$error}}
                                @endforeach
                            </p>
                        <input type="text" name="company_name" placeholder="пр. Мајкрософт ДООЕЛ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="num_employees">Број на вработени</label>
                        <p class="errors">
                            @foreach($errors->get('num_employees') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="num_employees" placeholder="пр. 200">
                    </div>
                    <div class="col-md-6">
                        <label for="phone_number">Телефон за контакт</label>
                        <p class="errors">
                            @foreach($errors->get('phone_number') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="phone_number" placeholder="пр. 07Х/ХХХ-ХХХ">
                        <input type="hidden" name="card_id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <button type="submit" class="black-btn">ИСПРАТИ</button>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
</html>