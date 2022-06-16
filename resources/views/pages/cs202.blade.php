@extends('layouts.default')

@section('content')

<style>
    
.cs202 .cs-content .text-4{
    font-size: 30px;
    color: #000000;
    text-align: center;
    font-weight: 600;
    font-family: 'Poppins',, sans-serif;
}
.cs202 .cs-content .text-5{
    margin-top: 20px;
    font-size: 27px;
    text-align: justify;
    color: #000000;
    font-family: 'Poppins',, sans-serif;
}
footer{
  background: #4A235A;
  padding: 15px 23px;
  color: #C39BD3;
  text-align: center;
}

</style>

<body>

<section class="cs202" id="cs202">
    <div class="max-width">
            <h2 class="title">My favorite in CS 202</h2>
            <div class="cs-content">
                    <div class="text-4">Lesson 5: GIT & GITHUB</div>
                    <p class="text-5">Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.
                        Git is easy to learn and has a tiny footprint with lightning fast performance. It outclasses SCM tools like Subversion, CVS, Perforce, and ClearCase with features like cheap local branching, convenient staging areas, and multiple workflows.
                        GitHub is a code hosting platform for version control and collaboration. It lets you and others work together on projects from anywhere.
                        Github is a web-based platform used for version control. Git simplifies the process of working with other people and makes it easy to collaborate on projects.
                        Git & GitHub skill has slowly made its way from preferred skills to must have skills in multiple job roles.
                    </p>
            </div>
        </div>
    </div>
    </section>
    
</body>

@stop
