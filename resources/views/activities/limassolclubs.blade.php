<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Limassol Clubs & Bars</title>
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
              <a class="dropdown-item" href="{{ url('/cities/limassol') }}">Back</a>
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
            <h1 class="display-4">Top 10 Clubs & Bars in Limassol:</h1>
            <p class="lead">These are the top 10 Clubs & Bars in Limassol according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/guaba.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Guaba Beach Bar</h2></a>
            <p>Guaba is our home!No matter what day you visited us, you were sure to enjoy some new and exciting aspect of our Guaba world. Day times on the beach were the perfect chance to sample our signature cocktails and relax on our chilling loungers, to take a swim in the lovely beach in front of our bar and mellow with your friends. From the cool weekday atmosphere to the hot, crazy, unreal Sunday parties, Guaba made sure, as always, that there was something for everyone, at all times.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/7seas.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>7 Seas</h2></a>
            <p>The 7Seas Bar is an elegant music bar with a nightly entertainment program and it is also the perfect venue for hosting celebrations or gathering with friends to dance the night away, while our staff ensure you a fantastic and memorable night. Sample our impressive array of signature drinks and special cocktails while you listen to our popular resident DJs or live bands and performances by International artists.Enter the 7Seas - a gateway into another world and acquire a taste of music…at its very best.A glamorous venue with state of the art sound and light system. International DJ's from all over the world spin the decks with the top hits of all times. </p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/ravens.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Ravens Music Hall</h2></a>
            <p>Ravens Music Hall is one of the best destinations in Limassol for the fans of Rock music. Every night there is a different live band playing all the kinds of Rock music, both Greek and English. The prices of the drinks are very low so you and your friends can enjoy the night without having to worry about the bill. Make a note for Raven Music Hall’s Fridays, when the band called Lopodites is playing and they rock! </p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/breeze.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Breeze Summer Club</h2></a>
            <p>One of the best clubs in Cyprus, Breeze Summer Club offers an amazing experience of outdoor clubbing next to the sea. With well-known DJs from Cyprus and around the world, and many famous singers performing there during the summer period Breeze Summer Club is one of the hottest destinations in Limassol for the summer.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/marinaroofbar.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Marina Roof Bar</h2></a>
            <p>Exactly what the name suggests, a rooftop bar overlooking the new state of the art Limassol marina in its entirety. Enjoy refreshing cocktails and mixers, with a perfect point of view!</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/dolce.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Dolce Club</h2></a>
            <p>Dolce Club is one of the best party places in Limassol with good music and tasty cocktails, friendly stuff and fairly good prices. Dolce hosts many elite events with famous DJs from Cyprus and other countries during the whole year, thanks to its two separate Dolce venues the indoor venue for Winter and Autumn and the outdoor venue for Summer and Spring.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/poe.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Poe Bar</h2></a>
            <p>Poe Bar is a very cosy place in the heart of Limassol that offers amazing food and excellent drinks and cocktails in very logical prices. The staff is very friendly there is both indoor and outdoor sitting area, the music varies depending on the night but mostly it is Rock, and it is suitable for all ages.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/daltons.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Daltons Bar</h2></a>
            <p>We are the newest rock and alternative music venue in the heart of the Old Town of Limassol! We have DJ's, Live music and events every week, weekly cocktail and shot promotions, happy hour from 10 until 12 pm and the friendliest staff in town!!! we open from 10 and we party til sunrise.... Come join the fun!</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/rogmes.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Rogmes Live Music</h2></a>
            <p>Rogmes Live Music is located in the heart of Limassol and it is one of the most famous Greek Live Music Venues on the island. Greek Live Music Venues are also called Bouzoukia, and you can enjoy the music from a sitting area with tables or from the island bars. The Entrance is free, and you only have to pay your drinks!</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/hookahplace.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>HookahPlace Limassol</h2></a>
            <p>Hookah mecca of Cyprus, main hookah place in Limassol. Hookahs and tobaccos from all over the world. Masterclasses and trainings in hookah craftsmanship.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

        </div>

        <div class="card">
          <article class="card-group-item">
              <header class="card-header">
                   <h6 class="title">Age Range: </h6>
                   </header>
                     <div class="filter-content">
                      <div class="card-body">

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Check2">
                            <label class="custom-control-label" for="Check2">18 - 25</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Check3">
                            <label class="custom-control-label" for="Check3">25 - 40</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Check4">
                            <label class="custom-control-label" for="Check4">40 +</label>
                        </div>

                       </div>
                      </div>
         </article>
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
