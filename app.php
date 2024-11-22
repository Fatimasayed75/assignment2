<?php

$url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

// fetch data
$res = file_get_contents($url);

// check if it gets the data
if ($res === FALSE) {
    die("Error in fetching the data");
}

// decode the json data into an associative arr
$data = json_decode($res, true);

// ensure that the json data formatted correctly
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Invalid JSON response format");
}

// check wheather we got the desired data
if (empty($data['results'])) {
    die("No data found");
}

return $data['results'];

?>