<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Limassol Sightseeings</title>
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
            <h1 class="display-4">Top 10 Sightseeings in Limassol:</h1>
            <p class="lead">These are the top 10 Sightseeings in Limassol according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/kourion.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Kourion</h2></a>
            <p>The archaeological remains of Kourion - which was one of the island’s most important city-kingdoms in antiquity - are of the most impressive on the island, and excavations have unearthed many significant finds, which can be viewed at the site. The city-kingdom was built on the hills of the area and overlooked and controlled the fertile valley of the river Kouris. According to archaeological finds, evidence suggests that Kourion was associated with the Greek legend of Argos of Peloponnese, and that its inhabitants believed they were descendants of Argean immigrants. The once-flourishing kingdom was eventually destroyed in a severe earthquake in 365 AD.</p>
            <h6>Prices Range: £20</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/omodos.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Omodos Village</h2></a>
            <p>The historic village of Omodos is located only 42 kilometers away from the city of Limassol and “is the centre of the wine-villages" of Limassol District.</p>
            <h6>Prices Range: £17</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/limassolmarina.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Limassol Marina</h2></a>
            <p>Limassol Marina combines elegant residences and a full-service marina with an enticing mix of restaurants and shops. Located in the heart of a vibrant city, the marina development offers luxury apartments and exclusive villas with their own private berths or direct access to the beach. Its highly desired Cyprus property, an outstanding collection of stylish homes, provide a unique retreat complete with a spa and fitness club, leisure and cultural facilities. Limassol Marina can accommodate 650 yachts from 8m to 110m with a team of experienced professionals to ensure the smooth running of all operations.</p>
            <h6>Prices Range: £27</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/fasouri.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Fasouri Watermania Water Park</h3></a>
            <p>The largest waterpark in Cyprus with 30 different attractions for all ages. Three different restaurants to choose from, Sweet Land Kiosk, Aloha Cocktail Bar, Cinnabon Kiosk, Costa Coffee and Mini Donut Kiosk. 750 free parking space and over 2000 sun beds. Lockers also available at a charge. Additional services such as photo shop, fish spa, massage. A staff of more than 100 people work continuously to provide the best service to our visitors. Winner of many awards!</p>
            <h6>Prices Range: £27</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/limassolpromenade.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Limassol Promenade</h2></a>
            <p>The Promenade in Limassol is hugely popular with holidaymakers for its view of the sea, the sandy beaches, and the palm-coated surroundings, with the backdrop of its long and close proximity sea shore and various water parks, creates a wonderful atmosphere for adults and children of all ages. The busy streets flanking this seaside route have a unique appeal of its own; it’s packed with restaurants, cafes, English style pubs, vibrant nightclubs, and a wide range of shops selling almost everything including souvenirs and traditional sweets and delicacies. Mingling with the warm and friendly locals adds to the experience and enhances the well-being factor. Spending enjoyable hours in the boulevard is a gratifying joy, so take a stroll alongside the beach and allow yourself to delight in the agreeable ambience.</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/kaledonia.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Caledonia Waterfalls (Kalidonia)</h3></a>
            <p>Caledonia Waterfalls is one of the highest waterfalls in Cyprus. It is located on Platres village in Troodos and the water falls from the height of 12 meters. It can be reached via a walking path. Caledonia Waterfall is surrounded by forest in a very beautiful area with breath-taking views. The trail is 3km long and can last up to 2 hours. It can also be divided into two parts, the first one which is the higher one that leads to the waterfalls and the second one which leads from the waterfall to Platres.</p>
            <h6>Prices Range: £39</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/kourionbeach.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Kourion Beach</h2></a>
            <p>Kourion Beach is outside Limassol in the area called Kourion. The Kourion is an area which had a deep history form the ancient Greek and Roman ages. In addition, the Kourion area is well known for the Kourion Amphitheatre. The beach is very nice however the sea is a bit rough as it is open sea, but it is considered as a lovely beach of a grey sand and small pebbles, with waves soaking the sand which makes it perfect for windsurfers!</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/motormuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h4>Cyprus Historic & Classic Motor Museum</h4></a>
            <p>Located in Limassol in a spacious 3000 square meters, you will admire Classic, Historic and Collectible Cars. The "Cyprus Historic and Classic Motor Museum" is a remarkable home for classic cars with highlights of their historical and emotional value. Visitors can admire the museum's eclectic collection of cars covering the period of the last century. The museum highlights the cultural importance of the development and growth of the automobile industry. The oldest car in the collection at the moment is a Ford "T" roadster from 1912, which currently has 102 years of life on the road. The newest vehicle is a collectible piece from 2004. Each visitor can enjoy a different yet memorable experience learning the progress of the vehicles through the passage of time. The founding of the museum is due to the vision of veteran Rally Racing champion of International and Cypriot rally competitions, Mr. Dimi Mavropoulos.</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/limassolzoo.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Limassol Zoo</h2></a>
            <p>After two years of hard work, the revamped Limassol Zoo was inaugurated in 2012. The zoo is one of the biggest in Europe and hosts beautiful and interesting animals, equally attractive to the public. Specially designed natural-looking habitats were created for all types of animals residing at the zoo. All species are well taken care of and are given the required attention and love, as well as proper nutrition. Guests can enjoy their stroll and grab the opportunity to take a close look at the animals in a pleasant environment, since all safety regulations are observed.</p>
            <h6>Prices Range: £15</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/apollosanctuary.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The Sanctuary of Apollo</h2></a>
            <p>Apollon Hylates, God of the Woodland, was the protector of Kourion and it is believed that he was worshipped at the site from the 8th century BC to the 4th century AD. His sanctuary was an important religious centre and underwent many extensions and alterations in different periods. Originally, the site consisted of a temple (traces of which survive in the foundations of the present temple), a circular monument, and a formalized Archaic Altar and Precinct. During the Roman period the site was extended with the addition of the south and north buildings, which may have been used for the display of votives or the accommodation of visitors. Terracotta figurines and pottery that were accumulated in the temple from the 5th century BC to the Roman period were buried in the votive pit.</p>
            <h6>Prices Range: £30</h6>
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
