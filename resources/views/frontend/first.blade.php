@extends('frontend.template')

@section('page-content')
<section role="main">

    <section class="title-section js-first-screen">

        <div class="row">
            <div class="column large-12">
                <div class="title-block js-title-block">
                    <h2 class="wl-title">We are proud to introduce Triablo - One Page eCommerce Landing Page with unique features. Fully working AJAX category loading, "add to card" functionality and pre-order system. Enjoy!</h2>
                </div>
            </div>
        </div>
    </section>

@yield('index-count')

    <section class="collors-section js-second-screen">
        <div class="section-title-block">
            <h3 class="section-title">CHOOSE YOUR COLORS</h3>
        </div>
        <ul class="colors-list">
            <li class="js-color-item color-item red-c" data-color="#dc2d31" data-fileName="red.min.css"></li>
            <li class="js-color-item color-item blue-c" data-color="#42c3d6" data-fileName="blue.min.css"></li>
            <li class="js-color-item color-item green-c" data-color="#a1cf4e" data-fileName="green.min.css"></li>
            <li class="js-color-item color-item yellow-c" data-color="#e8846b" data-fileName="l-red.min.css"></li>
            <li class="js-color-item color-item brown-c" data-color="#9b59b6" data-fileName="purple.min.css"></li>
            <li class="js-color-item color-item l-green-c" data-color="#00bd9b" data-fileName="d-green.min.css"></li>
        </ul>

    </section>

</section>
@endsection
