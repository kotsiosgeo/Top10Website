<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Paphos Museums</title>
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
            <h1 class="display-4">Top 10 Museums in Paphos:</h1>
            <p class="lead">These are the top 10 Museums in Paphos according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/stenimuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/134') }}"><h3>The Steni Museum of Village Life</h3></a>
            <p>The Steni Museum of Village Life is a tribute to all the villagers who lived in Steni during the challenging years, from its founding to the end of the Second World War (1800 -1945). Its exhibits include scenes of loom weaving and ploughing, and presentations of tools and equipment, handicrafts, kitchenware, pots and jars and traditional clothing.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/ethnographicmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/135') }}"><h3>Paphos Ethnographic Museum</h3></a>
            <p>This is a vision which became a reality in the summer of 1958 when the founder and archaeologist George S Eliades opened the doors of his museum to the public. The accumulated works on display amounted to a collection which had been gathered over a period of twenty years and during that time George Eliades started to form his dream to create a home in order to house the creations of folk artists.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/agiosgeorgiosmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/136') }}"><h2>Agios Georgios Museum</h2></a>
            <p>The archaeological site of Agios Georgios at the Pafos (Paphos) village of Pegeia is a famous place of pilgrimage for the region. Excavations that began in the 1950’s uncovered significant evidence of an Early Christian settlement. The excavations unearthed three Early Christian Basilicas and a bath from the 6th century, whilst later excavations (in the nineties) revealed an extensive unwalled settlement that occupied the neck and the south slope of the cape in the Roman and early Christian periods. The settlement flourished under Justinian I (527 - 565 AD), and its advantageous position suggests that it was probably a port of call for ships transporting grain from Egypt to Constantinople.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/neldiart.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/137') }}"><h2>Neldi Art Gallery</h2></a>
            <p>Handmade wood creations and jewellery ideal for customization and great gifts made in Cyprus.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/geroskipoumuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/138') }}"><h4>Ethnographic Museum of Geroskipou</h4></a>
            <p>The Local Ethnographic Museum of Geroskipou is housed in a traditional 18th century building known as the ‘House of Hadjismith’, and was founded in 1978.The museum’s large and diverse collection of exhibits originate from all over Cyprus and represent the daily life, crafts, activities and different expressions of Cypriot folk art during the 19th and early 20th centuries. The rural crafts include pottery, scarf making, rug weaving and rope making, as well as the manufacture of silk, for which the island was famous for.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/aliathongallery.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/139') }}"><h2>Aliathon Gallery</h2></a>
            <p>We present to you our beautiful Gallery full of inspirational Art, Original Giftware, Bath & Body and Candles. Prepare to be excited! U: by design. Original artwork inspired by the sea, relaxing and refreshing! bespoke hearts and uplifting words, each piece designed with U in mind. Commissions taken. Give de hooch your thoughts and watch her create your own bespoke gift! Commissions taken! Lou-P-Lou Bath Body & Candles... A lovely range of handmade products using Cyprus olive oil and organic ingredients. Hand creams, body scrubs, soya candles, beautiful olive oil soaps and lots more! Also, a stunning range of crystals - guardian angels, key chains and even pet charms!</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/byzantinemuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/140') }}"><h2>Byzantine Museum</h2></a>
            <p>
              Paphos Byzantine Museum presents an attractive collection of objects from the Byzantine period, including Byzantine icons from the 7th to 18th centuries, including the oldest icon found yet in Cyprus dating to the 7th or 8th century. The extremely interesting Byzantine Museum of Pafos lies within the precincts of the Pafos Bishopric. It houses a great number of Byzantine icons, ranging mainly from the 12th to the 19th century, collected from churches and monasteries of the district of Pafos. These icons express the religious faith of the Pafians during the Byzantine era and inform present day visitors of the high artistic quality of those times. The oldest icon, that of the Virgin Eleousa, from the church of the Monastery of Agios Savvas tis Karonos, dates to about 1200 A.D. and is an exquisite example of Byzantine art.
            </p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/technopolis.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/141') }}"><h3>Technopolis 20 Cultural Centre</h3></a>
            <p>A cultural centre that organises artistic events such as concerts, theatre and dance performances, exhibitions, screenings and much more. Additionally, a coffee shop - bar operates in the venue with a beautiful garden in the city centre.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/paphosmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/142') }}"><h2>Paphos District Museum</h2></a>
            <p>The Pafos District Archaeological Museum houses a collection of finds from the Pafos (Paphos) region dating from the Neolithic Age to 1700 AD. The exhibits are set across five rooms and originate mainly from Palaipafos (Kouklia), Nea Pafos (present¬ day Pafos) and Marion-Arsinoe (Polis). They are supplemented by finds from Pegeia, Kissonerga, Lempa, Pano Arodes, Salamiou, Akourdalia, Pomos, Kidasi and Geroskipou.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/artandshock.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/143') }}"><h2>Art & Shock Gallery</h2></a>
            <p>
              The Art & Shock Gallery opened in Paphos in the summer of 2017. The Art & Shock Gallery is a timeless place, place that is beyond politics and nationalities. On the pictures that are collected in the gallery you can’t see the country where they were created, and it was done on purpose. The pictures come from Kamchatka to France. Here in the Art & Shock Gallery one can see the diverse and various environment that created. Here you could see everything: Georgian feast, Baltic sea-banks and languishing European beauties. And this very contrast and diversity give the gallery its colour and highlight its individuality as well.
            </p>
            <h6>Prices Range: £</h6>
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
