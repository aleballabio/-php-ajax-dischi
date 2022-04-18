const app = new Vue({
  el: "#app",
  data: {
    arrDisco: [],
  },
  created() {
    axios
      .get("http://localhost/-php-ajax-dischi/frontend/db/db.php")
      .then((response) => {
        this.arrDisco = response.data.map((disco) => ({
          title: disco.title,
          poster: disco.poster,
          author: disco.author,
          year: disco.year,
          genre: disco.genre,
        }));
      });
  },
});
