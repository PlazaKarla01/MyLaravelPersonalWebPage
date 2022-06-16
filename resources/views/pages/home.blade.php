@extends('layouts.default')

@section('content')

<style>
.home .max-width{
  width: 100%;
  display: flex;
}
.home .max-width .row{
  margin-right: 0;
}
.home .home-content .text-1{
    margin-top: 200px;
    font-size: 27px;
    text-align: center;
    color: #4A235A;
    font-weight: 600;
    font-family: 'Ubuntu', sans-serif;
}
.home .home-content .text-2{
    font-size: 110px;
    font-weight: 600;
    color: #C39BD3;
    font-family: 'Carter One', sans-serif;
    text-align: center;
}
.home .home-content .text-3{
    font-size: 27px;
    margin: 5px 0;
    text-align: center;
    color: #4A235A;
    font-weight: 600;
    font-family: 'Ubuntu', sans-serif;
}

footer{
    margin-top: 150px;
    background: #4A235A;
    padding: 15px 23px;
    color: #C39BD3;
    text-align: center;
}
</style>

<body>

    <script>
        $(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });
    $('.carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
    });

    </script>
    
 <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">KARLA MARIE PLAZA</div>
                <div class="text-3">Welcome to My Laravel Personal Webpage!</div>
            </div>
        </div>
    </section>

</body>

@stop
