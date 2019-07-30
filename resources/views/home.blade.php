@extends('layout.app')
@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--18">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">{{ __('home.slogan') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Menu Grid Area -->
<section class="food__menu__grid__area section-padding--lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="food__nav nav nav-tabs" role="tablist">
                    <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all"
                        role="tab">{{ __('home.filter.all') }}</a>
                    <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast"
                        role="tab">{{ __('home.filter.breakfast') }}</a>
                    <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch"
                        role="tab">{{ __('home.filter.lunch') }}</a>
                    <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner"
                        role="tab">{{ __('home.filter.dinner') }}</a>
                    <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee"
                        role="tab">{{ __('home.filter.drink') }}</a>
                    <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks"
                        role="tab">{{ __('home.filter.snack') }}</a>
                </div>
            </div>
        </div>
        <div class="row mt--30">
            <div class="col-lg-12">
                <div class="fd__tab__content tab-content" id="nav-tabContent">
                    <!-- Start Single Content -->
                    <div class="food__list__tab__content tab-pane fade show active" id="nav-all" role="tabpanel">
                        @foreach ($products as $product)
                        <!-- Start Single Food -->
                        <div class="single__food__list d-flex wow fadeInUp">
                            <div class="food__list__thumb">
                                <a href="#">
                                    <img src="{{ asset('bower_components/naitei-shopping/shopping-assets/images/products/'.$product->img) }}"
                                        alt="list food images">
                                </a>
                            </div>
                            <div class="food__list__inner d-flex align-items-center justify-content-between">
                                <div class="food__list__details">
                                    <h2><a href="#">{{ $product->name }}</a></h2>
                                    <p>{{ $product->description }}</p>
                                    <div class="list__btn">
                                        <a class="food__btn grey--btn theme--hover"
                                            href="#">{{ __('cart.order-now') }}</a>
                                    </div>
                                </div>
                                <div class="food__rating">
                                    <div class="list__food__prize">
                                        <span>{{ $product->price.'$' }}</span>
                                    </div>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Food -->
                        @endforeach

                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="food__pagination d-flex justify-content-center align-items-center mt--130">
                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Menu Grid Area -->

@endsection
