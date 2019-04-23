<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nicosia Restaurants</title>
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
            <h1 class="display-4">Top 10 Restaurants in Nicosia:</h1>
            <p class="lead">These are the top 10 Restaurants in Nicosia according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/piatsagourounaki.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Piatsa Gourounaki</h2></a>
            <p>Piatsa Gourounaki translates as the place where little piglets meet and greet. Our menu is tailored for those who love big, tender, sizzling pieces of meat. What we offer are fresh, simple, delicious dishes at great prices. All of this within a casual, friendly environment that will leave you with a mouth-watering memory. Our cuisine is purely Greek. Souvlaki is without a doubt our most recommended dish. All of the meat is cooked on a traditional grill. To accompany the meat, we offer salads inspired from Crete and Greece. To wash all of this down we have wine straight from the barrel, a variety of beers, tsipouro, Retsina, Zivania and Ouzo. On top of this we serve Mahalepi made by the famous Mrs Popi.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/cookshop.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Cook Shop</h2></a>
            <p>Our innate love for food took us on a wonderful journey where we explored the different possibilities and tested the boundaries – coming up with our own recipes for our jams, preserves, pickles and even making our own cheese, cured meats, salted sardines, and mulled wine. Friends and family who were happy to receive (and consume) these as presents urged us to make these items available to the wider public. As people are becoming more aware and careful regarding what they consume - and what it is made of – we pride ourselves in choosing and using only the most fresh and best possible ingredients – we use no artificial flavors, additives or preservatives.
              At the boutique you will find our products which will change according to seasonal availability, our ready meals that you can order and stock at home as well as any new items we produce.
            </p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/vinocultura.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Vino Cultura</h2></a>
            <p>Vino Cultura Wine and Tapas bar is here to offer a comfortable, friendly atmosphere for wine and food lovers, to enjoy their wine accompanied with exceptional food in the form of enjoyable delectable small plates…in an affordable price value. Vision Statement: To enhance people’s knowledge and offer a unique experience in pairing the right wine with the right food. Our Goal: To become the preemie  wine destination in Cyprus… Our goal is to keep our customer for a lifetime.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/pyxida.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Pyxida</h2></a>
            <p>Traditional Cyprus food all home-made with Cyprus fresh fish and shellfish, Panikos and Astero welcome all with a friendly smile and respect for all the customers, we organise all kinds of parties with low prices as any kind of food can be served 90 people max for winter or 180 people max for summer. Try our meze as our plentiful dishes will satisfy all Old and young.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/moondogs.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Moondog's Bar & Grill</h2></a>
            <p>Moondog’s rock and sports concept was created from the ground up, built by dedicated, hard-working people that share the same motivation and vision. Moondog's is now the home for cool, relaxed people... people who love sports, appreciate good music and enjoy sharing special moments with friends and family... people with opinions and stories to tell... people with a rock attitude… and of course people who take their burgers and beer seriously. A place for all our friends… a place for men and women… a place for you! The ideal PUB for everyone!</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/anamma.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>To Anamma</h2></a>
            <p>They say that the way to a one’s heart is through their stomach; traditional tastes, environment and spirit of the old town; all come together in the sought-after gem called “Anamma”, offering authentic Cypriot and Greek food at its best, in the heart of Ledra Street, Nicosia. From the outside, looks are deceiving as it appears like your traditional take away kebab shop, but as you venture in to the modern restaurant and veer to your left into the ‘Stoa’ cultured crowds chill to good local Souvlaki, drinking Ouzo and Retzina. As you walk further into the inner courtyard; a magical secret garden unveils itself in a quaint and romantic setting, amongst terracotta pots with fragrant basil mint.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/kathodon.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Kathodon</h2></a>
            <p>With my arrival in the beautiful Island Cyprus many years ago, I carried with me a dream, to create an authentic and traditional Greek tavern that would focus on the flavours of ingloriously lost homeland of Asia Minor. I started out in difficult years surrounded with dark and desolation affected by the visible effects of the invasion and occupation! Slowly and with much love and hard work my tavern had begun to acquire life and took strength from the preference and confidence you had in us. I came up with the name of the tavern after much thought.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/akakiko.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Akakiko</h2></a>
            <p>The philosophy behind Akakiko is simple – Easy Japanese Fusion with high quality healthy food. Our menu offers a variety of fresh Sushi, Sashimi and Maki, starters such as Popcorn Shrimp, Dim Sum and Thai Calamari and delicious hot dishes such as Duck Sweet & Sour and Beef fillet Teppan. Faultless service from exceptional staff completes the model of modern Japanese cuisine.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/oceanbasketnicosia.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Ocean Basket Mall of Cyprus</h2></a>
            <p>The most popular seafood and sushi restaurant on the Island! A successful franchise coming from South Africa with Greek founders offering amazing quality food, value for money prices in a pleasant atmosphere. You will be charmed by the friendliest of staff and amazed with the variety of seafood & sushi platters, along with wines, cocktails and desserts. Ocean Basket is for all the family!</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/valtourigani.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Valtou Rigani</h2></a>
            <p>Valtou Rigani serves traditional Greek cuisine consisted of souvlaki, other meat cooked on charcoal, dips, fresh salads and various side dishes. Basic menu can be found on our Website and on our Facebook page. We also serve two traditional dishes of the day during the weekdays for lunch.</p>
            <h6>Prices Range: ££ - £££</h6>
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
                				  	<input type="checkbox" class="custom-control-input" id="Check1">
                				  	<label class="custom-control-label" for="Check1">12 - 17</label>
                				</div>

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
