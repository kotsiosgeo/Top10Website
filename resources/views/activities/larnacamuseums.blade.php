<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Larnaca Museums</title>
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
            <h1 class="display-4">Top 10 Museums in Larnaca:</h1>
            <p class="lead">These are the top 10 Museums in Larnaca according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/larnacacastle.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/details') }}" id="label1"><h2>Larnaca Medieval Castle</h2></a>
            <p>Located at the end of the Foinikoudes promenade, the Medieval Castle of Larnaka (also referred to as Larnaka Fort) is believed to have been originally built during the Middle Ages, and took its present form during Ottoman rule, although there is some contestation regarding its origins. Chronographer Florius Boustronius dates it to the years of Lusignan King James I (1382-1398AD), who built it to protect the harbour of the town. During the same time, the Genovese occupied Famagusta and the Lusignans had to develop another major port for the needs of their kingdom. 18th century sources insist that the castle was built by the Turks in 1625AD, even though a Turkish garrison was stationed there since 1570AD. Other references by travellers confirm that the castle was constructed before 1625.</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/gift.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Every Day is a Gift</h2></a>
            <p>Every day is a gift is a family business shop in the heart of Larnaka 20 meters from Saint Lazaros church. You can find excellent prices for handmade Greek, Cyprus jewellery from 5 euro to max 35 euro (Silver unique designs). The owners are friendly always with a smile on the face. Visit is a must!</p>
            <h6>Prices Range: £5</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/pieridesmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Pierides Museum</h2></a>
            <p>The Archaeological Collection of the Pierides Museum - Bank of Cyprus Cultural Foundation is considered as one of the most important collections of Cyprus. The collection was initiated by the enlightened Demetrios Pierides in the 19th century and has been systematically enriched. The Pierides Museum is conveniently located in the commercial centre of the city of Larnaka, parallel to the sea front. It can be characterized as one of the most important private museums of Cyprus, since the collection contains a significant and characteristic presentation of the civilization of Cyprus through the centuries.</p>
            <h6>Prices Range: £5</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/kyriazismuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Kyriazis Medical Museum</h3></a>
            <p>This is one of the few museums in the world where the visitor can touch and explore old medical instruments without restrictions. The visitor can experience how medicine was practiced in the old times, and also explore magic, incantations, medical words and many other aspects of medicine. We also have a 'Health Hangout' where we serve health drinks and herbal teas in a relaxing and interesting atmosphere.</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/larnacaartgallery.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Larnaca Municipal Art Gallery</h2></a>
            <p>Housed in one of the old 1881 Colonial buildings on Europe Square (at the start of the Foinikoudes promenade), the Municipal Art Gallery regularly hosts thematic exhibitions featuring a wide range of artists from the island, as well as abroad. Exhibitions are displayed across four interconnecting halls and often include sculptures and modern constructions alongside paintings. The gallery's permanent collections of paintings consist of pieces by Cypriot and other artists, representative of contemporary artistic talent on the island.</p>
            <h6>Prices Range: Free</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/kallinikeio.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h4>Kallinikeio Municipal Museum Athienou</h4></a>
            <p>The Kallinikeio Municipal Museum of Athienou is housed in the Kallinikeio Municipal Hall and exhibits collections that showcase aspects of the history of the area from the Late Bronze Age (1600-1050 BC) until today. The Museum consists of the Archaeological Collection, the Collection of Ecclesiastical Art and the Ethnographic Collection. The Collection of Ecclesiastical Art includes priceless icons painted by the monk Kallinikos Stavrovouniotis and other icons from his personal collection. The monk was an excellent icon painter and a great benefactor to Athienou, and thus the museum is named in his honour. In the Icon Painting and Mosaic Workshop, icons and mosaics by the brothers George and Alkis Kepola are on display.</p>
            <h6>Prices Range: £2</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/larnacamuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h4>Larnaka District Archaeological Museum</h4></a>
            <p>Larnaka District Archaeological Museum houses a large collection of archaeological finds from the whole district of Larnaka, including the ancient city-kingdom of Kition, and the main Neolithic settlements of Choirokitia and Tenta - Kalavasos. Exhibits include artefacts from the Neolithic period, the Copper Era and the Archaic, Classical, Hellenistic and Roman periods. Faience (tin-glazed pottery), ivory and alabaster pieces showcase Cyprus’ commercial and international ties with different countries during antiquity. Aside from the large collection of local exhibits, the museum also displays some unique items of Egyptian, Mycenaean, Phoenician, Assyrian and Persian origin that were found in the region of Larnaka but may have been imported from the other great civilizations of antiquity close to the island.</p>
            <h6>Prices Range: £3</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/platini.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The House of Platini</h2></a>
            <p>The museum is dedicated to the French former soccer great and former UEFA president Michel Platini. A huge collection of sporting exhibits: 40. 669 items. Two entries in Guinness World Records. Michel Platini has visited the museum twice. 182 items signed by him. Centrepiece: the official UEFA suit Platini wore as president (gift by him). The museum doubles as a kebab tavern in the evening.</p>
            <h6>Prices Range: £5</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/municipalmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h4>Municipal Museum of Natural History</h4></a>
            <p>Located within the grounds of the Municipal Gardens and its park, Larnaka’s quaint Municipal Museum of Natural History displays a number of thematic collections, including local reptiles, insects, birds, animals, marine life, fossils and rock formations. The marine life collection is comprised of international and local shells, corals, sponges and sea creatures, whilst a ‘traditional Cypriot yard’ includes the Cyprus donkey. Another notable collection is that of the island’s insects and endemic plants.</p>
            <h6>Prices Range: £1</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/saltandpepper.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The Salt & Pepper Museum</h2></a>
            <p>The Salt and Pepper Museum of Larnaka is the latest museum of its kind to open following the success of the flagship museum in Israel, which exhibits the largest collection of salt and pepper shakers in the world, with over 37,000 unique shakers, which all come with their own story. The Larnaka museum exhibits over 20,000 different shakers, and also has a cafe. The exhibition is from a private collection with all proceeds donated to carefully selected philanthropic social causes. </p>
            <h6>Prices Range: £5</h6>
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
