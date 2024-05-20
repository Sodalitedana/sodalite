@extends('frontend.first')

@section('page-second')

<section class="works-section js-work-sections js-first-screen">

    <div class="row">
        <div class="column large-6 medium-6">
            @yield('countdown')
            <div class="work-item js-work-item">
                <div class="item-view right-image">
                    <span class="demo-btn js-demo-btn" data-target="index-count.html"></span>
                    <img src="/html/images/versions/item7.jpg" alt="">
                </div>
                <h4 class="item-title">Countdown</h4>
            </div>
        </div>

        <div class="column large-6 medium-6">
            @yield('slider')
            <div class="work-item js-work-item">
                <div class="item-view">
                    <span class="demo-btn js-demo-btn" data-target="index-r.html"></span>
                    <img src="/html/images/versions/item1.jpg" alt="">
                </div>
                <h4 class="item-title">Slider</h4>
            </div>
        </div>

        <div class="column large-6 medium-6">
            @yield('slider-parallax')
            <div class="work-item js-work-item">
                <div class="item-view right-image">
                    <span class="demo-btn js-demo-btn" data-target="index-pl.html"></span>
                    <img src="/html/images/versions/item2.jpg" alt="">
                </div>
                <h4 class="item-title">Slider Parallax</h4>
            </div>
        </div>

        <div class="column large-6 medium-6">
            @yield('video')
            <div class="work-item js-work-item">
                <div class="item-view">
                    <span class="demo-btn js-demo-btn" data-target="index-v.html"></span>
                    <img src="/html/images/versions/item3.jpg" alt="">
                </div>
                <h4 class="item-title">Video</h4>
            </div>
        </div>

        <div class="column large-6 medium-6">
            @yield('video-parallax')
            <div class="work-item js-work-item">
                <div class="item-view right-image">
                    <span class="demo-btn js-demo-btn" data-target="index-vpl.html"></span>
                    <img src="/html/images/versions/item4.jpg" alt="">
                </div>
                <h4 class="item-title">Video Parallax</h4>
            </div>
        </div>

        <div class="column large-6 medium-6">
            @yield('background-image')
            <div class="work-item js-work-item">
                <div class="item-view">
                    <span class="demo-btn js-demo-btn" data-target="index-i.html"></span>
                    <img src="/html/images/versions/item5.jpg" alt="">
                </div>
                <h4 class="item-title">Background Image</h4>
            </div>
        </div>

        <div class="column large-6 medium-6">
            @yield('background-parallax')
            <div class="work-item js-work-item">
                <div class="item-view right-image">
                    <span class="demo-btn js-demo-btn" data-target="index-ipl.html"></span>
                    <img src="/html/images/versions/item6.jpg" alt="">
                </div>
                <h4 class="item-title">Background Image Parallax</h4>
            </div>
        </div>
    </div>

</section>

@endsection

