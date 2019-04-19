
<template>
    <div class="mygenres" v-for="genre in genres">

      <p>{{ genre.id }}  {{ genre.name }} </p>

    </div>

    <h3>Action Movies</h3>
    <div class="mymovies" v-for="movie in movies">

      <p> {{ movie.title }} </p>

    </div>    
    
</template>

<script>

    export default{
        mounted(){

        }
    }

</script>
