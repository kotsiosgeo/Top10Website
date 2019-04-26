<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Larnaca Restaurants</title>
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
            <h1 class="display-4">Top 10 Restaurants in Larnaca:</h1>
            <p class="lead">These are the top 10 Restaurants in Larnaca according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/tokazani.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>To Kazani Traditional Tavern</h2></a>
            <p>Our specially selected Cypriot mezes combined with our excellent traditional surroundings will lead you to a unique journey through time gone by. There is a story behind the name... 'ΤO KAZANI'(caldron)... It all started at the end of 19th century in this Historical House with the procedure of distilling Zivania which lasted until the mid of 20th century. During the building of the structure has been found this Historical Caldron with the rest of the tools and with much care we have assembled and till now saving it with care.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/nippon.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Nippon</h2></a>
            <p>Situated opposite the old GSZ football stadium, Nippon is in a central location but not right in the centre of town. The fact that it has been running for so many years in a part of town that people do not just happen to be passing by is a positive indication that they are doing something right. With its purple lighting visible from a fair distance, it is hard to miss. The first impression of walking in is one of class, with sleek modern furniture, nice colour coordination of the interior and an inviting, spacious area.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/redpepper.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Red Pepper</h2></a>
            <p>Red Pepper is A fresh style restaurant for Larnaca. Located in Drosia behind Alpha Bank. We offer a warm welcome & relaxing atmosphere, serving modern European cuisine that will amaze you with flair, value and passion. Our menus are changed daily; created and prepared by Chef owner Dean Simmons. Dean is proud to use local suppliers and strongly believes in seasonal food that is seen throughout.</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/campanario.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Campanario Restaurant</h2></a>
            <p>The Campanario Restaurant is situated in the heart of downtown Larnaca. Our premises consist of a traditional Cypriot villa, sympathetically renovated and featuring a beautiful courtyard garden area, perfect for al-fresco summer dining under the stars. Providing a delightful ambience and a welcoming atmosphere, we offer a wide menu of dishes, complimented by our extensive wine list. The perfect place to enjoy great food and drink in a relaxing but yet vibrant atmosphere.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/maqam.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Maqam Al Sultan</h2></a>
            <p>Maqam Al-Sultan represents a culture. Lebanese cuisine epitomizes the best of the Mediterranean diet. The heart-healthy ingredients such as fresh vegetables, grains, herbs and spices, lamb, beef, fish, poultry, yogurt and olive oil make a meal replete with robust earthy flavours. At Maqam Al-Sultan we immensely love, enjoy, respect and appreciate our food. Our Lebanese chefs cook the way mama cooks at home. When you fancy a real meal, fine wine, a cup of coffee or tea, to smoke shisha or when you're in the mood to entertain yourself, your friends and loved ones, welcome to Maqam Al-Sultan!</p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/enigma.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Enigma Restaurant</h2></a>
            <p>It has often been said that a true fine dining experience represents a work of art; from the skill of creativity and execution of technique, to the quality of ingredients used and precision of presentation. At The Enigma restaurant we have made it our philosophy and passion to master the art of perfection in every single dish we create. Delighting our guests is a primary purpose of what we do. We feel privileged to share our passion for exquisite dining with those choosing to visit us. The art of fine dining is beyond a term at The Enigma Restaurant, it is a complete dining experience.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/stoanokato.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Stoano Kato</h2></a>
            <p>Sto Ano Kato has an international vibe but a good blend of local customers too. This is likely due to the good relationship they have with the neighbouring Art and Wine Studios and apartments who have entrusted Sto Ano Kato with providing breakfast for their guests. The interior has a warm feeling. The lighting is dim, but the place is perfectly lit by the Christmas lights and the indoor heaters. </p>
            <h6>Prices Range: ££ - £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/joydowntown.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Joy Downtown</h2></a>
            <p>Joy Downtown is the brand-new entry in Larnaka’s much talked about Q City Centre arcade. This very promising hot new spot takes the form of an all-day bar-restaurant which opens its doors from morning until late at night to give its customers the best company the city has to offer throughout the day. There you can enjoy your coffee early on in the day, or an elegant meal for either lunch or dinner, or even a drink on a night out, accompanied by the best beats in town. The team behind Joy Downtown has managed to create something very special in the heart of the city by merging the relaxed tones that an all-day venue ought to embody with a sophisticated atmosphere. Its baroque, gothic vibes transport you in another era, but it is also what conveys elegance to the space.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/pizzerianapoletana.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Pizzeria Napoletana 485</h2></a>
            <p>At Pizzeria 485° Napoletana, pizza dough reminds of delicious, crusty homemade bread, made from wisely picked ingredients.  Neapolitan pizza is not to be compared to any other pizza, since it follows a long tradition of 1,300 years. Restaurant’s name reflects the whole procedure of pizza baking in a traditional wood oven, at a temperature of 485 ° C. Pizzeria’s menu is consisted of 10 amazing pizzas. Salamara caught our attention with its bright, salty-sweet tomato sauce, mozzarella, parmesan, chilly and Napoli smoked salami and peppery basil.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/marestaurant.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Ma Japanese Peruvian Restaurant</h3></a>
            <p>In the Japanese language, "ma" means the space between two worlds. Two grandiose words of gastronomy, the historic Japanese and the renowned Peruvian, come together to form one unique experience.</p>
            <h6>Prices Range: ££££</h6>
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
