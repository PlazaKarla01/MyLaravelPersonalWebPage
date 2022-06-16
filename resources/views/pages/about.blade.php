@extends('layouts.default')

@section('content')

<style>

.about .title::after{
    content: "who i am";
}
.about .about-content .left{
    width: 45%;
}
.about .about-content .left img{
    height: 400px;
    width: 400px;
    object-fit: cover;
    border-radius: 20px;
}
.about .about-content .right{
    width: 55%;
}
.about .about-content .right .text{
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 10px;
}

.about .about-content .right p{
    text-align: justify;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    color: #000000;
}
footer{
  background: #4A235A;
  padding: 15px 23px;
  color: #C39BD3;
  text-align: center;
}

</style>

<body>

 
<section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/karla.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Hi Guys!</div>
                    <p>I am Karla Marie Plaza, you can call me Karla. I am 21 years old and a 3rd year student taking Bachelor of Science in Computer Science in Pamantasan ng Lungsod ng Pasig. I live in Pasig City with my family. My family is my strength and my weakness. 
                    My stress reliever are watching drama or series such as K-Drama, Anime, Boys Love series, reading Wattpad stories, and fan girling. Purple is my favorite color since it suits my personality and makes me happy. My comfort food is Potatoes (anything) and Bingsu in Bonchon. I love dressing up, that's why i enjoy sewing and creating clothes. I also enjoyed creating design like wallpaper, logos and videos. </p>
                </div>
            </div>
        </div>
    </section>

</body>

@stop
