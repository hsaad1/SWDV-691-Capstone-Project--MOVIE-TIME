<?php
session_start();
?>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Movie Time</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="css/style-less.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style-less.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Diplomata SC' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Diplomata SC' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
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
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
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
                        <div class="d-flex flex-column flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="m-4 text-center">Upcoming Movies</h1>

                            <div class="movie-section d-flex flex-column ">

                                <img src="upcomingmovie.png" class="movieImg img-responsive">
                            </div>
                            <br>
                            <div class="row">
                                <div id="movies-searchable"></div>
                                <div id="movies-container mx-4"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <script src="https://unpkg.com/mustache@latest"></script>
        <script id="template" type="x-tmpl-mustache">
            <div class="movie">
            <section class="section">
            {{#movies}}
            <div class="imageContainer" data-id="{{id}}">
                <img src="{{url}}{{poster_path}}" data-movie-id="{{id}}"/>
                </div>
            {{/movies}}
            </section>
<div class="content"> <p id="content-close">X</p></div>
            </div>
        </script>

        <script src="js/commonHelpers.js"></script>
        <script>

            function searchUpcomingMovies() {
                const url = generateMovieDBUrl('/movie/upcoming');
                requestMovies(url, generateMoviesBlock, handleGeneralError);
            }

            function getVideosByMovieId(movieId, content) {
                const url = generateMovieDBUrl(`/movie/${movieId}/videos`);
                const render = createVideoTemplate.bind({ content });
                requestMovies(url, render, handleGeneralError);
            }
            searchUpcomingMovies();

            const log = console.log;
            function handleGeneralError(error) {
                log('Error: ', error.message);
                //alert(error.message || 'Internal Server');
            }
            function createSectionHeader(title) {
                const header = document.createElement('h2');
                header.innerHTML = title;

                return header;
            }

            function createVideoTemplate(data) {
                const content = this.content;
                content.innerHTML = '<p id="content-close">X</p>';

                const videos = data.results || [];

                if (videos.length === 0) {
                    content.innerHTML = '<p id="content-close">X</p><p>No Trailer found for this video id of ${data.id}</p>';
                    return;
                }

                for (let i = 0; i < 4; i++) {
                    const video = videos[i];
                    insertIframeIntoContent(video, content);
                }
            }
            function createVideoTemplate(data) {
                const content = this.content;
                content.innerHTML = '<p id="content-close">X</p>';

                const videos = data.results || [];

                if (videos.length === 0) {
                    content.innerHTML = ' <p id="content-close">X</p> <p>No Trailer found for this video id of ${data.id}</p>';
                    return;
                }

                for (let i = 0; i < 4; i++) {
                    const video = videos[i];
                    insertIframeIntoContent(video, content);
                }
            }
            function createIframe(video) {
                const videoKey = (video && video.key) || 'No key found!!!';
                const iframe = document.createElement('iframe');
                iframe.src = `http://www.youtube.com/embed/${videoKey}`;
                iframe.width = 360;
                iframe.height = 315;
                iframe.allowFullscreen = true;
                return iframe;
            }

            function insertIframeIntoContent(video, content) {
                const videoContent = document.createElement('div');
                const iframe = createIframe(video);

                videoContent.appendChild(iframe);
                content.appendChild(videoContent);
            }

            document.onclick = function (event) {
                log('Event: ', event);
                const { tagName, id } = event.target;
                if (tagName.toLowerCase() === 'img') {
                    const movieId = event.target.dataset.movieId;
                    const section = event.target.parentElement.parentElement;
                    const content = section.nextElementSibling;
                    content.classList.add('content-display');
                    getVideosByMovieId(movieId, content);
                }

                if (id === 'content-close') {
                    const content = event.target.parentElement;
                    content.classList.remove('content-display');
                }
            }
        </script>
  <script> 
        function displayRadioValue() { 
		 
            var ele = document.getElementsByName('movie'); 
              
            for(i = 0; i < ele.length; i++) { 
			
                if(ele[i].checked) {
				 
               // alert("Gender: "+ele[i].value); 
				if(ele[i].value == 'Family Movies'){
				var textBoxes = document.querySelectorAll('[id^=allmovies]');
				for(var i in textBoxes){	
				$("#allmovies"+i).addClass("disablelink");
				
}
}
				else{	
				var textBoxes = document.querySelectorAll('[id^=allmovies]');
				for(var i in textBoxes){	
				$("#allmovies"+i).removeClass("disablelink");
				
}
				}
            } 
        } 
		}
    </script> 

        <br>
        <br>
        <ul>
            <li>Copyright © 2022</li>

            <li>Location: United States</li>
        </ul>
        </footer>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</html>
