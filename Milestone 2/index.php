<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Dischi</title>
</head>

<body>
    <div id="app">
        <header>
            <div class="container_costum">
                <img src="./assets/img/spotify.png" alt="">
                <form action="">
                    <select name="genre" v-on:change="$emit('selectionGenre', genre)" v-model="genre" id="genre">
                        <option disabled value="">Select a genre</option>
                        <option value="All">All Genres</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Metal">Metal</option>
                    </select>
                    <select name="artist" v-on:change="$emit('selectionArtist', artist)" v-model="artist" id="artist">
                        <option disabled value="">Select an artist</option>
                        <option value="All">All Artists</option>
                        <option value="Bon Jovi">Bon Jovi</option>
                        <option value="Queen">Queen</option>
                        <option value="Sting">Sting</option>
                        <option value="Steve Gadd Band">Steve Gadd Band</option>
                        <option value="Iron Maiden">Iron Maiden</option>
                        <option value="Eric Clapton">Eric Clapton</option>
                        <option value="Deep Purple">Deep Purple</option>
                        <option value="Metallica">Metallica</option>
                        <option value="Dave Weckl">Dave Weckl</option>
                        <option value="Michael Jacjson">Michael Jacjson</option>
                    </select>

                </form>
            </div>
        </header>
        <main>

            <div class="mega_container_songs">
                <div v-for=" element in songs " class="container_song">
                    <img :src="element.poster" alt="">
                    <h2>{{element.title}}</h2>
                    <p>{{element.author}}</p>
                    <p>{{element.year}}</p>
                </div>

            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>