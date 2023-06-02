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
           <h3 class="red-heading">Paramétrage</h3>
            <h2>Mes cartes fidélité</h2>
            <h4>Tableau de bord</h4>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="card overflow-hidden">
            <div class="card-header media border-0 pb-0">
				<div class="media-body">
                <div class="card" style="width: 72px; height: 59px; background-color: rgb(254, 246, 207); padding-top: 0.7rem;">
                    <i class="bi bi-credit-card-2-front-fill" style="color: rgb(213, 184, 31); font-size: 1.6rem; align-self: center;"></i>
                </div>
                    <div class="content">
                        <h2>Total des cartes</h2>
                        <h3>{{ $totalCartes }}</h3>
                        <p>cartes</p>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="card overflow-hidden">
            <div class="card-header media border-0 pb-0">
				<div class="media-body">
                    <div class="card" style="width: 72px; height: 59px; background-color: rgb(252, 234, 240); padding-top: 0.7rem;">
                        <i class="bi bi-exclamation-circle-fill" style="color: rgb(221, 47, 110); font-size: 1.6rem; align-self: center;"></i>
                    </div>
                    <div class="content">
                        <h2>Cartes utilisées</h2>
                        <h3>{{ $totalUtilise }}</h3>
                        <p>cartes</p>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="card overflow-hidden">
            <div class="card-header media border-0 pb-0">
				<div class="media-body">
                    <div class="card" style="width: 72px; height: 59px; background-color: rgba(16, 163, 129, 0.13); padding-top: 0.7rem;">
                        <i class="bi bi-check-circle-fill" style="color: rgb(16, 163, 127); font-size: 1.6rem; align-self: center;"></i>
                    </div>
                    <div class="content">
                        <h2>Cartes disponibles</h2>
                        <h3>{{ $totalDisponible }}</h3>
                        <p>cartes</p>
                    </div>
                </div>
            </div>
            </div>
            </div>
            
            <div class="col-xl-7 col-xxl-8 col-lg-8 col-sm-12">
                <div class="card">
                    <div class="list-container">
                        <div class="list-header">
                            <div class="header-item">
                                <p>ID</p>
                            </div>
                            <div class="header-item">
                                <p>Client</p>
                            </div>
                            <div class="header-item">
                                <p>Disponibilité</p>
                            </div>
                            <div class="header-item">
                                <p>Actions</p>
                            </div>
                        </div>
                        <hr class="separator">
                        @foreach ($clients as $client)
                            <div class="list-item">
                                <div class="item-column">
                                    <p class="item-value">{{ $client->id }}</p>
                                </div>
                                <div class="item-column">
                                    <p class="item-value">{{ $client->name }}</p>
                                </div>
                                <div class="item-column" style="display: flex; align-items: center;">
                                    @if($client->availability === 'disponible')
                                        <div class="card btn" style="width: 100%; height: 59px; background-color: rgb(16, 163, 129, 0.13); padding-top: 0.7rem; cursor: pointer;color: rgb(97, 197, 97);">
                                            Disponible
                                        </div>
                                    @elseif($client->availability === 'utilisé')
                                        <div class="card btn " style="width: 100%; height: 59px; background-color: rgb(252, 234, 240); padding-top: 0.7rem; cursor: pointer;color: rgb(221, 47, 110); ">
                                            Utilisé
                                        </div>
                                    @endif
                                </div>

                                <div class="item-column">
                                    <div class="item-actions">
                                   
                             <!---------------update------------->
                                    <div class="card btn btn-modifier" style="width: 72px; height: 59px; background-color: rgb(254, 246, 207); padding-top: 0.7rem; cursor: pointer;">
                                         <i class="bi bi-pen" style="color: rgb(213, 184, 31); font-size: 1.6rem; align-self: center;"></i>
                                    </div>
                            <!------------------------------------>
                                         <!---------------pop up update------------->
                                          <div id="modification-dialog" class="modification-dialog">
                                            <div class="modification-content">
                                                <h3>Modifier le client</h3>
                                                <form action="{{ route('clients.update', $client->id) }}" method="POST" class="modification-form">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="name">Nom du client :</label>
                                                    <input type="text" id="name" name="name" value="{{ $client->name }}" required>
                                                </div>
                                                <div class="form-group">
                                                <label for="status">Statut :</label>
                                                        <div>
                                                            <input type="radio" id="status_disponible" name="availability" value="Disponible" {{ $client->availability === 'Disponible' ? 'checked' : '' }}>
                                                            <label for="status_disponible">Disponible</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="status_utilise" name="availability" value="utilisé" {{ $client->availability === 'Utilisé' ? 'checked' : '' }}>
                                                            <label for="status_utilise">Utilisé</label>
                                                        </div>


                                                </div>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn-modifier-confirm">Modifier</button>
                                                    <button id="btn-annuler" class="btn-annuler" type="button">Annuler</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                         <!----------------------------------->
                                          <!------------pop up delete--------->
                                          <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <div class="card btn btn-supprimer" style="width: 72px; height: 59px; background-color: rgb(252, 234, 240); padding-top: 0.7rem; cursor: pointer;">
                                               <i class="bi bi-trash3" style="color: rgb(221, 47, 110); font-size: 1.6rem; align-self: center;"></i>
                                            </div>
                                            
                                        </form>
                                        <div class="confirmation-overlay"></div>
                                        <div id="confirmation-dialog" class="confirmation-dialog">
                                            <h3>Voulez-vous vraiment supprimer </h3>
                                            <h3>la carte ?</h3>
                                            <div class="buttons">
                                                <button id="btn-annuler" class="btn-annuler" type="button">Annuler</button>
                                                <button id="btn-confirm-supprimer" class="btn-confirm" type="button">Supprimer</button>
                                            </div>
                                        </div>
                                        <!---------------------------->


                                    </div>
                                </div>
                            </div>
                            <hr class="separator">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-sm-12">
                <div class="card">
				<div class="card-header">
                    <h4 class="card-title">Résumer des cartes</h4>
                </div>
                <div class="card-body">
                    <canvas id="statistique-carte"></canvas>
                </div>
            </div>
            
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('statistique-carte').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Disponibles', 'Utilisées'],
                    datasets: [{
                        data: [{{ $totalDisponible }}, {{ $totalUtilise }}],
                        backgroundColor: ['#36a2eb', '#ff6384']
                    }]
                }
            });
        });
    </script>
<!------------pop up--------->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var deleteButtons = document.querySelectorAll('.btn-supprimer');
    var confirmationDialog = document.getElementById('confirmation-dialog');
    var btnConfirmSupprimer = document.getElementById('btn-confirm-supprimer');
    var btnAnnuler = document.getElementById('btn-annuler');

    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            confirmationDialog.classList.add('show');
            document.querySelector('.confirmation-overlay').classList.add('show');
        });
    });

    btnConfirmSupprimer.addEventListener('click', function() {
        var form = document.querySelector('.delete-form');
        form.submit();
    });

    btnAnnuler.addEventListener('click', function() {
        confirmationDialog.classList.remove('show');
        document.querySelector('.confirmation-overlay').classList.remove('show');
    });
});

</script>
<!----------------------------->
<!--------------pop up update--------------->
<script>
document.addEventListener('DOMContentLoaded', function() {
  var modifierButtons = document.querySelectorAll('.btn-modifier');
  var modificationDialogs = document.querySelectorAll('.modification-dialog');
  var btnModifierConfirms = document.querySelectorAll('.btn-modifier-confirm');
  var btnAnnulers = document.querySelectorAll('.btn-annuler');

  modifierButtons.forEach(function(button, index) {
    button.addEventListener('click', function() {
      modificationDialogs[index].style.display = 'block';
    });

    btnAnnulers[index].addEventListener('click', function() {
      modificationDialogs[index].style.display = 'none';
    });

    btnModifierConfirms[index].addEventListener('click', function() {
      var form = modificationDialogs[index].querySelector('.modification-form');
      form.submit();
    });
  });
});

</script>
<!----------------------------->
@endsection
