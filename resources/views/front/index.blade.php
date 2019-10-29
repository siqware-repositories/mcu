@extends('layouts.front')
@section('page-title')
    Home
@stop
@section('page-content')
    <div class="content container page-wrapper">
        @include('layouts.front-slide')
        <section class="section-content">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h4 class="title"><a href="news-single.html">Rector's Message</a></h4>
                    <p>Suspendisse purus felis, porttitor quis sollicitudin sit amet, elementum et tortor. Praesent
                        lacinia magna in malesuada vestibulum. Pellentesque urna libero.</p>
                    <a class="read-more" href="news-single.html">Read more
                        <i class="fas fa-chevron-right"></i></a>
                    <div class="d-flex">
                        <div class="pt-3">
                            <h4 class="m-0 text-info">Sam Nga</h4>
                            <span class="title">Rector of Mean Chey University</span>
                        </div>
                        <img class="ml-1" src="{{asset('front/assets/images/testimonials/profile-1.png')}}" alt="" width="70" height="70">
                    </div>
                </div>
            </div><!--//row-->
        </section><!--//promo-->
        <section class="news">
            <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>
            <div class="carousel-controls">
                <a class="prev" href="#news-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                <a class="next" href="#news-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
            </div><!--//carousel-controls-->
            <div class="section-content clearfix">
                <div id="news-carousel" class="news-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-lg-4 col-12 news-item">
                                    <h2 class="title"><a href="news-single.html">Phasellus scelerisque metus</a></h2>
                                    <img class="thumb" src="{{asset('front/assets/images/news/news-thumb-1.jpg')}}" alt=""/>
                                    <p>Suspendisse purus felis, porttitor quis sollicitudin sit amet, elementum et
                                        tortor. Praesent lacinia magna in malesuada vestibulum. Pellentesque urna
                                        libero.</p>
                                    <a class="read-more" href="news-single.html">Read more<i
                                                class="fas fa-chevron-right"></i></a>
                                </div><!--//news-item-->
                                <div class="col-lg-4 col-12 news-item">
                                    <h2 class="title"><a href="news-single.html">Morbi at vestibulum turpis</a></h2>
                                    <p>Nam feugiat erat vel neque mollis, non vulputate erat aliquet. Maecenas ac leo
                                        porttitor, semper risus condimentum, cursus elit. Vivamus vitae libero
                                        tellus.</p>
                                    <a class="read-more" href="news-single.html">Read more<i
                                                class="fas fa-chevron-right"></i></a>
                                    <img class="thumb" src="{{asset('front/assets/images/news/news-thumb-2.jpg')}}" alt=""/>
                                </div><!--//news-item-->
                                <div class="col-lg-4 col-12 news-item">
                                    <h2 class="title"><a href="news-single.html">Aliquam id iaculis urna</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum mauris
                                        eget sapien consectetur pellentesque. Proin elementum tristique euismod. </p>
                                    <a class="read-more" href="news-single.html">Read more<i
                                                class="fas fa-chevron-right"></i></a>
                                    <img class="thumb" src="{{asset('front/assets/images/news/news-thumb-3.jpg')}}" alt=""/>
                                </div><!--//news-item-->
                            </div><!--//row-->
                        </div><!--//item-->
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-12 news-item">
                                    <h2 class="title"><a href="news-single.html">Phasellus scelerisque metus</a></h2>
                                    <img class="thumb" src="{{asset('front/assets/images/news/news-thumb-4.jpg')}}" alt=""/>
                                    <p>Suspendisse purus felis, porttitor quis sollicitudin sit amet, elementum et
                                        tortor. Praesent lacinia magna in malesuada vestibulum. Pellentesque urna
                                        libero.</p>
                                    <a class="read-more" href="news-single.html">Read more<i
                                                class="fas fa-chevron-right"></i></a>
                                </div><!--//news-item-->
                                <div class="col-lg-4 col-12 news-item">
                                    <h2 class="title"><a href="news-single.html">Morbi at vestibulum turpis</a></h2>
                                    <p>Nam feugiat erat vel neque mollis, non vulputate erat aliquet. Maecenas ac leo
                                        porttitor, semper risus condimentum, cursus elit. Vivamus vitae libero
                                        tellus.</p>
                                    <a class="read-more" href="news-single.html">Read more<i
                                                class="fas fa-chevron-right"></i></a>
                                    <img class="thumb" src="{{asset('front/assets/images/news/news-thumb-5.jpg')}}" alt=""/>
                                </div><!--//news-item-->
                                <div class="col-lg-4 col-12 news-item">
                                    <h2 class="title"><a href="news-single.html">Aliquam id iaculis urna</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum mauris
                                        eget sapien consectetur pellentesque. Proin elementum tristique euismod. </p>
                                    <a class="read-more" href="news-single.html">Read more<i
                                                class="fas fa-chevron-right"></i></a>
                                    <img class="thumb" src="{{asset('front/assets/images/news/news-thumb-6.jpg')}}" alt=""/>
                                </div><!--//news-item-->
                            </div><!--//row-->
                        </div><!--//item-->
                    </div><!--//carousel-inner-->
                </div><!--//news-carousel-->
                <a class="read-more" href="events.html">All news<i class="fas fa-chevron-right"></i></a>
            </div><!--//section-content-->
        </section><!--//news-->
        <div class="row cols-wrapper">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <section class="events">
                            <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
                            <div class="section-content">
                                <div class="event-item">
                                    <p class="date-label">
                                        <span class="month">FEB</span>
                                        <span class="date-number">18</span>
                                    </p>
                                    <div class="details">
                                        <h2 class="title">Open Day</h2>
                                        <div class="d-flex">
                                            <p class="time"><i class="far fa-clock"></i>10:00am - 18:00pm</p>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>
                                                <a href="#">East Campus</a>
                                            </p>
                                        </div>
                                    </div><!--//details-->
                                    <p class="desc">Donec commodo felis nec eros mollis dignissim. Pellentesque scelerisque nisl eu erat condimentum, at pellentesque odio elementum. Praesent accumsan non quam vel vulputate. Nullam ac hendrerit quam, ut tincidunt felis. Praesent condimentum ut enim ut mattis.</p>
                                </div><!--event-item-->
                                <div class="event-item">
                                    <p class="date-label">
                                        <span class="month">FEB</span>
                                        <span class="date-number">18</span>
                                    </p>
                                    <div class="details">
                                        <h2 class="title">Open Day</h2>
                                        <div class="d-flex">
                                            <p class="time"><i class="far fa-clock"></i>10:00am - 18:00pm</p>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>
                                                <a href="#">East Campus</a>
                                            </p>
                                        </div>
                                    </div><!--//details-->
                                    <p class="desc">Donec commodo felis nec eros mollis dignissim. Pellentesque scelerisque nisl eu erat condimentum, at pellentesque odio elementum. Praesent accumsan non quam vel vulputate. Nullam ac hendrerit quam, ut tincidunt felis. Praesent condimentum ut enim ut mattis.</p>
                                </div><!--event-item-->
                                <div class="event-item">
                                    <p class="date-label">
                                        <span class="month">FEB</span>
                                        <span class="date-number">18</span>
                                    </p>
                                    <div class="details">
                                        <h2 class="title">Open Day</h2>
                                        <div class="d-flex">
                                            <p class="time"><i class="far fa-clock"></i>10:00am - 18:00pm</p>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>
                                                <a href="#">East Campus</a>
                                            </p>
                                        </div>
                                    </div><!--//details-->
                                    <p class="desc">Donec commodo felis nec eros mollis dignissim. Pellentesque scelerisque nisl eu erat condimentum, at pellentesque odio elementum. Praesent accumsan non quam vel vulputate. Nullam ac hendrerit quam, ut tincidunt felis. Praesent condimentum ut enim ut mattis.</p>
                                </div><!--event-item-->
                                <a class="read-more" href="events.html">All events<i
                                            class="fas fa-chevron-right"></i></a>
                            </div><!--//section-content-->
                        </section><!--//events-->
                    </div><!--//col-md-3 event-->
                    <div class="col-lg-12 col-12">
                        <section class="video">
                            <h1 class="section-heading text-highlight"><span class="line">Latest Video</span></h1>
                            <div class="carousel-controls">
                                <a class="prev" href="#videos-carousel" data-slide="prev"><i
                                            class="fas fa-caret-left"></i></a>
                                <a class="next" href="#videos-carousel" data-slide="next"><i
                                            class="fas fa-caret-right"></i></a>
                            </div><!--//carousel-controls-->
                            <div class="section-content">
                                <div id="videos-carousel" class="videos-carousel carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item item active">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <div class="embed-responsive embed-responsive-16by9 mb-2">
                                                        <iframe class="embed-responsive-item"
                                                                src="//www.youtube.com/embed/r9LelXa3U_I?rel=0&amp;wmode=transparent"
                                                                frameborder="0" allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="embed-responsive embed-responsive-16by9 mb-2">
                                                        <iframe class="embed-responsive-item"
                                                                src="//www.youtube.com/embed/RcGyVTAoXEU?rel=0&amp;wmode=transparent"
                                                                frameborder="0" allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--//item-->
                                        <div class="carousel-item item">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <div class="embed-responsive embed-responsive-16by9 mb-2">
                                                        <iframe class="embed-responsive-item"
                                                                src="//www.youtube.com/embed/r9LelXa3U_I?rel=0&amp;wmode=transparent"
                                                                frameborder="0" allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="embed-responsive embed-responsive-16by9 mb-2">
                                                        <iframe class="embed-responsive-item"
                                                                src="//www.youtube.com/embed/RcGyVTAoXEU?rel=0&amp;wmode=transparent"
                                                                frameborder="0" allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--//item-->
                                    </div><!--//carousel-inner-->
                                </div><!--//videos-carousel-->
                                <a class="read-more" href="events.html">All videos<i class="fas fa-chevron-right"></i></a>
                                <p class="description">All video from mcu.</p>
                            </div><!--//section-content-->
                        </section><!--//video-->
                    </div>
                </div>
            </div>
            <div class="page-sidebar col-lg-3 col-12">
                <section class="widget has-divider">
                    <h1 class="section-heading text-highlight"><span class="line">Welcome Video</span></h1>
                    <div class="section-content">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    src="//www.youtube.com/embed/Ks-_Mh1QhMc?rel=0&amp;wmode=transparent"
                                    frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </section><!--//widget-->
                <section class="widget has-divider">
                    <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>
                    <div class="section-content">
                        <article class="news-item row">
                            <figure class="thumb col-xl-2 col-3">
                                <img src="{{asset('front/assets/images/news/news-thumb-1.jpg')}}" alt="">
                            </figure>
                            <div class="details col-xl-10 col-9">
                                <h4 class="title"><a href="news-single.html">Morbi bibendum consectetuer vulputate
                                        sollicitudin</a></h4>
                            </div>
                        </article><!--//news-item-->
                        <article class="news-item row">
                            <figure class="thumb col-xl-2 col-3">
                                <img src="{{asset('front/assets/images/news/news-thumb-2.jpg')}}" alt="">
                            </figure>
                            <div class="details col-xl-10 col-9">
                                <h4 class="title"><a href="news-single.html">Sed tincidunt urna eget turpis pretium
                                        hendrerit</a></h4>
                            </div>
                        </article><!--//news-item-->
                        <article class="news-item row">
                            <figure class="thumb col-xl-2 col-3">
                                <img src="{{asset('front/assets/images/news/news-thumb-3.jpg')}}" alt="">
                            </figure>
                            <div class="details col-xl-10 col-9">
                                <h4 class="title"><a href="news-single.html">Duis scelerisque erat iaculis</a></h4>
                            </div>
                        </article><!--//news-item-->
                        <article class="news-item row">
                            <figure class="thumb col-xl-2 col-3">
                                <img src="{{asset('front/assets/images/news/news-thumb-4.jpg')}}" alt="">
                            </figure>
                            <div class="details col-xl-10 col-9">
                                <h4 class="title"><a href="news-single.html">Duis scelerisque erat iaculis</a></h4>
                            </div>
                        </article><!--//news-item-->
                    </div>
                </section><!--//widget-->
                <section class="links">
                    <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
                    <div class="section-content">
                        <p><a href="#"><i class="fas fa-caret-right"></i>E-learning Portal</a></p>
                        <p><a href="#"><i class="fas fa-caret-right"></i>Gallery</a></p>
                        <p><a href="#"><i class="fas fa-caret-right"></i>Job Vacancies</a></p>
                        <p><a href="#"><i class="fas fa-caret-right"></i>Contact</a></p>
                    </div><!--//section-content-->
                </section><!--//links-->
            </div><!--//col-md-3-->
        </div><!--//cols-wrapper-->
        <section class="news">
            <h1 class="section-heading text-highlight"><span class="line">Gallery</span></h1>
            <div class="carousel-controls">
                <a class="prev" href="#news-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                <a class="next" href="#news-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
            </div><!--//carousel-controls-->
            <div class="section-content clearfix">
                <div id="news-carousel" class="news-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-md-4 col-12 text-center">
                                    <div class="album-cover">
                                        <a href="gallery-album.html"><img class="img-fluid" src="{{asset('front/assets/images/gallery/gallery-thumb-1.jpg')}}" alt=""></a>
                                        <div class="desc">
                                            <h4><small><a href="#">Album Lorem Ipsum</a></small></h4>
                                            <p>Integer ornare nisl tortor, sed condimentum metus pulvinar ut. Etiam ac pretium nunc. Donec porttitor erat non nibh pellentesque vehicula. Vestibulum tincidunt</p>
                                        </div>
                                    </div>
                                </div><!--//gallery-item-->
                                <div class="col-md-4 col-12 text-center">
                                    <div class="album-cover">
                                        <a href="gallery-album.html"><img class="img-fluid" src="{{asset('front/assets/images/gallery/gallery-thumb-1.jpg')}}" alt=""></a>
                                        <div class="desc">
                                            <h4><small><a href="#">Album Lorem Ipsum</a></small></h4>
                                            <p>Integer ornare nisl tortor, sed condimentum metus pulvinar ut. Etiam ac pretium nunc. Donec porttitor erat non nibh pellentesque vehicula. Vestibulum tincidunt</p>
                                        </div>
                                    </div>
                                </div><!--//gallery-item-->
                                <div class="col-md-4 col-12 text-center">
                                    <div class="album-cover">
                                        <a href="gallery-album.html"><img class="img-fluid" src="{{asset('front/assets/images/gallery/gallery-thumb-1.jpg')}}" alt=""></a>
                                        <div class="desc">
                                            <h4><small><a href="#">Album Lorem Ipsum</a></small></h4>
                                            <p>Integer ornare nisl tortor, sed condimentum metus pulvinar ut. Etiam ac pretium nunc. Donec porttitor erat non nibh pellentesque vehicula. Vestibulum tincidunt</p>
                                        </div>
                                    </div>
                                </div><!--//gallery-item-->
                            </div><!--//row-->
                        </div><!--//item-->
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-md-4 col-12 text-center">
                                    <div class="album-cover">
                                        <a href="gallery-album.html"><img class="img-fluid" src="{{asset('front/assets/images/gallery/gallery-thumb-1.jpg')}}" alt=""></a>
                                        <div class="desc">
                                            <h4><small><a href="#">Album Lorem Ipsum</a></small></h4>
                                            <p>Integer ornare nisl tortor, sed condimentum metus pulvinar ut. Etiam ac pretium nunc. Donec porttitor erat non nibh pellentesque vehicula. Vestibulum tincidunt</p>
                                        </div>
                                    </div>
                                </div><!--//gallery-item-->
                                <div class="col-md-4 col-12 text-center">
                                    <div class="album-cover">
                                        <a href="gallery-album.html"><img class="img-fluid" src="{{asset('front/assets/images/gallery/gallery-thumb-1.jpg')}}" alt=""></a>
                                        <div class="desc">
                                            <h4><small><a href="#">Album Lorem Ipsum</a></small></h4>
                                            <p>Integer ornare nisl tortor, sed condimentum metus pulvinar ut. Etiam ac pretium nunc. Donec porttitor erat non nibh pellentesque vehicula. Vestibulum tincidunt</p>
                                        </div>
                                    </div>
                                </div><!--//gallery-item-->
                                <div class="col-md-4 col-12 text-center">
                                    <div class="album-cover">
                                        <a href="gallery-album.html"><img class="img-fluid" src="{{asset('front/assets/images/gallery/gallery-thumb-1.jpg')}}" alt=""></a>
                                        <div class="desc">
                                            <h4><small><a href="#">Album Lorem Ipsum</a></small></h4>
                                            <p>Integer ornare nisl tortor, sed condimentum metus pulvinar ut. Etiam ac pretium nunc. Donec porttitor erat non nibh pellentesque vehicula. Vestibulum tincidunt</p>
                                        </div>
                                    </div>
                                </div><!--//gallery-item-->
                            </div><!--//row-->
                        </div><!--//item-->
                    </div><!--//carousel-inner-->
                </div><!--//news-carousel-->
                <a class="read-more" href="events.html">All Gallery<i class="fas fa-chevron-right"></i></a>
            </div><!--//section-content-->
        </section><!--//gallery-->
        <section class="testimonials">
            <h1 class="section-heading text-highlight"><span class="line"> Testimonials</span></h1>
            <div class="carousel-controls">
                <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
            </div><!--//carousel-controls-->
            <div class="section-content">
                <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item item active">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <blockquote class="quote">
                                        <p><i class="fas fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc
                                            pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst.
                                            Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus
                                            ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.</p>
                                    </blockquote>
                                    <div class="source">
                                        <p class="people"><span class="name">Marissa Spencer</span><br/><span
                                                    class="title">Curabitur commodo</span></p>
                                        <img class="profile" src="{{asset('front/assets/images/testimonials/profile-1.png')}}" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <blockquote class="quote">
                                        <p><i class="fas fa-quote-left"></i>
                                            I'm very pleased commodo gravida ultrices. Sed massa leo, aliquet non velit
                                            eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum
                                            primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla
                                            auctor a.</p>
                                    </blockquote>
                                    <div class="source">
                                        <p class="people"><span class="name">Marco Antonio</span><br/><span
                                                    class="title"> Gravida ultrices</span></p>
                                        <img class="profile" src="{{asset('front/assets/images/testimonials/profile-2.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div><!--//item-->
                        <div class="carousel-item item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <blockquote class="quote">
                                        <p><i class="fas fa-quote-left"></i>
                                            I'm very pleased commodo gravida ultrices. Sed massa leo, aliquet non velit
                                            eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum
                                            primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla
                                            auctor a.</p>
                                    </blockquote>
                                    <div class="source">
                                        <p class="people"><span class="name">Marco Antonio</span><br/><span
                                                    class="title"> Gravida ultrices</span></p>
                                        <img class="profile" src="{{asset('front/assets/images/testimonials/profile-2.png')}}" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <blockquote class="quote">
                                        <p><i class="fas fa-quote-left"></i>
                                            I'm delighted commodo gravida ultrices. Sed massa leo, aliquet non velit eu,
                                            volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in
                                            faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.</p>
                                    </blockquote>
                                    <div class="source">
                                        <p class="people"><span class="name">Kate White</span><br/><span class="title"> Gravida ultrices</span>
                                        </p>
                                        <img class="profile" src="{{asset('front/assets/images/testimonials/profile-3.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div><!--//item-->

                    </div><!--//carousel-inner-->
                </div><!--//testimonials-carousel-->
            </div><!--//section-content-->
        </section><!--//testimonials-->
        <section class="awards">
            <div id="awards-carousel" class="awards-carousel carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item item active">
                        <ul class="logos row">
                            <li class="col-md-2 col-4">
                                <a href="#"><img class="img-fluid" src="{{asset('front/assets/images/awards/award1.jpg')}}" alt=""/></a>
                            </li>
                            <li class="col-md-2 col-4">
                                <a href="#"><img class="img-fluid" src="{{asset('front/assets/images/awards/award2.jpg')}}" alt=""/></a>
                            </li>
                            <li class="col-md-2 col-4">
                                <a href="#"><img class="img-fluid" src="{{asset('front/assets/images/awards/award3.jpg')}}" alt=""/></a>
                            </li>
                            <li class="col-md-2 col-4">
                                <a href="#"><img class="img-fluid" src="{{asset('front/assets/images/awards/award4.jpg')}}" alt=""/></a>
                            </li>
                            <li class="col-md-2 col-4">
                                <a href="#"><img class="img-fluid" src="{{asset('front/assets/images/awards/award5.jpg')}}" alt=""/></a>
                            </li>
                            <li class="col-md-2 col-4">
                                <a href="#"><img class="img-fluid" src="{{asset('front/assets/images/awards/award6.jpg')}}" alt=""/></a>
                            </li>
                        </ul><!--//slides-->
                    </div><!--//item-->

                    <div class="carousel-item item">
                        <ul class="logos row">
                            <li class="col-md-2 col-4">
                                <img class="img-fluid" src="{{asset('front/assets/images/awards/award7.jpg')}}" alt=""/>
                            </li>
                            <li class="col-md-2 col-4">
                                <img class="img-fluid" src="{{asset('front/assets/images/awards/award6.jpg')}}" alt=""/>
                            </li>
                            <li class="col-md-2 col-4">
                                <img class="img-fluid" src="{{asset('front/assets/images/awards/award5.jpg')}}" alt=""/>
                            </li>
                            <li class="col-md-2 col-4">
                                <img class="img-fluid" src="{{asset('front/assets/images/awards/award4.jpg')}}" alt=""/>
                            </li>
                            <li class="col-md-2 col-4">
                                <img class="img-fluid" src="{{asset('front/assets/images/awards/award3.jpg')}}" alt=""/>
                            </li>
                            <li class="col-md-2 col-4">
                                <img class="img-fluid" src="{{asset('front/assets/images/awards/award2.jpg')}}" alt=""/>
                            </li>
                        </ul><!--//slides-->
                    </div><!--//item-->
                </div><!--//carousel-inner-->
                <a class="left carousel-control" href="#awards-carousel" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#awards-carousel" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                </a>

            </div>
        </section>
    </div><!--//content-->
@stop
@push('js')
@endpush