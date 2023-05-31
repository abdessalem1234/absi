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
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')

    <!-- row -->
    <div class="container-fluid">
        <div class="col-lg-12">
           <h3 class="red-heading">Paramétrage</h3>
            <h2>Mes cartes fidélité</h2>
            <h4>Tableau de bord</h4>
        </div>

        <div class="row mx-4">
            <div class="col-md-4 mb-4">
                <div class="square-component1">
                    <div class="logo">
                        <img src="{{ asset('images/nfc/mes-cartes.png') }}" alt="Logo">
                    </div>
                    <div class="content">
                        <h2>Total des cartes</h2>
                        <h3>{{ $totalCartes }}</h3>
                        <p>cartes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="square-component1">
                    <div class="logo">
                        <img src="{{ asset('images/nfc/ma-carte-visite.png') }}" alt="Logo">
                    </div>
                    <div class="content">
                        <h2>Cartes utilisées</h2>
                        <h3>{{ $totalUtilise }}</h3>
                        <p>cartes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="square-component1">
                    <div class="logo">
                        <img src="{{ asset('images/nfc/mes-fiches-client.png') }}" alt="Logo">
                    </div>
                    <div class="content">
                        <h2>Cartes disponibles</h2>
                        <h3>{{ $totalDisponible }}</h3>
                        <p>cartes</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="square-component2">
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
                                <div class="item-column">
                                    <p class="item-value">{{ $client->availability === 'disponible' ? 'Disponible' : 'Utilisé' }}</p>
                                </div>
                                <div class="item-column">
                                    <div class="item-actions">
                                          <button class="btn-modifier">Modifier</button>
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
                                                    <button type="button" class="btn-annuler">Annuler</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                         <!----------------------------------->
                                          <!------------pop up delete--------->
                                          <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-supprimer">Supprimer</button>
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
            <div class="order-md-12 ">
                <div class="square-component3">
                    <h3>Résumé des cartes</h3>
                    <p>Vous trouverez ici le résumé des cartes fidélité</p>
                    <canvas id="statistique-carte"></canvas>
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
                type: 'doughnut',
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
