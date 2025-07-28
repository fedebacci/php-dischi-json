<?php

require_once './functions.php';

$json_cds = file_get_contents('./cds.json');
// var_dump($json_cds);

$cds = json_decode($json_cds, true);
// var_dump($cds);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Esercizio 3: "EX - PHP Dischi" (L04 - PHP &JSON)
    </title>
    
    <!-- # Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        CDs
                    </h1>


                    <div class="row g-3">
                        <?php
                            foreach ($cds as $cd) {

                                // todo: Vedere destructuring in php
                                $title = $cd["title"];
                                $artist = $cd["artist"];
                                $year_published = $cd["year_published"];
                                $cover_url = $cd["cover_url"];
                                $genre = $cd["genre"];

                                echo generate_cd_html($title, $artist, $year_published, $cover_url, $genre);
                            }
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </section>
    

    <!-- # Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>