@extends('layouts.overall2')

@section('sections')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <div class="text-center">
            <h2 class="page-section-heading text-secondary mb-0 d-inline-block">COMBO MEALS</h2>
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
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#comboModal" id="combo1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-eye fa-3x"></i>
                        </div>
                    </div><img class="img-fluid" src="assets/img/combo1-min.jpg" alt="Combo1" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#comboModal" id="combo2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-eye fa-3x"></i>
                        </div>
                    </div><img class="img-fluid" src="assets/img/combo2-min.jpg" alt="Combo2" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#comboModal" id="combo3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-eye fa-3x"></i>
                        </div>
                    </div><img class="img-fluid" src="assets/img/combo3-min.jpg" alt="Combo3" />
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="comboModal" tabindex="-1" role="dialog"
            aria-labelledby="#comboModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0 foodTitle">Burgers</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                        src="assets/img/portfolio/burger.jpg" alt="Burgers" id="imageforCombo" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5" id="desc"></p>
                                    <button class="btn btn-primary" id="addOrder">Order Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('js/combo.js') }}"></script>
@endsection