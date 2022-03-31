<?php
session_start();
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style-less.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Diplomata SC' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <li class="nav-item" >
                    <a href="aboutmovietime.php" id="allmovies0" class="blue-font">About Movie Time</a>
                </li>
                <li class="nav-item" >
                    <a href="parentguide.php" id="allmovies1" class="blue-font">Parents Guide</a>
                </li>
                <li class="nav-item" >
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
                <h1 class="text-center">Parent Guide</h1>
                <br>
                <div class="row conmar" >

                    <div class="col-md-4 col-md-offset-1" style="text-align:center">
                        <p class="paragraph">Dear User,<br> We will be happy to receive any concern about our app and movies. Please feel free to contact us through our email MovieTime@gmail.com and we will get back to you as soon as we receive the email.</p>
                        <br>
                        <form method="post" action="contactus_database.php"   >
                            <label for="fname">First name:</label><br>
                            <input type="text" id="fname" name="fname" required><br>
                            <label for="lname">Last name:</label><br>
                            <input type="text" id="lname" name="lname" required><br>
                            <label for="email">Email Address:</label><br>
                            <input type="email" id="email" name="email" required><br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label> <span class="formmar"></span>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label></br>
                            <label for="female">Your Concern</label></br>
                            <textarea id="msg" name="msg" required></textarea></br></br>
                            <input type="submit" value="Submit" name="sub" class="btn btn-danger" >
                        </form>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <img src="contactus.png" class="center-block img-responsive">
                    </div>
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
