@extends('layout.home')

@section('title', 'About')

@section('content')
<!-- Intro -->
<section class="section-wrap intro pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mb-50">
                <h2 class="intro-heading">about our shop</h2>
                <p>{{$about->deskripsi}}</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <span class="result">10</span>
                <p>Years on Global Market.</p>
                <span class="result">45</span>
                <p>Partners are Working With Us.</p>
            </div>
        </div>
        <hr class="mb-0">
    </div>
</section> <!-- end intro -->

<!-- Promo Section -->
<section class="section-wrap promo-bg" style="background-image:url(/front/img/promo_2_bg.png);">
    <div class="container text-center">
        <div class="table-box">
            <h2 class="heading-frame white">The best ideas</h2>
        </div>
    </div>
</section> <!-- end promo section -->


@endsection
