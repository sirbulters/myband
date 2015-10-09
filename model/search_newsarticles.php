<?php
/**
 * Created by PhpStorm.
 * User: jorisbulters
 * Date: 29-09-15
 * Time: 08:52
 */

//zoekt in newsarticles database
$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$search_string%' OR content LIKE '%$search_string%'";
$articles_result = $mysqli->query($sql);

//zoekt in tour database
$sql = "SELECT * FROM tourdata WHERE nametour LIKE '%$search_string%' OR city LIKE '%$search_string%' OR country LIKE '%$search_string%'";
$tourdata_result = $mysqli->query($sql);

//zoekt in music database
$sql = "SELECT * FROM musicdata WHERE musictitle LIKE '%$search_string%'";
$musicdata_result = $mysqli->query($sql);

//oude informatie
//$sql = "SELECT * FROM newsarticles WHERE title LIKE '&$search_string&'";
//$articles_result = $mysqli->query($sql);
