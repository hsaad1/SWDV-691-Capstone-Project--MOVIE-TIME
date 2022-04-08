const moviesContainer = document.querySelector('#movies-container');
const moviesSearchable = document.querySelector('#movies-searchable');
const MOVIE_DB_API = 'd8bf019d0cca372bd804735f172f67e8';
const MOVIE_DB_ENDPOINT = 'https://api.themoviedb.org';
const MOVIE_DB_IMAGE_ENDPOINT = 'https://image.tmdb.org/t/p/w500';
const DEFAULT_POST_IMAGE = 'https://via.placeholder.com/150';

function requestMovies(url, onComplete, onError) {
    fetch(url)
        .then((res) => res.json())
        .then(onComplete)
        .catch(onError);
}

const generateMovieDBUrl = (path) => `${MOVIE_DB_ENDPOINT}/3${path}?api_key=${MOVIE_DB_API}`


const generateMoviesBlock = (data) => {
    const movies = data.results;

    const template = document.getElementById('template').innerHTML;

    const rendered = Mustache.render(template, { movies: data.results, url: MOVIE_DB_IMAGE_ENDPOINT});

    document.getElementById('movies-searchable').innerHTML = rendered;
}
