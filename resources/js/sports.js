let app = new Vue({
  el: '#root',
  data: {
    sports: []
  },
  created() {
    axios.get('http://127.0.0.1:8000/api/sports').then((response) => {
      this.sports = response.data.data;
    })
  }
});
