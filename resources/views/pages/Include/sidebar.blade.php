<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
        <div class="section-bar clearfix">
            <div class="section-title">
                <span>Phim Hot</span>

            </div>
        </div>
        <section class="tab-content">
            <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                <div class="halim-ajax-popular-post-loading hidden"></div>
                <div id="halim-ajax-popular-post" class="popular-post">
                    @foreach($phimhot_sidebar as $key => $hot_sidebar)
                        <div class="item post-37176">
                            <a href="{{route('movie',$hot_sidebar->slug)}}" title="{{$hot_sidebar->title}}">
                                <div class="item-link">
                                    <img src="{{asset('uploads/movie/'.$hot_sidebar->image)}}" class="lazy post-thumb" alt="{{$hot_sidebar->title}}" title="{{$hot_sidebar->title}}"/>
                                    <span class="is_trailer">
                                            @if($hot_sidebar->resolution==0)
                                            HD
                                        @elseif($hot_sidebar->resolution==1)
                                            SD
                                        @elseif($hot_sidebar->resolution==2)
                                            HDCam
                                        @elseif($hot_sidebar->resolution==3)
                                            Cam
                                        @else
                                            FullHD
                                        @endif
                                        </span>
                                </div>
                                <p class="title">{{$hot_sidebar->title}}</p>
                            </a>
                            <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                            <div style="float: left;">
                                 <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                                 <span style="width: 0%"></span>
                                 </span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
</aside>

<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
        <div class="section-bar clearfix">
            <div class="section-title">
                <span>Top View</span>
            </div>
        </div>
        <!--class filter-sidebar được viết ajax-->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link filter-sidebar" id="pills-home-tab" data-toggle="pill" href="#ngay" role="tab" aria-controls="pills-home" aria-selected="true">Ngày</a>
            </li>
            <li class="nav-item">
                <a class="nav-link filter-sidebar" id="pills-profile-tab" data-toggle="pill" href="#thang" role="tab" aria-controls="pills-profile" aria-selected="false">Tháng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link filter-sidebar" id="pills-contact-tab" data-toggle="pill" href="#nam" role="tab" aria-controls="pills-contact" aria-selected="false">Năm</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="ngay" role="tabpanel" aria-labelledby="pills-home-tab">
                <div id="halim-ajax-popular-post" class="popular-post">

                    <!--<div class="item post-37176">
                        <a href="#" title="title phim">
                            <div class="item-link">
                                <img src="#" alt="title" title="title">
                                <span class="is_trailer">Trailer</span>
                            </div>
                            <p class="title">Title-phim</p>
                        </a>
                        <div class="viewsCount" style="color: #9d9d9d">3.5k luot xem</div>
                        <div style="float: left;">
                            <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;"></span>
                            <span style="width: 0%"></span>
                        </div>
                    </div>
                    -->

                    <span id="show0"></span>

                </div>
            </div>
            <div class="tab-pane fade" id="thang" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div id="halim-ajax-popular-post" class="popular-post">

                    <span id="show1"></span>

                </div>
            </div>
            <div class="tab-pane fade" id="nam" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div id="halim-ajax-popular-post" class="popular-post">

                    <span id="show2"></span>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</aside>