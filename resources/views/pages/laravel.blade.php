@extends('layouts.default')

@section('content')

<style>

.laravel .laravel-content .text-6{
    margin-top: 35px;
    font-size: 25px;
    text-align: justify;
    color: #000000;
    font-family: 'Poppins', sans-serif;
}
footer{
  background: #4A235A;
  padding: 15px 23px;
  color: #C39BD3;
  text-align: center;
}

</style>

<body>

<section class="laravel" id="laravel">
        <div class="max-width">
            <h2 class="title">Laravel</h2>
            <div class="laravel-content">
                    <p class="text-6">Laravel is an open-source web MVC framework for PHP. Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.
                    Laravel strives to provide an amazing developer experience, while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.
                    Why Laravel? There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.
                    1. A Progressive Framework 2. A Scalable Framework 3. A Community Framework
                    </p>
            </div>
        </div>
    </section>

</body>

@stop
