@extends('layouts.app')
@section('content')
<!--===============================
=            Hero Area            =
================================-->
<section class="hero-area bg-1 text-center overly">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header Contetnt -->
                <div class="content-block">
                    <a href=""><i class="fab fa-cloudversify fa-8x text-white"></i></a>
                    <h1>{{__('ui.welcome') }}</h1>
                    @include('navpopular')
                </div>
                <!-- Advance Search -->
                @include('navintermedie')
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>
<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>{{__('ui.articulos') }}</h2>
                    <p>{{__('ui.comics') }}</p>
                </div>
            </div>
        </div>
        <!-- offer 01 -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="trending-ads-slide"></div>
        </div>    
    </div>
               <div class="row">
                @foreach ($announcements as $announcement)
                @include('_announcement')
                @endforeach
               </div>
</div>
</section>
<!--====================================
=            Call to Action            =
=====================================-->

<section class="call-to-action overly bg-3 section-sm">
    <!-- Container Start -->
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="col-md-8">
                <div class="content-holder">
                    <h2>{{__('ui.pim') }}</h2>
                    <ul class="list-inline mt-30">
                        <li class="list-inline-item"><a class="btn btn-main"
                                href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li class="list-inline-item"><a class="btn btn-secondary"
                                href="{{ route('register') }}">{{__('ui.register') }}</a></li>
                        <li class="list-inline-item"><a class="btn btn-secondary"
                                href="{{ route('annoucements.all') }}">{{__('ui.all') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>
@endsection
