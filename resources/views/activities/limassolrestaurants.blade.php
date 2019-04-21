<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Limassol Restaurants</title>
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
            <h1 class="display-4">Top 10 Restaurants in Limassol:</h1>
            <p class="lead">These are the top 10 Restaurants in Limassol according to our user's ratings!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h2> #1 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #2 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #3 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #4 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #5 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #6 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #7 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #8 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #9 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
            <h6>Prices Range: ££££</h6>
          </div>

          <hr class="my-4">

          <div class="post">
            <h2> #10 </h2>
            <hr>
            <img src="http://localhost/dashboard/test/Top10website/public/uploads/destinations/artima.jpg" width="250" height="150" align="left" style="margin-right:10px">
            <a class="btn btn-link" href="{{ url('/profile') }}"><h2>Artima Restaurant</h2></a>
            <p>Artima Bistro, three times awarded for its Mediterranean cuisine, is a most suitable choice for an elegant dining experience and ideal for a business lunch or dinner. The carefully restored and tastefully designed restaurant radiates unique character in a contemporary and elegant environment. The rich menu and professional staff are sure to leave guests with a favourable and flavourful impression. Located at the Lanitis Carobmill Complex next to the Medieval Castle in Limassol ,Artima offers Mediterranean dishes inspired by the Italian cuisine. The creative menu is enhanced with tempting desserts and a wide selection of local and international wines. Visitors can enjoy their food or drinks sitting by the yard of the Medieval Castle.</p>
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
