<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">My Laravel<span>Personal Webpage.</span></a></div>
            <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/cs202">CS 202</a></li>
                <li><a href="/laravel">Laravel</a></li>
                <li><a href="/career">Career</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Carter+One&family=Lobster&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}

section{
    padding: 100px 0;
}
.max-width{
    max-width: 1300px;
    padding: 0 80px;
    margin: auto;
}
.about, .cs202, .laravel, .career, .contact, footer{
    font-family: 'Poppins', sans-serif;
    color: #C39BD3;
}
.about .about-content,
.cs202 .cs202-content,
.laravel .laravel-content,
.contact .contact-content{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
section .title{
    position: relative;
    text-align: center;
    font-size: 50px;
    font-weight: 500;
    margin-bottom: 60px;
    padding-bottom: 20px;
    font-family: 'Lobster', sans-serif;
}
section .title::before{
    content: "";
    position: absolute;
    bottom: 0px;
    left: 50%;
    width: 180px;
    height: 3px;
    background: #111;
    transform: translateX(-50%);
}
section .title::after{
    position: absolute;
    bottom: -8px;
    left: 50%;
    font-size: 20px;
    color: #4A235A;
    padding: 0 5px;
    background: #fff;
    transform: translateX(-50%);
}

.navbar{
    position: fixed;
    width: 100%;
    z-index: 999;
    padding: 30px 0;
    font-family: 'Carter One', sans-serif;
    transition: all 0.3s ease;
}
.navbar.sticky{
    padding: 15px 0;
    background: #4A235A;
}
.navbar .max-width{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.navbar .logo a{
    color: #C39BD3;
    font-size: 35px;
    font-weight: 600;
}
.navbar .logo a span{
    color: #4A235A;
    transition: all 0.3s ease;
}
.navbar.sticky .logo a span{
    color: #C39BD3;
}
.navbar .menu li{
    list-style: none;
    display: inline-block;
}
.navbar .menu li a{
    display: block;
    color: #C39BD3 ;
    font-size: 18px;
    font-weight: 500;
    margin-left: 25px;
    transition: color 0.3s ease;
}
.navbar .menu li a:hover{
    color: #4A235A;
}
.navbar.sticky .menu li a:hover{
    color: #C39BD3 ;
}

.scroll-up-btn{
    position: fixed;
    height: 45px;
    width: 42px;
    background: #4A235A;
    right: 30px;
    bottom: 10px;
    text-align: center;
    line-height: 45px;
    color: #C39BD3 ;
    z-index: 9999;
    font-size: 30px;
    border-radius: 6px;
    border-bottom-width: 2px;
    cursor: pointer;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}


</style>
