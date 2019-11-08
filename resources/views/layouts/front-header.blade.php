<!-- ******HEADER****** -->
<header class="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <ul class="social-icons col-md-6 col-12 d-none d-md-block">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li class="row-end"><a href="#"><i class="fas fa-rss"></i></a></li>
                </ul><!--//social-icons-->
                <form class="col-md-6 col-12 search-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search the site...">
                    </div>
                    <button type="submit" class="btn btn-theme">Go</button>
                </form>
            </div><!--//row-->
        </div>
    </div><!--//to-bar-->
    <div class="header-main container">
        <div class="row">
            <h1 class="logo col-md-4 col-12">
                <a href="index.html"><img id="logo" class="w-100" src="{{asset('front/assets/images/logo.png')}}" alt="Logo"></a>
            </h1><!--//logo-->
            <div class="info col-md-8 col-12">
                <ul class="menu-top float-right d-none d-md-block">
                    <li class="divider"><a href="{{route('front.home')}}">Home</a></li>
                    <li><a href="{{route('front.contact')}}">Contact</a></li>
                </ul><!--//menu-top-->
                <br/>
                <div class="contact float-right">
                    <p class="phone"><i class="fas fa-phone"></i>Call us today 078 654 923</p>
                    <p class="email"><i class="fas fa-envelope"></i><a href="#">contact@mcu.edu.kh</a></p>
                </div><!--//contact-->
            </div><!--//info-->
        </div><!--//row-->
    </div><!--//header-main-->
</header><!--//header-->

<!-- ******NAV****** -->
<div class="main-nav-wrapper">
    <div class="container">
        <nav class="main-nav navbar navbar-expand-md" role="navigation">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><!--//nav-toggle-->

            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link {{request()->is('/')?'active':''}}" href="{{route('front.home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('academic*')?'active':''}}" href="{{route('front.academic')}}">Academic</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About MCU <i
                                    class="fas fa-angle-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('front.founder')}}">Founder</a>
                            <a class="dropdown-item" href="{{route('front.rector.show')}}">Rector's Welcome message</a>
                            <a class="dropdown-item" href="{{route('front.about')}}">MCU's History</a>
                            <a class="dropdown-item" href="{{route('front.commitment.show')}}">Vision, Mission and Goal</a>
                            <a class="dropdown-item" href="#">Board of MCU</a>
                            <a class="dropdown-item" href="#">MCU's Organization Structure</a>
                        </div><!--//dropdown-menu-->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Offices/Centers <i
                                    class="fas fa-angle-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($offices as $item)
                                <a class="dropdown-item" href="{{route('front.office.show',$item->id)}}">{{$item->office}}</a>
                            @endforeach
                            {{--<a class="dropdown-item" href="course-single.html">Research and Development Office</a>
                            <a class="dropdown-item" href="course-single.html">IQA Office</a>
                            <a class="dropdown-item" href="course-single.html">ICT</a>
                            <a class="dropdown-item" href="course-single.html">Account Office</a>
                            <a class="dropdown-item" href="course-single.html">Administration Office</a>
                            <a class="dropdown-item" href="course-single.html">Student Association Office</a>--}}
                        </div><!--//dropdown-menu-->
                    </li>
                    <li class="nav-item"><a class="nav-link {{request()->is('news')?'active':''}}" href="{{route('front.news')}}">News</a></li>
                    <li class="nav-item"><a class="nav-link " href="{{route('chatter.home')}}">Forum</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('gallery')?'active':''}}" href="{{route('front.gallery')}}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('video')?'active':''}}" href="{{route('front.video')}}">Video</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('staff')?'active':''}}" href="{{route('front.staff')}}">Staff</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('event')?'active':''}}" href="{{route('front.event')}}">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Library</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('contact')?'active':''}}" href="{{route('front.contact')}}">Contact</a></li>
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->

        </nav><!--//main-nav-->
    </div><!--//container-->
</div><!--//main-nav-container-->