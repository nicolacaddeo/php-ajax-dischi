<?php
    $songs = 
    [
        [
            'poster' => 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg',
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'genre' => 'Pop',
            'year' => '1992'
        ],
        [
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
            "title" => "Ten's Summoner's Tales",
            'author' => 'Sting',
            'genre' => 'Pop',
            'year' => '1993'
        ],
        [
            'poster' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
            'title' => 'Steve Gadd Band',
            'author' => 'Steve Gadd Band',
            'genre' => 'Jazz',
            "year" => "2018"
        ],
        [
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'genre' => 'Metal',
            'year' => '2000'
        ],
        [
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
            'title' => 'One more car, one more raider',
            'author' => 'Eric Clapton',
            'genre' => 'Rock',
            'year' => '2002'
        ],
        [
            'poster' => 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg',
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'genre' => 'Pop',
            'year' => '1992'
        ],
        [
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
            "title" => "Ten's Summoner's Tales",
            'author' => 'Sting',
            'genre' => 'Pop',
            'year' => '1993'
        ],
        [
            'poster' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
            'title' => 'Steve Gadd Band',
            'author' => 'Steve Gadd Band',
            'genre' => 'Jazz',
            "year" => "2018"
        ],
        [
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'genre' => 'Metal',
            'year' => '2000'
        ],
        [
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
            'title' => 'One more car, one more raider',
            'author' => 'Eric Clapton',
            'genre' => 'Rock',
            'year' => '2002'
        ]
        
    ];
    ?>
        <div class="container">
    <?php
    foreach($songs as $song) {
        ?>
            <div class="song-card">
        <?php
            echo '<h3>'.$song["title"].'</h3>';
            ?>
                <div>
            <?php
            echo '<p class="info">'.$song["author"].'</p>';
            echo '<p class="info">'.$song["year"].'</p>';
            ?>
                </div>
            <?php
        ?>
            </div>
        <?php
    }   
    ?>
        </div>
    <?php 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP | Dischi v1</title>
    <link rel="stylesheet" href="../style/my_style.css">
</head>
<body>
        
</body>
</html>
    