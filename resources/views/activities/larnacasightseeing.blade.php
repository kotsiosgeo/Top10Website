<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Limassol Sightseeing</title>
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
            <h1 class="display-4">Top 10 Sightseeings in Larnaca:</h1>
            <p class="lead">These are the top 10 Sightseeings in Larnaca according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/agioslazaros.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/34') }}"><h2>Agios Lazaros</h2></a>
            <p>Located in its own square in the town centre, the magnificent stone church of Agios Lazaros is one of the most remarkable examples of Byzantine architecture in Cyprus and lies over the tomb of the saint. Built by Byzantine Emperor Leo VI in the 9th century, the church was restored in the 17th century. Although the three domes and original bell tower of the church were destroyed in the first years during Ottoman rule, the gold-covered iconostasis has survived today and is a superb example of baroque woodcarving. Saint Lazarus came to Cyprus after being resurrected by Jesus. He was ordained as Bishop of Kition by the Apostles Barnabas and Paul and lived in the town for 30 years. His tomb can be seen under the sanctuary. The saint is so revered that a procession is held in his honour eight days before Easter. During the procession, the icon of Saint Lazarus is carried through the streets of Larnaka.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/mackenzie.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/35') }}"><h2>Mackenzie Beach</h2></a>
            <p>Mackenzie Beach is a little off the centre of the city of Larnaka and in the immediate vicinity of the take-off and landing aircraft of the international airport, which is actually rather inconvenient for beach visitors who are looking for relaxation and peace. Nevertheless, a very popular beach has been created here with hip restaurants and beach bars and a nightlife to be proud of. If you're looking for water sports, you'll also find plenty to do here. The beach of grey-brown sand is especially suitable for beginners of windsurfing.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/finikoudes.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/36') }}"><h2>Finikoudes Beach</h2></a>
            <p>Finikoudes Beach is considered as one of the most famous beaches in Cyprus. The heart of Larnaca town is just behind the beach, divided from the shore by the coast road, Athenon Avenue. Finikoudes beach was named after the small palm trees planted here back in 1922. Finikoudes beach is a Blue Flag status beach and is kept very clean by Larnaka Municipality, who also provide the summer lifeguard service.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/larnacasaltlake.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/37') }}"><h2>Larnaca Salt Lake</h2></a>
            <p>Larnaka Salt Lake is the second largest salt-lake in Cyprus and measures 2.2 square kilometres. In 1997 it was declared a protected area under Cypriot Law for the Prote¬ction and Management of Nature and Wildlife and under the European Ha¬bitats Directive. It is a significant Ramsar and Natura 2000 site – one of the most significant biotopes in Europe - and one of the most important habitats in Europe for waterfowl.   Located southwest of Larnaka town and east of the villages of Meneou and Dromolaxia, the Salt Lake – known locally as ‘Alyki’ - is actually one of four lakes in Larnaka. Together, with Lake Orphani, Lake Soros and Airport Lake, the lakes collectively cover a total area of 1761 hectares.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/zenobia.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/38') }}"><h2>Zenobia Wreck</h2></a>
            <p>The best wreck in the world with best instructors, we will keep you safe on a magical mystery tour of this epic wreck that sank on the 7th June 1980 with 104 articulated lorries still fully laden with cargo on board. Contact us now for our summer special of 90 euros for 2 dives with equipment.</p>
            <h6>Prices Range: £££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/larnacamuseum.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/39') }}"><h2>Larnaca Medieval Castle</h2></a>
            <p>Larnaca Castle is a medieval fort that was built during the Ottoman rule and which is and located at the end of the Foinikoudes promenade. The Castle is home to a museum of the middle ages, which houses a collection of artefacts, including weaponry, pottery and household items found at the Kition archaeological site. The Castle also frequently holds different cultural events.</p>
            <h6>Prices Range: ££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/larnacamarina.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/40') }}"><h2>Larnaca Marina</h2></a>
            <p>Larnaca Marina is right in the heart of the town, literally so you can hop off the boat and be right in the middle of things straightaway. Perfect if you have an emergency, need a restaurant, or go to a supermarket. It is in front of Phinikoudes, a palm tree lined promenade with many restaurants, cafes, bars to choose from and it is also only a 15-minute drive to the airport.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/farosbeach.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/41') }}"><h2>Faros Beach</h2></a>
            <p>The famous Faros (Lighthouse) Beach of the Larnaka (Larnaca) village of Pervolia is a 500-metre strip of fine sands of varying shades of beige, calm, shallow seawaters and ample trees and greenery. It is located just south of Pervolia at Cape Kiti. Facilities on the beach include toilets, showers, changing rooms, sun beds, umbrellas, dustbins, recycling bins and a children’s playground. Lifeguards with lifesaving equipment and first aid services are stationed at the beach from June - September.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/kamares.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/42') }}"><h2>Kamares Aqueduct</h2></a>
            <p>This beautiful 18th century aqueduct can be found on the road heading towards Lemesos in the area of Kamares, which takes its name from the distinctive arches (‘kamares’ in Greek). An open-air sight, the aqueduct was built in the Roman style in 1746 by the Turkish governor of Larnaka, Bekir Pasha, who funded it out of his own sources to carry water to Larnaka from a source about 10km away. The aqueduct was abandoned in 1939 and its function replaced by modern pipes. There are more than 20 arches still intact, and these are strikingly illuminated at night. A cobbled area with benches and a footpath allows you to enjoy the site of this monument, with the path linking up with Larnaka Salt Lake.</p>
            <h6>Prices Range: £</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/larnaca/kition.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('destinations/43') }}"><h2>Kition Archaeological Site</h2></a>
            <p>The architectural ruins of the ancient city-kingdom of Kition provide the first clear evidence that the Mycenaean Greeks arrived in Larnaka in the 13th century BC, and the Phoenicians in the 9th. Achaeans redesigned and rebuilt the city around the end of the 13th century, fortifying it with cyclopean walls made of giant blocks of stone, whilst the Phoenicians settled in the area in the 9th century. In 312BC, Kition was occupied and then destroyed by Ptolemy 1st Soter, though habitation continued into Christian times. Kition was well known for its harbour during antiquity, from which many agricultural products were exported to the eastern Mediterranean, Egypt and the Aegean. Moreover, its strategic position rendered it an exceptional naval base. Of particular interest at the ancient port are the drawings of ships etched into the walls of buildings.</p>
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
