<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Paphos Clubs & Bars</title>
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
              <a class="dropdown-item" href="{{ url('/cities/paphos') }}">Back</a>
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
            <h1 class="display-4">Top 10 Clubs & Bars in Paphos:</h1>
            <p class="lead">These are the top 10 Clubs & Bars in Paphos according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/loftclub.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Loft Club</h2></a>
            <p>We change the way people see Night Life with our amazing events. Every night we are open we have new surprises for our visitors. All events are organized with the ultimate goal to make every guest feel like a V.I.P.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/firstandlast.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>First & Last Bar Paphos</h2></a>
            <p>Bar & Restaurant serving fresh English food and best priced drinks with live music from April through to end of October.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/flairs.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Flairs Cocktail Bar</h2></a>
            <p>As one of the many bars on Paphos’ infamous ‘Bar Street’, Flairs Cocktail Bar is one of the consistently busiest and is the ideal location for a wild night. This bar tends to attract a younger crowd and offers free cocktails. Their low prices and DJ will guarantee an incredible night. This is not the place for a leisurely and relaxed drink but rather something closer to a clubbing environment. If you’re in the area, Flairs Cocktail Bar is the place to be.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/summerclub.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Summer Club</h2></a>
            <p>
              Summer Club is located at Yeroskipou Beach. It is one of the most crowded clubs in Paphos area. If you are in the mood to party till eternity with blaring music filling up the atmosphere, then this is the place to be. Situated just a stone's throw from the Yeroskipou Beach, it is one of the largest clubs in Paphos boasting of various bars. All kinds of music are played here like R&B, House, latest hits. Theme parties, birthday parties, bachelor's nights can also be arranged here with prior reservations. Summer club hosts the hottest events ever and promise to give a long warm Summer!
            </p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/oldshack.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h5>The Old Fishing Shack Ale & Cider House</h5></a>
            <p>Probably the best selection of CRAFT beer on this island. With over 300 bottle labels, which includes over 50 IPA's,SAISONS,FRUIT LAMBICS,SOURS,GUEUZES,GLUTEN FREE,SMOKED,IMPERIAL RUSSIAN STOUTS,PORTERS&STOUTS,CRAFT LAGERS,PILSNERS,WEISSBIER,DUNKEL,BOCKS, BELGIAN DOUBLES&TRIPLES&QUADS,CASK LOCAL ALES,CASK SCRUMPY CIDERS etc</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/flintstones.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Flintstones Bar</h2></a>
            <p>The decoration is true Bedrock style – it includes a lot of stone and stone effects, Flintstones memorabilia and life-sized replicas of the characters from the popular cartoons and movies from which the venue takes its name. This bar is a stalwart of Paphos nightlife and has been operating for more than 25 years and in that time not much has changed. As it is still popular, they must be doing something right and customers who love it, say a visit to Flintstones is like ‘catching up with old friends.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/bottlebar.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The Bottle Bank Bar</h2></a>
            <p>THE BOTTLE BANK BAR Under new management started this season We are here to entertain you and make you feel like home We play Football, Rugby and any other sport during the day ( 2 big screens ) And at night we Have Karaoke Nights and play music all night long. You can even choose the song you want us to play and make your night even more enjoyable.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/woodenpub.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The Wooden Pub</h2></a>
            <p>A small and cosy pub located in the centre of tourist area near harbour. Far from the crowd but close enough to the sea makes it the perfect place to enjoy your drink. Visit us and try real ale made in Paphos. All seven different kinds of beer from Aphrodite’s rock brewery available in 500ml bottles. Large variety of bottled beers from around the world along with a descent selection of tap beers and ciders. Cocktail lovers can also find signature cocktails along with the usual suspects. All drinks are reasonably priced and always served with a smile. looking forward to seeing you here.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/rosepub.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The Rose Pub Cyprus</h2></a>
            <p>This pub situated at the Paphos Pres de Port, is one of the popular spots to enjoy a night out with food and drinks along with soulful music by performers. The Rose Pub is frequented by many well-known local and international artists and bands, while on the other nights the resident band uplifts the atmosphere.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/differentbar.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Different Bar</h2></a>
            <p>Enjoy our extensive drinks menu, from Tropical Cocktails to Tried Classics. Or try our signature Strawberry Daiquiri for a great price! Great music with current hits and old classics, you'll never get fed up of our musical selection. Great service, you will never forget our happy and (mostly) professional attitude. You'll definitely leave with a smile on your face. Great Prices, we're proud of our very competitive prices. We believe you should be able to have a great night out and still have money left in your wallet. Although, if you like to drink like a fish, that's not our fault!</p>
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
