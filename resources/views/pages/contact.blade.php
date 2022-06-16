@extends('layouts.default')

@section('content')

<style>

.share a{
    height: 5rem;
    width: 5rem;
    margin-right:1rem;
    font-size: 3rem;
    color:#4A235A;
    margin-top: 9.7rem;

}
.share a:hover{
    box-shadow: var(--box-shadow-inset);
    color:#C39BD3;
}
footer{
  background: #4A235A;
  padding: 15px 23px;
  color: #C39BD3;
  text-align: center;
}

</style>


<body>
  
  <section class="contact" id="contact">
    <div class="max-width">

        <h2 class="title">Contact me</h2>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fas fa-envelope-open"></i></a>
        <a href="#" class="	fas fa-phone"></a>
    </div>
      <div class="contact-content">
        <div class="text-8">Facebook: https://www.facebook.com/karlamarie.plaza.96<br> Twitter:@Rikkachanxxx <br> Instagram: @karlyyyqt <br> Gmail:karlaplaza732@gmail.com <br> Mobile Number: +639120108768 </div>
      </div>
    </div>  
  </section>


</body>

@stop

