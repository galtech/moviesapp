  import Vue from 'vue'
    import VueRouter from 'vue-router'

    Vue.use(VueRouter)

    import App from './views/App'
    import Movies from './views/Movies'

    const router = new VueRouter({
//        mode: 'history',
        routes: [
            {
                path: '/movies',
                name: 'movies',
                component: Movies
            },
        ],
    });

    const app = new Vue({
        el: '#app',
        components: { App },
        router,
     data() {
    return {
        genres: [],
        movies: []
    }
  },
  created: async function genreList() {
    await fetch('https://api.themoviedb.org/3/genre/movie/list?&api_key=94894bed279392e619cf827d3cc2c4e5')
    .then(response => response.json())
    .then(json => {
        this.genres = json.genres
    })
  },
  created: async function movieList() {
    let url = 'https://api.themoviedb.org/3/discover/movie?with_genres=28&api_key=94894bed279392e619cf827d3cc2c4e5'
    await fetch(url)
    .then(response => response.json())
    .then(json => {
      this.movies = json.results
    })
  }
});