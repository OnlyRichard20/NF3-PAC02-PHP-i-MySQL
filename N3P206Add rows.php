<?php
// connect to mysqli
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Spiderman", 9, 2020, 7, 8),
        (5, "Chucky", 11, 2019, 9, 7),
        (6, "Vengeance", 10, 2019, 8, 9)';
        
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9,"Thriller"),
        (10, "Old times"), 
        (11, "Fantasy")';

mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the people table
$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Richard Parker", 1, 0),
        (8, "Cameron Diaz", 0, 1),
        (9, "Jason Derulo", 1, 0)';

mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>
