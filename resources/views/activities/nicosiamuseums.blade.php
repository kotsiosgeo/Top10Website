<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nicosia Museums</title>
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
            <h1 class="display-4">Top 10 Museums in Nicosia:</h1>
            <p class="lead">These are the top 10 Museums in Nicosia according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/leventismuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/94') }}"><h4>Leventis Municipal Museum of Nicosia</h4></a>
            <p>The Leventis Municipal Museum of Nicosia presents the history and social development of the city of Nicosia from the Chalcolithic period (3000BC) to the present day. The museum was founded in 1984 after the initiative of the Mayor of Nicosia, Mr Lellos Demetriades. The museum is named after its donor Anastasios G. Leventis Foundation which bought and restored the building and its administered by the Municipality of Nicosia. In 1985, the Association of the Friends of the Museum was established. Its main objective is to assist in enriching the museum's collections.</p>
            <h6>Prices Range: £20</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/nicosiamuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/95') }}"><h2>Cyprus Museum</h2></a>
            <p>The Cyprus Museum is the island’s main and largest archaeological museum and charts the development of Cyprus’ civilisation from the Neolithic Age to the Early Byzantine period (7th century). The museum’s collections are comprised of finds from extensive excavations from all over the island that have helped the development of Cyprus’ archaeology, as well as its research into the cultural heritage of the Mediterranean. The collections consist of pottery, jewellery, sculpture, coins, copper objects, and other artefacts, all exhibited in chronological order in the various museum galleries. Pieces typical of Cypriot culture - and of particularly important artistic, archaeological and historical value - include the cross-shaped idol of the Chalcolithic period, Early Bronze Age pottery from Vouni, Late Bronze Age golden jewellery from Egkomi, and the 1st century BC statue of Aphrodite of Soloi.</p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/shacolastower.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/96') }}"><h4>Shacolas Tower Museum & Observatory</h4></a>
            <p>This museum combines a modern museum with an unhindered and beautiful view of the entire city. It can be found on the 11th floor of the Shacolas Tower. The exhibition - a cooperation with the Leventis Museum of Nicosia and the Woolworth Group - shows photographs and descriptions of Old Nicosia, a multilingual taped history and telescopes. </p>
            <h6>Prices Range: £10</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/cvar.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/97') }}"><h3>Centre of Visual Arts and Research</h3></a>
            <p>
              The Centre of Visual Arts and Research (CVAR), located on Ermou Street in the heart of the walled city of Nicosia, opened in 2014. CVAR is home to the Costas & Rita Severis collections, which include paintings, antique costumes and memorabilia related to Cyprus and its neighbours. CVAR also houses a library and research centre with over 5,000 volumes available to scholars and casual readers alike. In its cafe, restaurant and roof terrace, CVAR hosts workshops, seminars, screens films, slide shows and a wide range of activities supported by the Foundation and its partners to promote understanding and peaceful coexistence.
            </p>
            <h6>Prices Range: £12</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/folkartmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/98') }}"><h2>Cyprus Folk Art Museum</h2></a>
            <p> The Cyprus Folk Art Museum was founded by a few keen members of the Society of Cypriot Studies in 1937 and is housed in the premises of the old Archbishopric Palace. In 1961 the seat of the Archbishop of Cyprus was moved to the new palace. The Society then approached the Archbishop who graciously handed over the whole of the premises of the Old Archbishopric to the Society, to be used for its activities. It was at that time from 1962 to 1964 that extensive reconstruction of the building was carried out, at the very great expense of the Society with the help of His Beatitude Makarios III (Diamantis, 1973, 1).</p>
            <h6>Prices Range: £8</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/nationalstruggle.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/99') }}"><h3>The National Struggle Museum</h3></a>
            <p>The museum is located in the square near the Archbishopric.The museum display documents, photographic material, personal belongings of the heroes and other memorabilia related to the struggle against British Rule. The museum was founded after the end of the 1955-1959 National Liberation Struggled, by EOKA fighter Christodoulos Papachrysostomou. Specially designed new premises opened in 2001. The expenses were covered by the Holy Archebiscopic of Cyprus and the Cyprus Ministry of education and Culture.</p>
            <h6>Prices Range: £11</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/motorcyclemuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/100') }}"><h4>Cyprus Classic Motorcycle Museum</h4></a>
            <p>The Classic Motorcycle Museum was created by motorcycle collector Andreas Nicolaou and is the culmination of a 20-year labour of love. Today, the collection comprises more than 150 pieces, with motorcycles dated between 1914 - 1983, including AJS, MV Agusta, Matchless, Norton, BSA, Triumph, Ariel, BMW, James, Moto Guzzi, Royal Enfield and many more. The museum also houses three police bikes that formed part of Archbishop Makarios III’s police escort, a motorcycle belonging to EOKA fighter Stylianos Lenas, and one belonging to the island’s first motorcycle champion - Turkish Cypriot Zeki Isa - along with a photography exhibition.</p>
            <h6>Prices Range: £14</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/agleventis.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/101') }}"><h3>A. G. Leventis Gallery</h3></a>
            <p>The A. G. Leventis Gallery represents the fulfillment of a vision. It is the embodiment of Anastasios G. Leventis’ wish to create, in his homeland, a public gallery in which the extensive art collection acquired during his lifetime can be enjoyed by his fellow countrymen, women and children. Conceived in its essence over fifty years ago, this vision is realized today by the A. G. Leventis Foundation which is proud to present, for the first time under one roof, highlights of over 400 years of European art and history: from paintings, watercolours, prints and drawings to objets d’ art and period furniture. The original collection comprises three units: the Paris Collection, representing significant European artists from the 17th to the 20th century; the Greek Collection, with artists from the 19th and 20th centuries; and the Cyprus Collection, with the first generation of Cypriot artists, born between 1884 and 1930.</p>
            <h6>Prices Range: £15</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/postalmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/102') }}"><h2>Postal Museum</h2></a>
            <p>The Postal Museum is located in Nicosia «within the walls» and housed on the ground floor of an old two-storey mansion near the Laiki Yitonia area and close to the historical churches of Trypiotis and Agios Savvas. The Museum was founded in 1981 to house the rich and diverse material of the Cyprus Post related to the long postal history of the island, starting from the 15th century, during the Venetian period, when postal communications from and to Cyprus were organized for the first time. The halls of the Museum exhibit chronologically the postage stamps and rich philatelic material concerning the postal history of Cyprus. The main hall houses material related to the period of the British Rule in Cyprus. Here you can admire, for example, the oldest series of Cypriot stamps with the portrait of Queen Victoria of England which are overprinted with the word CYPRUS, as well as the first beautiful purely Cypriot series of 1928 depicting historic sites and figures related to the centuries-long history of Cyprus.</p>
            <h6>Prices Range: £20</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/pancyprianmuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/103') }}"><h4>The Pancyprian Gymnasium Museums</h4></a>
            <p>The Museums of The Pancyprian Gymnasium, the oldest secondary school of Cyprus, are being housed in the historical centre of Lefkosia (Nicosia), in a fascinating 12-room space. Apart from the Museum of the history of the school, the Museums of The Pancyprian Gymnasium comprise of the archaeological and the monetary collection, the old map and the old weaponry collection, most of which have a Cypriot character. There is also a gallery with the work of great painters who served as teachers and students of the school, a Museum for natural history and other exhibits. The collection is completed with a unique sample of gothic sculpture from Cyprus which is impressive by its size and its artistic technique.</p>
            <h6>Prices Range: £7</h6>
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
