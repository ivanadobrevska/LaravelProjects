$(document).ready(function () {
    $('#list-cards').on('click', function (event) {
        event.preventDefault()
        $('#list-cards').css('color','white')
        $('#three-cards').css('color','#f2cc28c2')
        $('.inline-cards').removeClass('col-md-4')
        $('.inline-cards').addClass('col-md-12')
        $('.inline-cards').css("background-color", 'white')
        $('.image-card').addClass('col-md-3')
        $('.card-main').addClass('col-md-6')
        $('.card-more').addClass('col-md-3')
    })

    $('#three-cards').on('click', function (event) {
        event.preventDefault()
        $('#list-cards').css('color','#f2cc28c2')
        $('#three-cards').css('color','white')
        $('.inline-cards').removeClass('col-md-12')
        $('.inline-cards').addClass('col-md-4')
        $('.inline-cards').css("background-color", 'transparent')
        $('.image-card').removeClass('col-md-3')
        $('.card-main').removeClass('col-md-6')
        $('.card-more').removeClass('col-md-3')
    })
    $('#all').on('click',function(event){
        event.preventDefault()
        $('.inline-cards').css('display', 'block')
        $('.dropdown-menu>li').css('display','block')
        $('#all').css('display','none')
        $('#all-separator').css('display','none')
        $('#main-li').text('Сите')
    })

    $('#products').on('click', function (event) {
        event.preventDefault()
        $('.inline-cards').css('display', 'none')
        $('.Products').css('display', 'block')
        $('#main-li').text('Производи')
        $('.dropdown-menu>li').css('display','block')
        $('#products').css('display','none')
        $('#products-separator').css('display','none')
    })

    $('#service').on('click', function (event) {
        event.preventDefault()
        $('.inline-cards').css('display', 'none')
        $('.Services').css('display', 'block')
        $('#main-li').text('Услуги')
        $('.dropdown-menu>li').css('display','block')
        $('#service').css('display','none')
        $('#service-separator').css('display','none')
    })

    $('#restaurant').on('click', function (event) {
        event.preventDefault()
        $('.inline-cards').css('display', 'none')
        $('.Restaurants').css('display', 'block')
        $('#main-li').text('Ресторани')
        $('.dropdown-menu>li').css('display','block')
        $('#restaurant').css('display','none')
        $('#restaurant-separator').css('display','none')
    })

    $('#fittness').on('click', function (event) {
        event.preventDefault()
        $('.inline-cards').css('display', 'none')
        $('.Fitness_Center').css('display', 'block')
        $('#main-li').text('Фитнес центри')
        $('.dropdown-menu>li').css('display','block')
        $('#fittness').css('display','none')
        $('#fittness-separator').css('display','none')
    })

    $('#education').on('click', function (event) {
        event.preventDefault()
        $('.inline-cards').css('display', 'none')
        $('.Education_and_Carrier').css('display', 'block')
        $('#main-li').text('Образование и кариера')
        $('.dropdown-menu>li').css('display','block')
        $('#education').css('display','none')
    })

    $('.yellow-border').on('click',function(event){
        event.preventDefault()
        $('.yellow-border').css('border','none')
        $(this).css('border','2px solid #f2cc28c2')
    })

    $('#discount').keyup(function (event) {
        event.preventDefault()
        let inputVal = $('#discount').val()
        $('.inline-cards>div>div>h3').each(function () {
            let text = $(this).text()
            if (text.indexOf(inputVal) >= 0) {
                $('.company-name').hide()
            }
        })
    })
    
})