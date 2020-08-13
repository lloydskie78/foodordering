@extends('layouts.overall2')

@section('sections')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <div class="text-center">
            <h2 class="page-section-heading text-secondary mb-0 d-inline-block">BURGERS</h2>
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
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#burgerModal">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-eye fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/burger1-min.jpg" alt="Burgers1" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#burgerModal">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-eye fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/burger2-min.jpeg" alt="Burgers2" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#burgerModal">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-eye fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/burger3-min.jpg" alt="Burgers3" />
                </div>
            </div>
        </div>
    </div>
</section>
@endsection