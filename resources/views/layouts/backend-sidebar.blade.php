<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="{{asset('backend/global_assets/images/image.png')}}" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">Victoria Baker</h6>
                    <span class="font-size-sm text-white text-shadow-dark">Santa Ana, CA</span>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('backend.news.index')}}" class="nav-link {{request()->is('back_end/news*')?'active':''}}">
                        <i class="icon-pencil"></i>
                        <span>News</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.event.index')}}" class="nav-link {{request()->is('back_end/event*')?'active':''}}">
                        <i class="icon-calendar"></i>
                        <span>Event</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.video.index')}}" class="nav-link {{request()->is('back_end/video*')?'active':''}}">
                        <i class="icon-video-camera"></i>
                        <span>Video</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.gallery.index')}}" class="nav-link {{request()->is('back_end/gallery*')?'active':''}}">
                        <i class="icon-gallery"></i>
                        <span>Gallery</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.testimonial.index')}}" class="nav-link {{request()->is('back_end/testimonial*')?'active':''}}">
                        <i class="icon-quotes-left"></i>
                        <span>Testimonial</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.academic.index')}}" class="nav-link {{request()->is('back_end/academic*')?'active':''}}">
                        <i class="icon-graduation"></i>
                        <span>Academic</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.office.index')}}" class="nav-link {{request()->is('back_end/office*')?'active':''}}">
                        <i class="icon-office"></i>
                        <span>Office</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.teacher.index')}}" class="nav-link {{request()->is('back_end/staff*')?'active':''}}">
                        <i class="icon-people"></i>
                        <span>Staff</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend.history.index')}}" class="nav-link {{request()->is('back_end/setting*')?'active':''}}">
                        <i class="icon-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
                <!-- /main -->
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>
<!-- /main sidebar -->