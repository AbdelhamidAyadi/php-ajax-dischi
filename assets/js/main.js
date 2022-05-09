var app = new Vue({
    el: '#app',
    data:{
        songs : [],
    },
    created(){
        axios.get('http://localhost/php-ajax-dischi/api/database.php')
           .then((res) => {
               this.songs = res.data
           })
    }
})