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

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cijepi se</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Onama.php">O nama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Register_Login.php">Register / Login</a>
          </li>
          <li class="d-flex"></li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Kartice tima-->
  <div class="container">
    <div class="row">
      <div class="cardteam">
        <img src="images/david.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">David Miličić</h5>
          <p class="card-text">Pozdrav, ja sam David Miličić. Imam 21 godinu i zivim u Ugljari. Student sam treće godine Informatike u Orašju. Slobodno vrijeme provodim igrajući igre i družeći se sa prijateljima.</p>
        </div>
      </div>



      <div class="cardteam">
        <img src="images/kruno.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Krunoslav Knežević</h5>
          <p class="card-text">Pozdrav, ja sam Krunoslav Knezevic. Imam 22 godine i zivim u Jenjiću.Student sam treće godine Informatike u Orašju. U slobodno vrijeme igram nogomet,igre i družim se s prijateljima.</p>
        </div>
      </div>



      <div class="cardteam">
        <img src="images/mario.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Mario Nedić</h5>
          <p class="card-text">Pozdrav, ja sam Mario Nedic. Imam 21 godinu i zivim u Tolisi. Trenutno sam student treće godine Informatike u Orašju. Uz faks, slobodno vrijeme provodim s prijateljima, s bratom se bavim izradom namještaja te vikednom radim u diskoteci. 😄</p>
        </div>
      </div>
    </div>

    <!--Kartice informacija-->
    <div class="container">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">O projektu</h5>
          <p class="card-text">Svrha dokumenta je omogućiti korisnicima stranice prijavu za vakciniranje. Bilo koji korisnik će se moći prijaviti na stranicu sapotrebnim dokumentima (osobna iskaznica) te se tako prijaviti za vakciniranje u bolnici. Radni naziv projekta je „Cijepi se“ i ono također potiče ljude na cijepljenje protiv virusa.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Tehnologije</h5>
          <p class="card-text">Koristit ćemo tehnologije kao: Laravel, Bootstrap 5 css i javascript, MySQL.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Motivacija</h5>
          <p class="card-text">Radimo ovo jer bi ova ideja jako pomogla u današnje vrijeme. Jako nas zanima kako bi mogli popraviti neke stvari u ovoj sredini, i cijepljenje je jedna od tih stvari. Ideja bi sigurno dobro prošla među našim ljudima jer olakšava cijepljenje.</p>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>