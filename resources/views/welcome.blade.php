<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>
<!DOCTYPE html>
<html>

<head>

  <title>Cijepi se</title>

  <!-- Required meta tags (for bootstrap) -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" aria-current="page" href="{{ url('/') }}" style="font-size:30px;">Cijepi se</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/Onama') }}">O nama</a>
            </li>
            <li> @if (Route::has('login'))
              @auth
            </li>
            <li>
              <a class="nav-link active" href="{{ route('logout') }}"> Log out</a>
            </li>
            <li>
              @else
              <a class="nav-link active" href="{{ route('login') }}">Log in</a>
            </li>
            <li>
              @if (Route::has('register'))
              <a class="nav-link active" href="{{ route('register') }}">Register</a>
              @endif
              @endauth
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <main>

    <div class="container">


      <!-- Featurettes -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">??to je cjepivo?</h2>
          <p class="lead">Cjepivo je vrsta biolo??kog preparata koja pobolj??ava odnosno poma??e stvaranju otpornosti prema nekoj bolesti. U cjepivu se obi??no nalaze tvari koje predstavljaju neku bolest, a te tvari mogu biti: oslabljeni ili mrtvi mikroorganizmi koji uzrokuju neku bolest, toksini ili dijelovi proteina omota??a mikroorganizama ili RNK mikroorganizama. U organizam se mogu unositi injekcijom u ko??u, pod ko??u ili u mi??i??, u usta ili u nos.</p>
        </div>
        <div class="col-md-5">
        <img src="images/Upitnik.png" class="img-fluid">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Za??to se cijepiti?</h2>
          <p class="lead">Najprije cijepljenje nam pru??a imunitet: pru??a dugotrajnu, ponekad do??ivotnu za??titu od bolesti. Cjepiva koja se preporu??uju u programu cijepljenja u ranoj dje??joj dobi ??tite djecu od ospica, vodenih kozica i drugih bolesti. Sekundarna korist cijepljenja je "imunitet stada", tako??er poznat kao imunitet zajednice. Imunitet stada nam svima pru??a za??titu kako je ve??i broj cijepljenih u zajednici. Uz dovoljno ljudi s imunitetom protiv odre??ene bolesti, te??ko je da se bolest pojavi u zajednici.</p>
        </div>
        <div class="col-md-5 order-md-1">
        <img src="images/ZastoCijepiti.png" class="img-fluid">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Kako se prijaviti za cijepljenje?</span></h2>
          <p class="lead">Jednostavno se prijavite na stranicu, ispunite odgovaraju??a polja te pogledajte dostupne datume za cijepljenje!</p>
        </div>
        <div class="col-md-5">
        <img src="images/KakoPrijaviti.png" class="img-fluid">

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- End of Featurettes -->

    </div>

  </main>


  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Bootstrap JS with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>






</body>

</html>