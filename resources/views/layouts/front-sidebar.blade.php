<div class="page-sidebar col-lg-3 col-12">
    <section class="widget has-divider">
        <h1 class="section-heading text-highlight"><span class="line">Welcome Video</span></h1>
        <div class="section-content">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/CVe3ABsiOU8?rel=0&amp;wmode=transparent"
                        frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </section><!--//widget-->
    <section class="widget has-divider">
        <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>
        <div class="section-content">
            @foreach($news_latest as $item)
                <article class="news-item row">
                    <figure class="thumb col-xl-2 col-3">
                        <img src="{{$item->thumb}}" alt="">
                    </figure>
                    <div class="details col-xl-10 col-9">
                        <h4 class="title"><a href="news-single.html">{{$item->title}}</a></h4>
                    </div>
                </article><!--//news-item-->
            @endforeach
        </div>
    </section><!--//widget-->
    <section class="links">
        <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
        <div class="section-content">
            <div class="fb-page" data-href="https://www.facebook.com/MeanCheyUniversity/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MeanCheyUniversity/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MeanCheyUniversity/">Meanchey University</a></blockquote></div>
        </div><!--//section-content-->
    </section><!--//links-->
</div><!--//col-md-3-->