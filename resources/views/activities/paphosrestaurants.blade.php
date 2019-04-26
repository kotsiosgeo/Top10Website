<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Paphos Restaurants</title>
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
            <h1 class="display-4">Top 10 Restaurants in Paphos:</h1>
            <p class="lead">These are the top 10 Restaurants in Paphos according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/londos.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Londos Perasma Café Restaurant</h3></a>
            <p>Londos perasma situated on B6 at Timi village, just five minutes from Paphos airport. A traditional cypriot family run taverna, with a small outside childrens play area. A very reasonably priced menu consisting of both traditional and non-traditional food, which can be also be made to takeaway. All food is freshly prepared, and any special dietary requests can be catered for with some prior notice. Roast beef Sunday lunches are also served, but prior booking is advised as it is very popular, and tables tend to fill very quickly all day.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/namaste.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Namaste Indian Restaurant</h2></a>
            <p>Authentic Indian Street Food, vegetarian and vegan-friendly. We serve freshly cooked authentic Indian food.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/caravellerestaurant.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h5>Caravelle Fish & Mediterranean Restaurant</h5></a>
            <p>Caravelle is open 7 days a week from 10am until late. Serving drinks, snacks, desserts, beverages and exquisite meals with a Mediterranean flare including salads, fish & seafood, pasta, chicken and steak (fillet/rib-eye). We are situated in an area with plenty parking, and the beautiful scenic beach walkway is just beyond the children's playground which is a stone’s throw away. The upstairs bar is perfect for those evening sun-downers too.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/notios.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Notios Restaurant</h2></a>
            <p>Experience the purity of Japanese food combined with sensuous Mediterranean flavours at the al fresco Notios. Our Executive Chef loves experimenting but is equally passionate about simple, honest food. The result: exciting, modern cuisine underpinned with culinary integrity. Notios is open for lunch and dinner from April to November (weather-permitting the rest of the year).</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/bacco.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Ristorante Bacco</h2></a>
            <p>Ristorante Bacco offers guests a complete dining experience: a delicious meal in a warm and intimate setting. Authentic Italian cuisine – with highlights from Tuscany – is captured in a sumptuous menu that includes homemade pasta dishes, tender meat and fish specialties, and the most popular Italian desserts, all based on original recipes and made from fresh ingredients. Allow us to recommend a matching Italian wine or come to the glass-fronted storage cellar to taste and choose a wine for yourself. Whether you prefer a table indoors or in the sunken courtyard outside, sit back and enjoy the unique gastronomic experience that Bacco offers.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/oshin.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>O'Shin Restaurant</h2></a>
            <p>Dignified and yet simplistic, O'Shin's intimate space gives guests the opportunity to explore a selection of refined, pan-Asian gastronomic delights. Fawn-coloured oak wood utilised throughout the eatery lends to its elegant setting, which has been further embellished with oriental-styled latticed partitions, and soft, cherry-hued lighting. Whilst hot dishes – a diverse range of starters and mains – are prepared behind the scenes, the variety of sushi, sashimi, and maki is brought to life at the dedicated sushi counter, establishing an exciting dialogue between diner and chef. In completing their Asian journey, guests can anticipate enjoying a smooth cup of Sake, or savouring the aromas of O'Shin's selection of teas.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/jayanta.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Jayanta Indian Restaurant</h2></a>
            <p>Jayanta Indian Restaurant is located close to the waterfront in Paphos. The restaurant menu includes Indian, Asian and Balinese dishes to suit any taste. If you like spicy ingredients, there is plenty to choose from. If you prefer a more moderate taste, there are many classic dishes like lamb, chicken curry, salads, freshly baked bread and halal options. The wine list includes local and European wines. The restaurant has a colourful interior décor. Some of the tables are located outside. There are high chairs for children.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/mediterraneo.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Mediterraneo Restaurant</h2></a>
            <p>Atmospheric seafront taverna offering local and seasonal specialities inspired by Annabelle’s ‘Food from the Village’ cookbook. Emphasis is placed on unique and homemade produce from the local area and from Cyprus. Fresh flavours and light dishes are designed to be shared with family and friends at the table.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/windmill.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Windmill Restaurant</h2></a>
            <p>The Windmill is a family run restaurant owned from Chris Kathitziotes and his family for more than 30 years. The restaurant offers a large selection of Cypriot and International food. It is also specialised in Meze. Available for wedding receptions and other parties with reasonable prices.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/curryhouse.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Curry House</h2></a>
            <p>Once missing from Paphos, The Curry House is an Authentic Indian Restaurant that offers real, home cooked dishes from India.  All dishes are cooked by authentic Indian chefs and our aim is to prepare dishes exactly how we cook them at home. Every plate achieves contains the freshest ingredients prepared daily and cooked to perfectly to give you that elusive, cuisine-defining balance of sweet, salty and sour, even dessert.</p>
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
