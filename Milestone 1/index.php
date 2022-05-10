<?php

$database = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ]
];
?>
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
            <?php
                    foreach ($database as $song) {
                        echo '<div class="container_song">';
                        echo '<img src="' . $song['poster'] . '">';
                        echo  '<h2>' . $song['title'] . '</h2>';
                        echo  '<p>' . $song['author'] . '</p>';
                        echo  '<p>' . $song['year'] . '</p>';
                        echo  '</div>';
                    
                    }
            ?> 
            </div>
        </main>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    

</body>

</html>