@extends('layouts.overall')

@section('sections')

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <div class="text-center">
            <h2 class="page-section-heading text-secondary mb-0 d-inline-block">MENU</h2>
        </div>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Items-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/portfolio/burger.jpg" alt="Burgers" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/portfolio/drinks.jpg" alt="Beverages" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/portfolio/combo.jpg" alt="Combo Meal" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Modal-->
<div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog"
    aria-labelledby="#portfolioModal0Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                        class="fas fa-times"></i></span></button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary mb-0">Burgers</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                src="assets/img/portfolio/burger.jpg" alt="Burgers" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">Burgers satisfaction beyond Imagination. You can experience it here
                            </p>
                            <button class="btn btn-primary">
                                <a href="{{ url('burgers') }}" id="modalBtn">Go to Burgers
                                    Section</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
    aria-labelledby="#portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                        class="fas fa-times"></i></span></button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary mb-0">Beverages</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                src="assets/img/portfolio/drinks.jpg" alt="Beverages" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">Do you want drinks? Our restaurant gives you the best beverages there
                                is.
                            </p>
                            <button class="btn btn-primary">
                                <a href="{{ url('drinks') }}" id="modalBtn">Go to Beverage
                                    Section</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
    aria-labelledby="#portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                        class="fas fa-times"></i></span></button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary mb-0">Combo Meal</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                src="assets/img/portfolio/combo.jpg" alt="Combo Meal" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">
                                You can experience both
                            </p>
                            <button class="btn btn-primary">
                                <a href="{{ url('combomeals') }}" id="modalBtn">Go to Combo Meal
                                    Section</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <div class="text-center">
            <h2 class="page-section-heading d-inline-block text-white">ABOUT</h2>
        </div>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magnaaliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="text-justify">
                    Imperdiet nulla malesuada pellentesque elit eget gravida. Proin sagittis nisl rhoncus mattis
                    rhoncusurna. Purus non nim praesent elementum facilisis. Bibendum at varius vel pharetra. Quis
                    auctor elit sed vulputate mi sit amet mauris.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <div class="text-center">
            <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
        </div>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Content-->
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                    <div class="text-muted">Phone</div>
                    <div class="lead font-weight-bold">(555) 555-5555</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                    <div class="text-muted">Email</div><a class="lead font-weight-bold"
                        href="mailto:name@example.com">name@example.com</a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div> --}}
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home2.css') }}">
@endsection

@section('scripts')

@endsection