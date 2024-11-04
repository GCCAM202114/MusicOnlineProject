<php
include 'Config/config.php';
include 'Includes/header.php';

$search = $_POST['search'];
$search_result = "&" , $search , "&";

// bring in album details
    $album = $conn->prepare("SELECT
    album.id,
    album.albName,
    artist.artName,
    genre.genreName,
    album.image
    FROM album"
    INNER JOIN artist ON album.fk_artist_id = artist.id
    INNER JOIN genre ON album.fk_genre_id = genre.id
    WHERE album.albName Like ? OR genre.genreName Like ? 
    );
    $album->bind_param('sss', $search_result, $search_result, $search_result);
    $album->execute();
    $album->store_result();
    $album->bind_result($aID, $albName, $artName, $image);

        <!-- Remember you need to add this to main index -->