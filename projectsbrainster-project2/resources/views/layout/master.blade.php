<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proekt2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>
<body>

    @include('layout.header')
    @section('main')
        
    @show
    @include('layout.footer')
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})
</script>
<script>
        $('#myModal2').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>
<script>
        $('#myModalReversed').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>
<script>
        $('#myModalXs').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>
<script>
    function myFunction() {
        document.getElementById("myDropdownAsk").classList.toggle("show");
    }
</script>
<script>
        function menu() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
</script>
<script>
    $('.dropdown-toggle').dropdown()
</script>
<script>
        function myProfile() {
            document.getElementById("addPet").classList.toggle("show");
        }
    </script>
    <script type="text/javascript">
        @if (count($errors->myModal) > 0)
            $('#myModal,#myModalReversed,#myModalXs').modal('show');
        @endif
    </script>
    <script>
    function closeAll() {
  $('#myModal, #myModalReversed').modal('hide');
}
    </script>
    <script type="text/javascript">
        @if (count($errors->myModal2) > 0)
            $('#myModal2').modal('show');
        @endif
    </script>

    <script>
    $(document).ready(function(){
   $('.share').on('click',function(){
       $(this).parent().parent().parent().find( ".figcaption" ).css({"background-color":"rgb(139, 92, 206)", "transition":".6s"});
       $(this).parent().parent().parent().find(".fa-times").css({"display": "unset", "color": "#74C53B4", "font-size": "26px", "position": "absolute", "right":"12px"});
       $(this).parent().parent().parent().find(".fa-share").css("display", "none");
       $(this).parent().parent().parent().find(".text-on-hover").css("display", "none");
       $(this).parent().parent().parent().find(".social").css("display", "unset");
   })
   $('.exit').on('click',function(){
       $(this).parent().parent().parent().find( ".figcaption" ).css({"background-color":"white", "transition":".3s"});
       $(this).parent().parent().parent().find(".fa-times").css("display", "none");
       $(this).parent().parent().parent().find(".fa-share").css("display", "unset");
       $(this).parent().parent().parent().find(".text-on-hover").css("display", "unset");
       $(this).parent().parent().parent().find(".social").css("display", "none");
   })
});$(".hover-button").click(function() {
   return false;
});
    </script>

</html>
