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
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/motormuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h4>Cyprus Historic & Classic Motor Museum</h4></a>
            <p>Located in Limassol in a spacious 3000 square meters, you will admire Classic, Historic and Collectible Cars. The "Cyprus Historic and Classic Motor Museum" is a remarkable home for classic cars with highlights of their historical and emotional value. Visitors can admire the museum's eclectic collection of cars covering the period of the last century. The museum highlights the cultural importance of the development and growth of the automobile industry. The oldest car in the collection at the moment is a Ford "T" roadster from 1912, which currently has 102 years of life on the road. The newest vehicle is a collectible piece from 2004. Each visitor can enjoy a different yet memorable experience learning the progress of the vehicles through the passage of time. The founding of the museum is due to the vision of veteran Rally Racing champion of International and Cypriot rally competitions, Mr. Dimi Mavropoulos.</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/limassolcastle.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Limassol Castle</h2></a>
            <p>Limassol castle dates back to the Medieval Period and is located at the centre of the historical Limassol vert close to the Limassol Harbour. The castle was built during the Ottoman rule in the island but archaeological evidence suggest that before its current form there were earlier architectural faces, older and larger. In addition, archaeological studies and investigations on the interior space of the castle revealed that it was built over an Early Christian basilica (4th-7th A.D) and a Middle Byzantine monument (10th-11th century A.D.). Other archaeological findings suggest the existence of an important church possibly the city's first cathedral. The first phase of the castle was built in 1193 by Guy de Lusignian.</p>
            <h6>Prices Range: £16</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/carobmill.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Carob Mill Museum</h2></a>
            <p>Carob Mill Museum is located in Limassol City Centre near the Medieval Museum. The Carob Mill was built at the beginning of the 20th century, a time when carobs were one of the main products that Cyprus used to export. Carobs had many uses, including the manufacture of film, medicine, chocolates and other sweets. The machinery used in the mill for the process of the carobs is exhibited in a renovated building which combines tradition with modern.</p>
            <h6>Prices Range: £15</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/limassolarchaeologicalmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Limassol Archaeological Museum</h3></a>
            <p>The Lemesos (Limassol) District Archaeological Museum houses a rich and notable collection of antiquities from the Neolithic age to the Roman period, originating from excavations at various archaeological sites in the Limassol region. The exhibits are housed in three rooms and are divided into three main categories. The first room contains pottery from different historical periods; the middle room exhibits coins, jewellery, lamps and a variety of copper tools and objects, whilst the third presents sculptures, tombstones, capitals, inscriptions and other marble and limestone artefacts. A variety of objects related to the cult of Aphrodite - such as fertility and other votive offerings and female terracotta figurines – are also included in the exhibits.</p>
            <h6>Prices Range: £15</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/ploumistopsomi.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Ploumisto Psomi Museum</h2></a>
            <p>Bread Museum is located very near the city centre, and impresses the technique, artistry and imagination in designs and shapes. How plain bread can become a work of art. Familiarise yourself with one of the cornerstones of Cyprus culture and tradition. Experience the role and importance of bread in the local society. Hundreds of examples of ritual, festive and ornamental breads.</p>
            <h6>Prices Range: £15</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/katiesabry.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Katie Sabry Studio</h2></a>
            <p>I'm a local artist, having lived and worked in Limassol since 1987. My home gallery and mosaic workshop, featuring my original paintings in watercolours, pastels and oils, as well as cards and mosaics for sale. I have many small paintings and mosaics which make lovely gifts. Most of my watercolours are painted on site in Cyprus. My bigger works are painted here at my studio. The building is a 100-year-old traditional courtyard house, fully renovated with a charming courtyard garden. I offer short- or full-day mosaic workshops. Painting and drawing classes also available. Accommodation for visiting artists by request. If you'd like to visit outside the advertised opening hours, please feel free to contact me, I love showing people around, sharing my creations and beautiful garden!</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/watermuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Water Museum</h2></a>
            <p>The building of the Water Museum consists of the old Lemesos (Limassol) Water Pumping Station (the ‘Water Machine’) that was built in 1925 and is located next to the offices of Limassol Water Board. Included in the Protected Historic Buildings List of the Cyprus Department of Town Planning and Housing, the Water Pumping Station was used to pump significant quantities of water from the Garyllis Delta aquifer. The water was then transferred through water pipes to the Limassol Water Tower from where it was distributed to the town of Limassol. It was a pioneering water distribution system not only for Cyprus, but also for the whole geographical region around the island.</p>
            <h6>Prices Range: £18</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/limassolartgallery.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Limassol Municipal Art Gallery</h3></a>
            <p>The Limassol Public Gallery presents one of the largest and richest art collections of Cypriot Modern Art. It includes significant works of art concerning the history of art in our country, such as Adamantios Korais, Michael Kassialos, Tilemahos Kanthos, Christophoros Savva, Victor Ioannides, Loukia Nikolaidou, Takis Fragoudes, Vasilis Vrionides, Nikos Nikolaides, John Corpige, Andrea Ladommatos, Stas Paraschos, Stella Michaelidou, Antros Efstathiou, Spiros Dimitriades and others. These works are displayed in the old building, whereas the new ground halls of the Gallery host representative samples of new Cypriot artists. They cover both the old naturalistic trends and the modern views on painting. On the first-floor halls there is the Marios Vasiliades collection and in the basement the National Liberation Revolution tribute collection, which belongs to the Historical Remembrance Council.</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/nocturnegallery.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Nocturne Gallery</h2></a>
            <p>This is the physical gallery and working studio of Neo-Gothic artist Paul Timms. It is the only gallery in this part of the world that specializes in Neo-Gothic, Fantastic Art, and similar works; representing exclusively some of the finest creative talents in contemporary art, including Alex Welch (metalwork), Ivan Dencic (wirework) and Maria Neophytou (collage).</p>
            <h6>Prices Range: £12</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/limassol/limassoltheatermuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Cyprus Theater Museum</h2></a>
            <p>The Cyprus Theatre Museum is located in the Panos Solomonides Cultural Centre and opened its doors in 2012. The museum is divided into thematic sections that consist of: ‘The History’ (a journey through the major stages of theatre activity on the island); ‘The Contributors’ (exhibits related to the basic stages of theatre production), and ‘The Performance’ (showcasing costumes from significant and emblematic performances of the island’s theatre history). Printed material, costumes, scale models, props, set and costume designs, as well as photographs and posters constitute the exhibits of the permanent collection of the museum, giving visitors the opportunity to take a virtual tour in the island’s history of theatre.</p>
            <h6>Prices Range: £20</h6>
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
