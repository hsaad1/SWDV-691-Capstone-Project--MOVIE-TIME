<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Movie Time</title>


  <!-- Custom styles for this template -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style-less.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
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
                <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex flex-column flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                        <div class="col-md-12 m-4 d-flex flex-column flex-content-center upper-section">

                            <img class="movieImg1" src="movie.jpg" aria-label="Movie image">

                            <h1 class="text-center">Welcome to Movie Time</h1>

                            <br>
                            <div class="p-2 margin-x-auto top-form">
                                <input type="search" class="search" placeholder="Search" name="search"   id="exampleInputEmail1"
            aria-describedby="emailHelp">
								 
                                <input type="button" class="btn btn-primary button red-box" value="Search" id="search">
                            </div>
                            <br>
                            <div class="alert alert-success text-center alertWidth margin-x-auto">
                                <strong>Success!</strong>  Welcome To Movie Time
                            </div>
                        </div>
 <div id="movies-searchable"></div>
                        
<?php 
// Include the database configuration file  
include("connection.php"); 
 
// Get image data from database 
$sql="select * from images";
	$result=mysqli_query($conn,$sql);
	
?>
 <?php while($row=mysqli_fetch_assoc($result)){ ?>
<h1 class="m-4 text-center"><?php echo $row['heading']; ?></h1>
				<div class="movie-section d-flex flex-column ">
						 
			<img class="m-4"src="<?php echo $row['images']; ?>" aria-label="Adults movie banner">
        
                          
                        </div>
<?php } ?> 

                       

                     

                        <footer>
                            <div class="alert alert-warning alertWidth text-center yellow-box">
                                <strong>Warning!</strong> Please don't show adult movies to Kids
                            </div>
                        

                                <div class="copyright text-center">
                                    <p class="mx-2">Copyright © 2022</p>
                                    <!-- <li><a href="#">Site Terms of Service</a></li> -->
                                    <p class="mx-2">Location: United States</p>
                                    <img src="eye.png" class="" aria-label="blind disability icon">
                                </div>
                        </footer>
                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

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
  <script>
  const MOVIE_DB_API = 'd8bf019d0cca372bd804735f172f67e8';
const MOVIE_DB_ENDPOINT = 'https://api.themoviedb.org';
const MOVIE_DB_IMAGE_ENDPOINT = 'https://image.tmdb.org/t/p/w500';
const DEFAULT_POST_IMAGE = 'https://via.placeholder.com/150';
	const searchButton = document.querySelector('#search');
const searchInput = document.querySelector('#exampleInputEmail1');
const moviesSearchable = document.querySelector('#movies-searchable');

function resetInput() {
    searchInput.value = '';
}
searchButton.onclick = function (event) {
    event.preventDefault();
    const value = searchInput.value

   if (value) {
    searchMovie(value);
   }
    resetInput();
}
function requestMovies(url, onComplete, onError) {
    fetch(url)
        .then((res) => res.json())
        .then(onComplete)
        .catch(onError);
}
function generateMovieDBUrl(path) {
    const url = `${MOVIE_DB_ENDPOINT}/3${path}?api_key=${MOVIE_DB_API}`;
    return url;
}

function searchMovie(value) {
    const url = generateMovieDBUrl('/search/movie') + '&query=' + value;
    requestMovies(url, renderSearchMovies, handleGeneralError);
}
function renderSearchMovies(data) {
debugger;
    moviesSearchable.innerHTML = '';
    const moviesBlock = generateMoviesBlock(data);
    moviesSearchable.appendChild(moviesBlock);
}
function handleGeneralError(error) {
    console.log('Error: ', error.message);
    //alert(error.message || 'Internal Server');
}
function generateMoviesBlock(data) {
debugger;
    const movies = data.results;
    const section = document.createElement('section');
    section.setAttribute('class', 'section');

    for (let i = 0; i < movies.length; i++) {
        const { poster_path, id } = movies[i];

        if (poster_path) {
            const imageUrl = MOVIE_DB_IMAGE_ENDPOINT + poster_path;
    
            const imageContainer = createImageContainer(imageUrl, id);
            section.appendChild(imageContainer);
        }
    }

    const movieSectionAndContent = createMovieContainer(section);
    return movieSectionAndContent;
}

function createImageContainer(imageUrl, id) {
    const tempDiv = document.createElement('div');
    tempDiv.setAttribute('class', 'imageContainer');
    tempDiv.setAttribute('data-id', id);

    const movieElement = `
        <img src="${imageUrl}" alt="" data-movie-id="${id}">
    `;
    tempDiv.innerHTML = movieElement;

    return tempDiv;
}
function createMovieContainer(section) {
    const movieElement = document.createElement('div');
    movieElement.setAttribute('class', 'movie');

    const template = ' <div class="content"> <p id="content-close">X</p> </div>';

    movieElement.innerHTML = template;
    movieElement.insertBefore(section, movieElement.firstChild);
    return movieElement;
}
document.onclick = function (event) {
    console.log('Event: ', event);
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

function getVideosByMovieId(movieId, content) {
    const url = generateMovieDBUrl(`/movie/${movieId}/videos`);
    const render = createVideoTemplate.bind({ content });
    requestMovies(url, render, handleGeneralError);
}
function createVideoTemplate(data) {
    const content = this.content;
    content.innerHTML = '<p id="content-close">X</p>';
    
    const videos = data.results || [];

    if (videos.length === 0) {
        content.innerHTML = '<p id="content-close">X</p> <p>No Trailer found for this video id of ${data.id}</p>';
        return;
    }

    for (let i = 0; i < 4; i++) {
        const video = videos[i];
        insertIframeIntoContent(video, content);
    }
}
function insertIframeIntoContent(video, content) {
    const videoContent = document.createElement('div');
    const iframe = createIframe(video);

    videoContent.appendChild(iframe);
    content.appendChild(videoContent);
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
  </script>
  <script> 
        function displayRadioValue() { 
		debugger;
            var ele = document.getElementsByName('movie'); 
              
            for(i = 0; i < ele.length; i++) { 
			
                if(ele[i].checked) {
				debugger;
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
</html>
