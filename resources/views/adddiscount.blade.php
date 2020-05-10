<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
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
            <h1>Понудете картичка со попуст</h1>
        </div>
    </div>
    <div class="grey-bg">
        <div class="container add-discount">
            <form <?php if(isset($card->company_name)){ ?> action="{{route('changecard',['id'=>$card->id])}}" <?php } else{ ?> action="{{route('addcard')}}" <?php } ?> method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <label for="company_name">Име на компанијата која нуди попуст</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('company_name') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="company_name" placeholder="пр. Мајкрософт ДООЕЛ" <?php if (isset($card->company_name)){?>
                            value="{{$card->company_name}}"
                        <?php }?>
                        >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="discount">Вид на попуст</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('discount') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="discount" placeholder="пр. 50% на купување" <?php if (isset($card->discount)){?>
                            value="{{$card->discount}}"
                        <?php }?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="category">Избери категорија</label>
                    </div>
                </div>
                <div class="row">
                    <p class="errors">
                        @foreach($errors->get('category') as $error)
                            {{$error}}
                        @endforeach
                    </p>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <input type="radio" id="control_01" name="category" value="Products"  <?php if(isset($card->category_id)){if($card->category->name=='Products'){?>
                            checked="checked" <?php }}?>>
                        <label for="control_01" class="radio-label yellow-border">
                            <p>ПРОИЗВОДИ</p>
                        </label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <input type="radio" id="control_02" name="category" value="Restaurants"  <?php if(isset($card->category_id)){if($card->category->name=='Restaurants'){?>
                            checked="checked" <?php }}?>>
                        <label for="control_02" class="radio-label yellow-border">
                            <p>РЕСТОРАНИ</p>
                        </label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <input type="radio" id="control_03" name="category" value="Fitness Center"  <?php if(isset($card->category_id)){if($card->category->name=='Fitness Center'){?>
                            checked="checked" <?php }}?>>
                        <label for="control_03" class="radio-label yellow-border">
                            <p>ФИТНЕС ЦЕНТРИ</p>
                        </label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <input type="radio" id="control_04" name="category" value="Education and Carrier"  <?php if(isset($card->category_id)){if($card->category->name=='Education and Carrier'){?>
                            checked="checked" <?php }}?>>
                        <label for="control_04" class="radio-label yellow-border">
                        <p>ОБРАЗОВАНИЕ И КАРИЕРА</p>
                        </label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <input type="radio" id="control_05" name="category" value="Services"  <?php if(isset($card->category_id)){if($card->category->name=='Services'){?>
                            checked="checked" <?php }}?>>
                        <label for="control_05" class="radio-label yellow-border">
                            <p>УСЛУГИ</p>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="thumbnail">Постави thumbnail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="errors">
                            @foreach($errors->get('thumbnail') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <i class="fas fa-plus"></i>
                                <input type="file" name="thumbnail" <?php if(isset($card->thumbnail)){ ?> value="{{$card->thumbnail}}"<?php } ?>>
                            </div>
                        </div>
                        <p><em>Сликата мора да биде во .png формат</em></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="description">Опис на понудата</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('description') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <textarea name="description" placeholder="Краток опис на вашата понуда" cols="30" rows="5" ><?php if (isset($card->description)){?>
                            {{$card->description}}
                        <?php }?></textarea>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <label for="website">Линк до вашиот вебсајт</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('website') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="website" placeholder="пр. https://mojotvebsajt.com" <?php if (isset($card->link)){?>
                            value="{{$card->link}}"
                        <?php }?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="facebook">Фејсбук страна</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('facebook') as $error)
                                {{$error}}
                            @endforeach
                        </p>    
                        <input type="text" name="facebook" placeholder="Пр. https://facebook.com/my_company" <?php if (isset($card->facebook)){?>
                            value="{{$card->facebook}}"
                        <?php }?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="phone">Телефонски број</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('phone') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="phone" placeholder="пр. 07Х/ХХХ-ХХХ" <?php if (isset($card->phone_number)){?>
                            value="{{$card->phone_number}}"
                        <?php }?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="email">Вашиот имејл</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('email') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="email" placeholder="пр. mojotemail@gmail.com" <?php if (isset($card->email)){?>
                            value="{{$card->email}}"
                        <?php }?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="google_maps">Google maps адреса</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('google_maps') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="google_maps" placeholder="пр. https://wwww.google.com/maps/place/your+place" <?php if (isset($card->google_maps)){?>
                            value="{{$card->google_maps}}"
                        <?php }?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="address">Физичка адреса</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="errors">
                            @foreach($errors->get('address') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <input type="text" name="address" placeholder="пр. Партизански херои бб." <?php if (isset($card->address)){?>
                            value="{{$card->address}}"
                        <?php }?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="images">Фотографии</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-4">
                        <p class="errors">
                            @foreach($errors->get('image_one') as $error)
                                {{$error}}
                            @endforeach
                        </p>
                        <i class="far fa-file-image"></i>
                        <input type="file" name="image_one">
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <i class="far fa-file-image"></i>
                        <input type="file" name="image_two">
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <i class="far fa-file-image"></i>
                        <input type="file" name="image_three">
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <i class="far fa-file-image"></i>
                        <input type="file" name="image_four">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-4">
                        <i class="far fa-file-image"></i>
                        <input type="file" name="image_five">
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <i class="far fa-file-image"></i>
                        <input type="file" name="image_six">
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <i class="far fa-file-image"></i>
                        <input type="file" name="image_seven">
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <i class="far fa-file-image"></i>
                        <input type="file" name="image_eight">
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <button type="submit" class="black-btn">ИСПРАТИ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
</html> 