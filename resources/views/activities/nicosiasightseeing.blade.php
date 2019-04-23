<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nicosia Sightseeings</title>
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
            <h1 class="display-4">Top 10 Sightseeings in Nicosia:</h1>
            <p class="lead">These are the top 10 Sightseeings in Nicosia according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/machairasmonastery.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Machairas Monastery</h2></a>
            <p>Located on the slopes of Kionia, in the valley of Machairas mountains, Machairas Monastery is one of the three Royal and Stavropegic of the island and houses the miraculous icon of Panagia (the Virgin Mary) of Machairas, which is attributed to Agios Loukas (Apostle Luke) the Evangelist. According to tradition, an unknown hermit sneaked the icon into Cyprus during the iconoclasm years (between the 8th and 9th century AD) and kept it in his cave until his death. Blessed with the divine grace, the hermits Ignatios and Neophytos around 1145, discovered the cave - which was obscured by bushes - and were able to reach it by cutting down the undergrowth with a knife given to them by divine hand. As a result, the revealed icon was given the name ‘Machairiotissa’ from the Greek word for ‘knife’ - ‘machairi’. The monastery was built on the same spot, also taking the name.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/ledracrossingpoint.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Ledra Street Crossing Point</h2></a>
            <p>The crossing points cuts one of the island’s busiest shopping streets in two. It’s unnatural. It’s a divide that has split the Turkish Cypriot community from the Greek Cypriot community for decades. It divides the city of Nicosia in two, and from here, the border spreads outwards, dividing all of Cyprus in two. For years, all crossings were closed, a few points were opened up in 2003 but it wasn’t until 2008 that Ledra Street was opened, and people were allowed to walk across the border. It always was, and still remains, a hugely symbolic, if also divisive, part of Nicosia, and of Cyprus. To even begin to understand the division between the Republic of Cyprus- the Greek Cypriot side- and the Turkish Republic of Northern Cyprus, any visitor here needs to make the crossing.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/famagustagate.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Famagusta Gate</h2></a>
            <p>Famagusta Gate (Pyli Ammochostou) is the largest of the three entrances into old Lefkosia through the Venetian walls that completely encircled the old city and were designed by famous engineer Giulio Savorgnano in 1567. Originally known as ‘Porta Giuliana’ - the eastern gate of the walls - it was later renamed ‘Famagusta Gate’ as the gate opened onto the road that led to the most important harbour town of the island at the time, that of Famagusta. Famagusta Gate has since been restored and the Nicosia Municipal Multicultural Centre now operates within the large vaulted passage and its two adjacent rooms. The internal entrance is very impressive, whilst the external one opens onto the moat that surrounds the walls.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/venetianwalls.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Venetian walls of Nicosia</h3></a>
            <p>The Venetian walls form a border around the Old City and are so unusual that, once seen on a map, you’ll never forget the odd snowflake-like shape.
              Dating from 1567, the circular defence wall was erected by the Venetian rulers to ward off Ottoman invaders. Unfortunately, it failed. In July 1570 the Ottomans landed in Larnaka and three months later stormed the fortifications, killing some 50,000 inhabitants. The walls have remained in place ever since.
            </p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/medievalwalls.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The Medieval Walls of Nicosia</h2></a>
            <p>The first walls surrounding Lefkosia (Nicosia) in the 14th century were built by the Franks and enclosed a much larger area than the 16th Venetian Walls that still surround the old town. When the Venetians occupied Cyprus, they decided to demolish the Frankish Walls because they were old and did not offer adequate defence against new weapons such as artillery. The Frankish Walls were also too big to be manned by the Venetian army and too close to the hills in the east and southeast of the city. Forming a circle, the walls built by the Venetians were fortified by eleven heart - shaped bastions and protected by an 80 metres wide moat. They were built of mud - brick, with the lower part only buttressed by stone. When the Ottomans occupied Lefkosia (Nicosia), they repaired the walls and covered the upper part with stones. The moat around the walls now has many different uses, serving as sports fields, public gardens, an open - air sculpture exhibition, car parks etc.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/faneromenistemple.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h5>Sacred Temple of Virgin Mary Faneromenis</h5></a>
            <p>The moment you enter the church, you will feel that it has history and you are inspired to pray.
              A time to devote to yourself in the largest church in Nicosia but a recent one built in 1872.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/asinouchurch.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Panagia Asinou Church</h2></a>
            <p>Located on the east bank of a stream, 3km from the mountainous village of Nikitari, Panagia Asinou Church is a small church dedicated to the Virgin of ‘Phorbia’. It is a UNESCO World Heritage Site and contains some of the finest Byzantine wall paintings on the island, dating from the 12th to the 17th century. The church used to be a monastery church that was built in 1099 with the donation of Magistros Nikephoros Ischyrios, who subsequently became a monk with the name Nikolaos. It functioned until the end of the 18th century, when it was abandoned.The church consists of two parts - the vaulted single-aisled nave and the narthex - which is a later addition belonging to the second half of the 12th century. The 12th century steep-pitched timber roof, covered with flat tiles, sheltered the church. Today, there are no traces of the rest of the monastic buildings.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/libertymonument.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h4>Liberty Monument</h4></a>
            <p>The Liberty Monument is on the Podocatro Bastion of the city walls, close to the old aqueduct and a couple of minutes’ walk from the Famagusta Gate.It was erected in 1973 to commemorate the release from prison in 1959 of EOKA fighters. It shows a statue of liberty overseeing two EOKA heroes tugging on chains in order to open prison gates and release Greek Cypriot prisoners, peasants and clergy, from British colonial rule.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/makariosmonument.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h4>Archbishop Makarios III Monument</h4></a>
            <p>The monument dedicated to the first president of Cyprus, Archbishop Makarios III, located in Nicosia and surrounded by a stunning view of the mountains. At nightfall the lights are quite a sight to watch. </p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/nicosia/archbishopspalace.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Archbishop’s Palace</h2></a>
            <p>A religious, national and political monument, the Old Archbishop’s Palace is an 18th century two - storey building in the heart of Lefkosia (Nicosia) that is closely associated with modern Cypriot history. Next to it is the new Archbishop’s Palace, a two - storey stone building in Neo - Byzantine style housing the offices of the archdiocese and the residence of the archbishop. It was built by Archbishop Makarios III between 1956 and 1960 and also houses the Byzantine Museum and the Library of the Archbishopric. Since the completion of the new Archbishopric, the Old Archbishop’s Palace has housed the Folk-Art Museum and the National Struggle Museum.</p>
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
