@include('partials.header')
@include('partials.sidebar')
<div class="content-wrapper content"
    style="background: #fff; background-image: url('{{ asset('images/bg3.jpeg') }}');background-repeat: no-repeat;
background-size: 100% 100%;">
    <section class="content">
        <div class="wrapper">
            <div class="row">
                {{-- <h1>Bonjour</h1> --}}
                <h6 class="text-center" style="border-radius:0px;
            background: #e0e0ea;">
                    <?php
                    $dateSaisie = DB::select('SELECT DateSystem FROM taux_et_date_systems ORDER BY id DESC LIMIT 1')[0];
                    $userInfo = DB::select('SELECT * FROM users WHERE id="' . Auth::user()->id . '"')[0];
                    ?> <strong style="color: brown">Date Système:<?php $dataDuJour = date_create($dateSaisie->DateSystem); ?>
                        {{ date_format($dataDuJour, 'd/m/Y') }}</strong></h6>

                {{-- <div class="col text-center">
                    <img height="150" width="300" src="{{ asset('images/image_house_hand.png') }}" alt="">
                </div> --}}
                <div class="container-fluid px-2 mt-3">
                    <div class="row g-2">

                        <div class="col-12 col-sm-6 col-md-4">
                            <a class="shortcut-link text-decoration-none" href="{{ route('eco.pages.depot-espece') }}">
                                <div class="card shortcut-card shadow-sm">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon bg-success text-white">
                                            <i class="fas fa-coins"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">
                                                Dépôt
                                            </h5>
                                            <small class="text-muted">Ajouter de l'argent</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <a class="shortcut-link text-decoration-none"
                                href="{{ route('eco.pages.retrait-espece') }}">
                                <div class="card shortcut-card shadow-sm">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon bg-danger text-white">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">
                                                Retrait
                                            </h5>
                                            <small class="text-muted">Sortie de fonds</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <a class="shortcut-link text-decoration-none" href="{{ route('eco.pages.visa') }}">
                                <div class="card shortcut-card shadow-sm">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon bg-primary text-white">
                                            <i class="fab fa-cc-visa"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">
                                                Visa
                                            </h5>
                                            <small class="text-muted">Positionnement</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <a class="shortcut-link text-decoration-none" href="{{ route('eco.pages.appro') }}">
                                <div class="card shortcut-card shadow-sm">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon bg-info text-white">
                                            <i class="fas fa-arrow-circle-up"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">
                                                Approvisionnement
                                            </h5>
                                            <small class="text-muted">Demande d'argent</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <a class="shortcut-link text-decoration-none" href="{{ route('eco.pages.delestage') }}">
                                <div class="card shortcut-card shadow-sm">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon bg-warning text-white">
                                            <i class="fas fa-power-off"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">
                                                Délestage
                                            </h5>
                                            <small class="text-muted">Clôturer la caisse</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <a class="shortcut-link text-decoration-none" href="{{ route('eco.pages.releve') }}">
                                <div class="card shortcut-card shadow-sm">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon bg-secondary text-white">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">
                                                Relevé de compte
                                            </h5>
                                            <small class="text-muted">Voir relevé</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4">
                            <a class="shortcut-link text-decoration-none"
                                href="{{ route('eco.pages.adhesion-membre') }}">
                                <div class="card shortcut-card shadow-sm">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon bg-secondary text-white">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">
                                                Adhèsion
                                            </h5>
                                            <small class="text-muted">Nouveau membre</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('partials.footer')
