<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nicosia Sightseeings</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Top 10 Near Me</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/suggest') }}">Suggest New Destination</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;">
              <img src="http://localhost/dashboard/test/Top10website/public/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%;">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
              <a class="dropdown-item" href="{{ url('/profile') }}">User Profile</a>
              <a class="dropdown-item" href="{{ url('/cities/nicosia') }}">Back</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </li>
        </ul>

      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">Top 10 Sightseeings in Nicosia:</h1>
            <p class="lead">These are the top 10 Sightseeings in Nicosia according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h3>1st Restaurant</h3>
            <p>Details about the first restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>2nd Restaurant</h3>
            <p>Details about the second restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>3rd Restaurant</h3>
            <p>Details about the third restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>4th Restaurant</h3>
            <p>Details about the fourth restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>5th Restaurant</h3>
            <p>Details about the fifth restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>6th Restaurant</h3>
            <p>Details about the sixth restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>7th Restaurant</h3>
            <p>Details about the seventh restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>8th Restaurant</h3>
            <p>Details about the eigthth restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>9th Restaurant</h3>
            <p>Details about the ninth restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

          <div class="post">
            <h3>10th Restaurant</h3>
            <p>Details about the tenth restaurant</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>

          <hr class="my-4">

        </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
