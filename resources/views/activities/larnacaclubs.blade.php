<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Larnaca Clubs & Bars</title>
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
              <a class="dropdown-item" href="{{ url('/cities/larnaca') }}">Back</a>
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
            <h1 class="display-4">Top 10 Clubs & Bars in Larnaca:</h1>
            <p class="lead">These are the top 10 Clubs & Bars in Larnaca according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/ammos.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Ammos Beach Bar</h2></a>
            <p>Ammos is an upscale beach bar, restaurant and nightspot based on the remarkable Makenzy Beach in Larnaca. Our lounge bar, beach bar, restaurant and party location - both facing the Mediterranean Sea - invite you to a relaxing stay enjoying our variety of cocktails and modern cuisine, which is blending tasteful dishes from all over the world to a unique gourmet experience.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/secretgarden.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Secret Garden Wine & Coffee Bar</h3></a>
            <p>A small Wine & coffee bar just by the iconic Church of Saint Lazarus. An amazing small bar with a big secret garden in a back, with drinks, food (Platters, Cheeseboards, snacks, Toasties desserts and subs), coffees, cocktails, nice range of local and worldwide wines and Live events. Cool people, good music. Cosy little place.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/rumtree.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Rum Tree</h2></a>
            <p>Located very close to the start of the iconic strip, it enjoys an exclusive part of town which it is slowly reviving. Its outdoor patio provides an ideal setting for an evening drink with friends, with its low lighting, wooden interior and now, during the colder months, heating across the room. The bar area has the appearance of an old beach shack – an all-wooden creation with a very minimalist look and with its various rums spread across the shelves. The seating area is made up of simple wooden chairs and tables close together while there is also plenty of space to stand.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/clubdeep.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Club Deep</h2></a>
            <p>Club DEEP is a large club and is also popularly referred to as Larnaca’s Hot Party Spot. The entire club gives off an edgy vibe, and the sound system plays the best RnB, Hip Hop and House Music followed by some of the best DJs in the city for a wild night of entertainment.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/skylight.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Skylight Music Bar</h2></a>
            <p>SKYLIGHT Music Bar established in 1987 by local landlord Chris where you will find the best cocktails in Pyla with the best atmosphere. SKYLIGHT offers a variety of Karaoke, Latin & Salsa, Motown, and live Greek music throughout the week. Music requests welcomed and you can enjoy a free shot upon your first visit. Selection of desserts and bar food also available.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/bluemartini.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Blue Martini Summer Club</h2></a>
            <p>Located in the middle of the Makenzy beach, the Blue Martini Club is the perfect choice for visitors and locals. The club is located a step away from the beach and exudes luxury and creates the perfect environment for an ideal summer life.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/finis.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Fini's Beach Bar</h2></a>
            <p>Visit with family, an excellent location by the beach where kids can safely play nearby. There is always a nice selection of music for enjoying your cold beer or cocktail on a hot day.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/belfry.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The Belfry Larnaca</h2></a>
            <p>An all-day venue in the heart of Larnaca with extraordinary, signature cocktails and magnificent view in Saint Lazarous Church.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/kokomo.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Kokomo Music Bar</h2></a>
            <p>Kokomo is a music bar in Larnaca since 1990. We offer trendy music with a warm atmosphere. We have a friendly bar staff who are always happy to help and a DJ who plays songs of your choice. The bar has 12 LCD TVs showing all major Cypriot and European football matches and other sporting events. We have two billiards to play with your friends. We also have an outdoor area for the sunny and hot days. There is a customer car park behind the bar which is free for the customers.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/barcode.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Barcode</h2></a>
            <p>Small friendly cafe/bar located back from Larnaca seafront on a pedestrian walkway with other cafe`s and bars. Open all year round.</p>
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
