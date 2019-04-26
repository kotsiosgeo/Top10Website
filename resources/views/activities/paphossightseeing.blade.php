<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Paphos Sightseeings</title>
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
            <h1 class="display-4">Top 10 Sightseeings in Paphos:</h1>
            <p class="lead">These are the top 10 Sightseeings in Paphos according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/katopaphos.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h3>Kato Paphos Archaeological Park</h3></a>
            <p>The Archaeological Park of Kato Pafos (Paphos) is one of the most important archaeological sites of Cyprus and has been included in the UNESCO World Heritage Sites list since 1980. Nicocles, the last King of Palaipafos moved the city from the previous location to its present location near the harbour at the end of the 4th century BC. Between the 2nd century BC and 4th century AD, Pafos was the capital city of Cyprus. The Park includes sites and monuments from the 4th century BC to the Middle Ages, while most remains date to the Roman period. The intricate mosaic floors of four Roman villas (the houses of Dionysos, Theseus, Aion and Orpheus) form the impressive epicentre of the finds and depict various scenes from Greek Mythology.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/paphosport.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Paphos Harbour and Port</h2></a>
            <p>The Paphos Harbour and Port is one of the most ancient ports in Cyprus, with its archaeological park right next to the port. The Paphos Lighthouse is also located in the Paphos archaeological park at a short distance from the port. By walking around the port along the breakwater after the historical castle one may easily see the remains of the ancient breakwater. The port area is the same as the area in which King Nikoklis built the first port project a little after the death of Alexander the Great.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/aphroditesrock.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h4>Aphrodite's Rock Brewing Company</h4></a>
            <p>Our tasteful family-run Microbrewery & Brewpub is set in a lovingly restored former old winery with its picturesque stone courtyard & stunning countryside location. Just 15 minutes from Paphos, you will enjoy a fantastic day out that is suitable both for families & all kinds of groups, including wedding parties. We have a bar serving our in house produced beers, lagers & ciders, plus local wines & a full range of soft drinks. Enjoy a great meal from our menu of simple but very high-quality restaurant items or hand-stretched sourdough pizzas.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/tombs.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Tombs of the Kings</h2></a>
            <p>The famous ‘Tombs of the Kings’ form part of the Archaeological Park of Kato Pafos (Paphos) - one of the most important archaeological sites of Cyprus that has been included in the UNESCO World Heritage Sites list since 1980. The monumental underground tombs are carved out of solid rock and date back to the Hellenistic and Roman periods. Rather than kings, it is actually high-ranking officials and aristocracy that were buried here, but the size and splendour of the tombs – some decorated with Doric pillars - gave the locality its grand name. Some of the tombs imitate the houses of the living, with the burial chambers opening onto a peristyle atrium. They are similar to tombs found in Alexandria, demonstrating the close relations between the two cities during the Hellenistic period.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/agiosneophytos.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Agios Neophytos Monastery</h2></a>
            <p>Located about 9km north of Pafos (Paphos), the ecclesiastical museum at the monastery of Agios Neophytos exhibits a variety of valuable relics, including important icons and other religious artefacts. The monastery itself was founded by the Cypriot recluse and writer Neofytos around 1200, in what used to be a secluded location at the head of the picturesque valley. The hermit carved a cave out of the mountains called the ‘Enkleistra’, which is covered with some of the finest examples of Byzantine frescoes that date back from the 12th to the 15th centuries, whilst the later church also contains some of the finest Post-Byzantine icons dating to the 16th century.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/horseriding.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h5>Horse Riding Paphos-Eagle Mountain Ranch</h5></a>
            <p>We have a beautiful range of ponies and horses to suit all requirements at Eagle Mountain Ranch so that you can enjoy Horse Riding Paphos, Eagle Mountain Ranch, Paphos, Cyprus is based just 10mins distance from the main town of Paphos in the quiet countryside area of Mesogi, Paphos Cyprus. It is an excellent horseback trekking area.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/avakasgorge.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Avakas Gorge</h2></a>
            <p>This dramatic canyon, a favourite of hikers and other outdoor enthusiasts, is characterized by beautiful rock formations, wildlife and rare plants.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/dionysushouse.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>The House of Dionysus</h2></a>
            <p>The House of Dionysus is located in the Paphos Archaeological Park in the Paphos disrict.It is a luxury building of the Roman period which belongs to the Hellenistic type of house, where the room develop around a courtyard which was the centre of the building. It seems to have been built at the end of the 2th century A.C and was destroyed with the earthquakes in the beginning of the 4th century. From the 2000 square metres of the building, one fourth of it is decorated with floor mosaics which show themes of mythology, vintage, hunting etc. At the entrance of the house there is a floor made of sea shells which shows the mythical sea monster Skyla, and belongs to an earlier Hellenistic building.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/paphoswaterpark.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Paphos Aphrodite Waterpark</h2></a>
            <p>Featuring various attractions made up of thrill water rides and games aimed at families of all ages and sizes, Paphos Aphrodite Waterpark, a one-of-a-kind naturally landscaped aqua adventure centre has been offering high quality experiences to its visitors. It is the biggest and the most visited attraction by tourists in the Paphos region, a full member of the European Waterpark Association (EWA). </p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/paphos/paphoszoo.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Paphos Zoo</h2></a>
            <p>Pafos Zoo is set in a lush and unspoiled natural environment of more than 100,000sqm, it is home to an extensive variety of birds, mammals and reptiles. Our collection of exotic birds and venomous snakes is one of the largest in Europe.</p>
            <h6>Prices Range: ££</h6>
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
