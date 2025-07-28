<?php

require_once './functions.php';

$json_cds = file_get_contents('./cds.json');
$cds = json_decode($json_cds, true);

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
                            };
                        ?>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Add CD</h3>
                        </div>
                        <div class="card-body">
                            <form action="./server.php" method="POST" class="row g-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">
                                        Title
                                    </label>
                                    <input class="form-control" name="title" id="title" type="text" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="artist" class="form-label">
                                        Artist
                                    </label>
                                    <input class="form-control" name="artist" id="artist" type="text" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="cover_url" class="form-label">
                                        Cover URL
                                    </label>
                                    <input class="form-control" name="cover_url" id="cover_url" type="text" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="year_published" class="form-label">
                                        Year Published
                                    </label>
                                    <input class="form-control" name="year_published" id="year_published" type="number" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="genre" class="form-label">
                                        Genre
                                    </label>
                                    <input class="form-control" name="genre" id="genre" type="text" required />
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary">
                                        Add
                                    </button>
                                </div>

                                


                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    

    <!-- # Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>