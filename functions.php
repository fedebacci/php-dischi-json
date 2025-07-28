<?php
function generate_cd_html ($title, $artist, $year_published, $cover_url, $genre) {
    $html = "
        <div class='col-12 col-md-4'>
            <div class='card h-100 text-center'>
                <div class='card-header p-0 overflow-hidden'>
                    <img class='img-fluid' src='$cover_url' />
                </div>

                <div class='card-body'>
                    <p>
                        $title
                    </p>
                    <p>
                        $artist
                    </p>
                    <p>
                        $year_published
                    </p>
                    <p>
                        $genre
                    </p>
                </div>
            </div>
        </div>
    ";

    return $html;
};
?>