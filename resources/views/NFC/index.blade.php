@extends('layouts.home')
@section('title')
   NFC - Home
@endsection

@section('page_description')
@endsection
@section('css')
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/chartist/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nfc.css') }}">
    <!-------------------->
    <meta name="csrf-token" content="c5r0a9KCDOb7trpxcKXuVJBj4YxyryPpMXr8RPRa">
    <meta name="description" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.cocuisinage.com/images/favicon.png">
    <link href="https://www.cocuisinage.com/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="https://www.cocuisinage.com/css/style.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="https://www.cocuisinage.com/vendor/toastr/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        .nav-header {
            background-color: #DD2F6E;

        }

        .content-body {
            padding-top: 7.5rem;
        }

        @media  only screen and (max-width: 1400px) {
            [data-sidebar-style="full"][data-layout="vertical"] .deznav .metismenu>li>a {
                font-size: 14px;
            }
        }
    </style>
    <!-------------------->
@endsection
@section('content')
    <!-- row -->

    <div class="container-fluid">
        <div class="col-lg-12">
           <h3 class="red-heading">Fidélix</h3>
       <!-- <a  href="" class="btn  btn-primary">test</a>-->
            <h2>L'assistant marketing qui renforce votre visibilité et votre relation clients</h2>
        </div>
        
        <div class="row">
        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(240, 234, 252); padding-top: 0.7rem;">
                    <i class="bi bi-credit-card-fill" style="color: rgb(118, 86, 183); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mes cartes NFC</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="/mes-cartes-nfc" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(254, 246, 207); padding-top: 0.7rem;">
                    <i class="bi bi-person-vcard-fill" style="color: rgb(213, 184, 31); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Ma carte de visite Web</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/com" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(252, 234, 240); padding-top: 0.7rem;">
                    <i class="bi bi-people-fill" style="color: rgb(221, 47, 110); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mes fiches clients</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/social" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgba(16, 163, 129, 0.13); padding-top: 0.7rem;">
                    <i class="bi bi-chat-fill" style="color: rgb(16, 163, 127); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mes campagnes SMS</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/prompte" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(252, 244, 234); padding-top: 0.7rem;">
                    <i class="bi bi-pencil-square" style="color: rgb(243, 135, 0); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mon marketing Automatisé</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/historique" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(230, 239, 255); padding-top: 0.7rem;">
                    <i class="bi bi-controller" style="color: rgb(24, 119, 242); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mes jeux concours</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/parametrage" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(254, 246, 207); padding-top: 0.7rem;">
                    <i class="bi bi-person-vcard-fill" style="color: rgb(213, 184, 31); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mon programme fidélité</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/com" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(254, 246, 207); padding-top: 0.7rem;">
                    <i class="bi bi-person-vcard-fill" style="color: rgb(213, 184, 31); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mes avis clients</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/com" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(254, 246, 207); padding-top: 0.7rem;">
                    <i class="bi bi-person-vcard-fill" style="color: rgb(213, 184, 31); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mes appels</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/com" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(254, 246, 207); padding-top: 0.7rem;">
                    <i class="bi bi-person-vcard-fill" style="color: rgb(213, 184, 31); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mes statistiques</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/com" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6">
            <div class="card overflow-hidden p-2">
            <div class="card-header media border-0 pb-0">
                <div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(254, 246, 207); padding-top: 0.7rem;">
                    <i class="bi bi-person-vcard-fill" style="color: rgb(213, 184, 31); font-size: 1.6rem; align-self: center;"></i>
                </div>
                <h4>Mon newsletter</h4>
                <p class="mb-0">Article de blog</p>
                </div>
            </div>
            <div class="card-body p-0">
                <a href="https://www.cocuisinage.com/autocom/com" class="badge badge-primary" style="float: right;">Voir</a>
            </div>
            </div>
        </div>
        </div>

     

        


    </div>


@endsection
@section('script')
   
    </script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>
@endsection
