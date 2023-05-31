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
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection
@section('content')
    <!-- row -->

    <div class="container-fluid">
        <div class="col-lg-12">
           <h3 class="red-heading">Fidélix</h3>
       <!-- <a  href="" class="btn  btn-primary">test</a>-->
            <h2>L'assistant marketing qui renforce votre visibilité et votre relation clients</h2>
        </div>
        

        <div class="row mx-4">
            <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>Mes cartes NFC</p>
            </div>
            <div class="button">
                <a href="/mes-cartes-nfc" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/ma-carte-visite.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Ma carte de visite</h3>
                <p>Ma carte de visite</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-fiches-client.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes fiches clients</h3>
                <p>Mes fiches clients</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
        </div>
        <div class="row mx-4">
        <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>********</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>********</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>********</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
        </div> <div class="row mx-4">
        <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>********</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>********</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>********</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
        </div>
        <div class="row mx-4">
        <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>********</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="square-component">
            <div class="logo">
                <img src="{{ asset('images/nfc/mes-cartes.png') }}"alt="Logo">
            </div>
            <div class="content">
                <h3>Mes cartes NFC</h3>
                <p>********</p>
            </div>
            <div class="button">
                <a href="#" class="btn-voir">Voir</a>
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
