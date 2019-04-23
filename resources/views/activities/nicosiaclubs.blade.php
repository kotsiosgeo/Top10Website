<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nicosia Clubs & Bars</title>
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
            <h1 class="display-4">Top 10 Clubs & Bars in Nicosia:</h1>
            <p class="lead">These are the top 10 Clubs & Bars in Nicosia according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/lostandfound.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Lost + Found Drinkery</h2></a>
            <p>Dinos Constantinides has taken the building he once ran as a bar school and events space off the main drag in central Nicosia and transformed it into quite the hotspot. The name is a clue to the vibe of the place – it’s a cool and quirky mix of DIY fixtures and fittings punctuated with mismatched artefacts either donated by friends and family or found along the way. That’s the Lost + Found part. The Drinkery bit is Constantides’s nod to the fact the room isn’t quite a lounge or a full-on cocktail bar. Or maybe it refers to the size of the place – it’s bloomin’ tiny.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/stateclub.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>State Club</h2></a>
            <p>State is the labour of their love for food, drinks, sounds; a simple yet complex equation of what we view as a beautiful hospitable experience. A glamorous, minimally decorated restaurant / lounge which allows an exquisite dining and grooving experience. Both during the cold evenings of winter and the hot nights of summer State is the place to be. A sushi & cocktail bar, which offers a pleasurable experience through dining from a menu of renowned experts & signature cocktails made with 100% fresh ingredients that will surely gain impressions. For summer season it is open air, while for the chilly weather of colder months it becomes an indoor paradise.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/pyxidabar.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Pyxida Oyster Bar</h2></a>
            <p>The Oyster Bar is a raw bar, restaurant and bar located in the city centre. With a small frontage garden, a warm ambiance, we invite you to join us for a cocktail or premium spirit and relax on our high stool sofas.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/wineandmore.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Wine and More</h2></a>
            <p>Wine and More specialises in over 130 different labels of wines and Champagnes from over 16 different countries from around the world. They take pride in the variety of wines and therefore change the wine by the glass menu every couple of months to allow customers to explore. There’s a cute air controlled wooden and glass Cava on site, encouraging customers (with assistance from staff) to pop in and choose their preferred vino.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/apartmentclub.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The Apartment Club</h2></a>
            <p>The Apartment Club came to shake things up in the capital by introducing the ultimate freedom venue of the country. With its successful tradition in Athens' nightlife scene, the Apartment Club will now give Lefkosia partying vibes. As mentioned above the Apartment Club is a freedom club where everyone is welcome to have a great time, underlying the essence of acceptance in Cyprus. The club is a favourite among the LGBTQ+ community of Athens where its sister club is placed and is already loved by the LGBTQ+ community of Cyprus, even in the short period since its opening in December 2017. The club has a variety of features and tries to combine visual imagery with music and entertainment with art, offering as such an alternative approach in how you did 'clubbing' so far. The club notably hosts all kinds of themed parties offering a variety of alcoholic drinks, including a wide range of cocktails. Once a month the Apartment Club also hosts the island's hottest DJs to give you the best beats in Cyprus. However, the Apartment Club isn't just any other club, the space there as its name suggests is very cosy and the interior is reminiscent of an actual block apartment! </p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/platosbar.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Plato's Bar</h2></a>
            <p>Resting in the very heart of Old Nicosia, within the city walls and near the always buzzing Ledra Street, Plato’s Bar is very easy to miss as the entrance is recognisable by only a dimly-lit sign. However, it remains an old favourite on the Nicosia pub scene. Once you enter the bar you are greeted by a warm and cozy atmosphere. If not interested in sitting somewhere in the spacious bar, Plato’s has an alternative: a large covered porch with two fireplaces, ideal for the cold winter nights. The bar boasts one of the widest selections of beers on the island but where it really shines is in the serving method.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/brewfellas.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Brewfellas Beer Bar</h2></a>
            <p>Adjacent to Ledra Street and only a stone’s throw from the Green Line, Brewfellas begins to bustle after sunset when people fill up the seven or so tables outside. Unlike your typical bar in Cyprus, there is no television, no deafening house music and everyone seems to be drinking dark ale out of a cognac glass. As you enter the rust-red door, a few guys you saw the last time you visited sit at the bar talking with the owner or one of the bartenders. The glasses rarely leave their hands and are often swirled and smelled before drunk. It is a wine tasting without pretension, and nobody ever spits out the beverage.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/klubd.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Klubd</h2></a>
            <p>Walk down the club's narrow corridor and you enter a different world. The main room is brought to life by an imposing panel overflowed with LED lights that gives the club its very own digital sky and along with an excellent Soundsystem make the audio/visual experience unforgettable! In addition, the inner part's modern and industrial interior design provides the guest a comfortable and exciting party atmosphere the club brings in achieved international DJs but primarily supports local DJ talent, covering the underground music mainly of minimal tech house as well as other kinds of sounds across the spectrum from house and techno.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/moclub.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>MO Club</h2></a>
            <p>MO introduced in Nicosia its own fun concept. MO renewed ... and goes for MOre! This popular club plays mostly mainstream music. MO offers an integrated aesthetics pop art deco, with subliminal mood addressed to each one individually and stimulates the senses. Its dreamlike scene, exudes glam atmosphere, reflected in the imposing mirror. At MO Club you will enjoy thoughtful music selection, impeccable service and excellent cocktails. The owners and the stuff promise to keep providing the best service for you! MO Club... in the centre of Nicosia... the centre of nightlife! Are you MOcholic enough to join them?</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/silverstar.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Silver Star Wine Bar</h2></a>
            <p>Silver Star is a wine bar by Cava Nostra wine shop. Situated near Nicosia’s old city on the corner of Sophouli Street, and has this month seen renovations completed, sliding open their new glass doors to a brighter and fresher familiar classic. Specialising in wines and now also gins, its relaxed environment, eclectic music and high-quality beverages attract a diverse crowd; with lawyers and accountants from nearby offices making up the bulk in the afternoons and a wider spectrum of people in the evenings. Large old trees, high wooden barrels and tall stools decorate the pavement outside sheltered underneath a fanciful metal fan like canopy. Although Silver Star can seat 60-70 guests, finding a place to sit outside is not always easy, so an early show or a quick phone call to reserve is advisable.</p>
            <h6>Prices Range: £££</h6>
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
