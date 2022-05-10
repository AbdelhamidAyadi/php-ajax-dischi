var app = new Vue({
    el: '#app',
    data:{
        songs : [],
    },
    created(){
        axios.get('http://localhost/php-ajax-dischi/Milestone%202/api/database.php')
           .then((res) => {
               this.songs = res.data
           })
    }
})