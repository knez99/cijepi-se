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
  <!-- Nas css -->
  <link rel="stylesheet" href="styles.css">
  <!-- Za Bootstrap ikone -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>

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
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Tim -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <img src="images/david.png" class="mx-auto d-block" width="140" height="140">
        <h2 style="text-align: center;">David Mili??i??</h2>
        <p>Pozdrav, ja sam David Mili??i??. Imam 21 godinu i ??ivim u Ugljari. Student sam tre??e godine Informatike u Ora??ju. Slobodno vrijeme provodim igraju??i igre i dru??e??i se sa prijateljima.</p>
        <p><a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="https://github.com/DavidMilicic">Github</a></p>
      </div>

      <div class="col-lg-4">
        <img src="images/kruno.png" class="mx-auto d-block" width="140" height="140">
        <h2 style="text-align: center;">Krunoslav Kne??evi??</h2>
        <p style="text-align: center;">Pozdrav, ja sam Krunoslav Kne??evi??. Imam 22 godine i ??ivim u Jenji??u. Student sam tre??e godine Informatike u Ora??ju. U slobodno vrijeme igram nogomet,igre i dru??im se s prijateljima.</p>
        <p><a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="https://github.com/knez99">Github</a></p>
      </div>
      
      <div class="col-lg-4">
        <img src="images/mario.png" class="mx-auto d-block" width="140" height="140">
        <h2 style="text-align: center;">Mario Nedi??</h2>
        <p style="text-align: center;">Pozdrav, ja sam Mario Nedi??. Imam 21 godinu i ??ivim u Tolisi. Trenutno sam student tre??e godine Informatike u Ora??ju. Uz faks, slobodno vrijeme provodim s prijateljima, s bratom se bavim izradom namje??taja te vikednom radim u diskoteci. ????</p>
        <p><a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="https://github.com/MarioNedic">Github</a></p>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- Informacije -->
  <div class="container px-4 py-5" id="featured-3">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <i class="bi bi-info-circle" style="font-size: 3rem; color: #0d6efd;"></i>
        <h2>O projektu</h2>
        <p>Svrha dokumenta je omogu??iti korisnicima stranice prijavu za vakciniranje. Bilo koji korisnik ??e se mo??i prijaviti na stranicu sapotrebnim dokumentima (osobna iskaznica) te se tako prijaviti za vakciniranje u bolnici. Radni naziv projekta je ???Cijepi se??? i ono tako??er poti??e ljude na cijepljenje protiv virusa.</p>
      </div>
      <div class="feature col">
      <i class="bi bi-cpu" style="font-size: 3rem; color: #0d6efd;"></i>
        <h2>Tehnologije</h2>
        <p>Koristit ??emo tehnologije kao: Laravel, Bootstrap 5 css i javascript, MySQL.</p>
      </div>
      <div class="feature col">
      <i class="bi bi-patch-question" style="font-size: 3rem; color: #0d6efd;"></i>
        <h2>Motivacija</h2>
        <p>Radimo ovo jer bi ova ideja jako pomogla u dana??nje vrijeme. Jako nas zanima kako bi mogli popraviti neke stvari u ovoj sredini, i cijepljenje je jedna od tih stvari. Ideja bi sigurno dobro pro??la me??u na??im ljudima jer olak??ava cijepljenje.</p>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>