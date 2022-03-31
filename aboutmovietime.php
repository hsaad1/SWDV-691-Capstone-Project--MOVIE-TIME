<?php
session_start();
?>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Movie Time</title>
        <!-- Custom styles for this template -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style-less.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Diplomata SC' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- CSS only -->
        <link rel="stylesheet" type="text/css" href="css/aboutmovietime.css">

    </head>
    <body>

    <div class="d-flex" id="wrapper">
         <div class="bg-light border-right" id="sidebar-wrapper">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="index.php"><img src="home.jpg" class="homeicon" aria-label="Home image"></a>
                </li>
				<span class="name"><?php
				$name=$_SESSION['user1'];
				echo $name;
				?></span>
                <li class="nav-item">
                    <a href="aboutmovietime.php" id="allmovies0" class="blue-font">About Movie Time</a>
                </li>
                <li class="nav-item">
                    <a href="parentguide.php" id="allmovies1" class="blue-font">Parents Guide</a>
                </li>
                <li class="nav-item">
                    <a href="contactus.php" id="allmovies2" class="blue-font">Contact Us</a>
                </li>

                <div class="dropdown">
                    <button class="dropbtn">Movie Selection 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <p>
                            <input type="radio" name="movie" class="" value="Family Movies"> <span>Family Movies</span>
                        </p>
                        <p>
                            <input type="radio" name="movie" class="" value="All Movies"> <span>All Movies</span>
                        </p>
                        <button class="btn btn-danger" type="submit" onclick="displayRadioValue()">Submit</button>
                    </div>
                </div>

        
            </ul>
            <h3 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
                <span>Entertainment</span>
            </h3>

            <ul class="nav flex-column">

                <li class="nav-item">
                    <a href=""><img src="popcorn.jpg" aria-label="Popcorn image"></a>
                </li>

                <li class="nav-item" >
                    <a href="starWars.php" id="allmovies3" class="blue-font">Star Wars</a>
                </li>
                <li class="nav-item" >
                    <a href="trendingmovies.php" id="allmovies4" class="blue-font" >Trending Movies</a>
                </li>

                <li class="nav-item" >
                    <a href="upcomingmovies.php" id="allmovies5" class="blue-font">Upcoming Movies</a>
                </li>

                <li class="nav-item" >
                    <a href="popularmovies.php" id="allmovies6" class="blue-font">Popular Movies</a>
                </li>

                <li class="nav-item">
                    <a href="topmovies.php"  id="allmovies7" class="blue-font">Top Movies</a>
                </li>

                <li class="nav-item">
                    <a href="familymovietime.php" class="blue-font">Family Movies</a>
                </li>
				<li class="nav-item">
                    <a href="login.php" class="blue-font">Logout</a>
                </li>
            </ul>

        </div>

        <div id="page-content-wrapper">
           <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                        <li class="nav-item">
                            <a href="index.php"><img src="home.jpg" class="homeicon" aria-label="Home image"></a>
                        </li>
						<span class="name"><?php
				$name=$_SESSION['user1'];
				echo $name;
				?></span>
                        <li class="nav-item">
                            <a href="aboutmovietime.php">About Movie Time</a>
                        </li>
                        <li class="nav-item">
                            <a href="parentguide.php">Parents Guide</a>
                        </li>
                        <li class="nav-item">
                            <a href="contactus.php">Contact Us</a>
                        </li>

                        <div class="dropdown">
                            <button class="dropbtn">Movie Selection 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                   <p>
                            <input type="radio" name="movie" class="" value="Family Movies"> <span>Family Movies</span>
                        </p>
                        <p>
                            <input type="radio" name="movie" class="" value="All Movies"> <span>All Movies</span>
                        </p>
                        <button class="btn btn-danger" type="submit" onclick="displayRadioValue()">Submit</button>
                            </div>
                        </div>


                    </ul>
                    <h3 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
                        <span>Entertainment</span>
                    </h3>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a href="index.php"><img src="popcorn.jpg" aria-label="Popcorn image"></a>
                        </li>

                        <li class="nav-item">
                            <a href="starWars.php">Star Wars</a>
                        </li>
                        <li class="nav-item">
                            <a href="trendingmovies.php">Trending Movies</a>
                        </li>

                        <li class="nav-item">
                            <a href="upcomingmovies.php">Upcoming Movies</a>
                        </li>

                        <li class="nav-item">
                            <a href="popularmovies.php">Popular Movies</a>
                        </li>

                        <li class="nav-item">
                            <a href="topmovies.php">Top Movies</a>
                        </li>

                        <li class="nav-item">
                            <a href="familymovietime.php">Family Movies</a>
                        </li>
					<li class="nav-item">
                    <a href="login.php" class="blue-font">Logout</a>
                </li>
                    </ul>
                </div>
            </nav>
        <div class="container-fluid">

            <div class="col-md-8 offset-lg-3 offset-sm-2">
                <h1 class="m-4 text-center">About Movie Time</h1>
                <div class="row centerrow">
                    <div class="col-md-12 col-sm-12">
                        <img src="movietime.jpg" class="center-block movietime img-responsive">
                    </div>
                </div>
                <div class="row centerrow">
                    <div class="col-md-4 col-sm-12"></div>
                    <div class="col-md-4 col-sm-12 center-block">
                        <p class="paragraph">Movie Time is an entertainment app. that has a variety of free movies for all ages. This app was created in July 2020. It has many movie categories and also has special category of family movies which is good for kids to watch.</p>
                    </div>
                    <div class="col-md-4 col-sm-12"></div>
                </div>
                <br>
                <br>
                <ul>
                    <li>Copyright © 2022</li>

                    <li>Location: United States</li>
                </ul>
                </footer>
            </div>
        </div>
        </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>
