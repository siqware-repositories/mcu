<section class="awards">
    <div id="awards-carousel" class="awards-carousel carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item item active">
                <ul class="logos row">
                    @for($i=0;$i<6;$i++)
                        <li class="col-md-2 col-4">
                            <a href="#"><img style="max-width: 100%;" height="100" src="{{$corporations[$i]->path}}" alt=""/></a>
                        </li>
                    @endfor
                </ul><!--//slides-->
            </div><!--//item-->

            <div class="carousel-item item">
                <ul class="logos row">
                    @for($i=6;$i<12;$i++)
                        <li class="col-md-2 col-4">
                            <a href="#"><img style="max-width: 100%;" height="100" src="{{$corporations[$i]->path}}" alt=""/></a>
                        </li>
                    @endfor
                </ul><!--//slides-->
            </div><!--//item-->
            <div class="carousel-item item">
                <ul class="logos row">
                    @for($i=12;$i<18;$i++)
                        <li class="col-md-2 col-4">
                            <a href="#"><img style="max-width: 100%;" height="100" src="{{$corporations[$i]->path}}" alt=""/></a>
                        </li>
                    @endfor
                </ul><!--//slides-->
            </div><!--//item-->
            <div class="carousel-item item">
                <ul class="logos row">
                    @for($i=18;$i<19;$i++)
                        <li class="col-md-2 col-4">
                            <a href="#"><img style="max-width: 100%;" height="100" src="{{$corporations[$i]->path}}" alt=""/></a>
                        </li>
                    @endfor
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