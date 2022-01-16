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
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
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

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
      <img src="images/david.png" width="140" height="140">


        <h2>David Miličić<</h2>
        <p>Pozdrav, ja sam David Miličić. Imam 21 godinu i živim u Ugljari. Student sam treće godine Informatike u Orašju. Slobodno vrijeme provodim igrajući igre i družeći se sa prijateljima.</p>
        <p><a class="btn btn-primary" href="#">Github</a></p>
      </div>
      <div class="col-lg-4">
        <img src="images/kruno.png" width="140" height="140">


        <h2>Krunoslav Knežević</h2>
        <p>Pozdrav, ja sam Krunoslav Knežević. Imam 22 godine i živim u Jenjiću. Student sam treće godine Informatike u Orašju. U slobodno vrijeme igram nogomet,igre i družim se s prijateljima.</p>
        <p><a class="btn btn-primary" href="#">Github</a></p>
      </div>
      <div class="col-lg-4">
      <img src="images/mario.png" width="140" height="140">


        <h2>Mario Nedić</h2>
        <p>Pozdrav, ja sam Mario Nedić. Imam 21 godinu i živim u Tolisi. Trenutno sam student treće godine Informatike u Orašju. Uz faks, slobodno vrijeme provodim s prijateljima, s bratom se bavim izradom namještaja te vikednom radim u diskoteci. 😄</p>
        <p><a class="btn btn-primary" href="#">Github</a></p>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>