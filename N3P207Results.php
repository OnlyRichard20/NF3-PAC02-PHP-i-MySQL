<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// select the movie titles and their genre after 1990
$query = 'SELECT
        people_fullname, movie_name, people_isactor, people_isdirector
    FROM
        movie, people
    WHERE
        movie.movie_director = people.people_id OR 
        movie.movie_leadactor = people.people_id';
 
$result = mysqli_query($db,$query) or die(mysqli_error($db));

// show the results
while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
	echo $people_fullname . '-' . $movie_name . '-' . $people_isactor . '-' . $people_isdirector . ' <br>';
}
?>