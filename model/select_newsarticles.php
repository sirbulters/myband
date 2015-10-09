<?php

$nr_items_page = NR_ITEMS_PAGE; //hoeveelheid paginas in includes/config
$result = $mysqli->query("SELECT DISTINCT(id) FROM newsarticles;");

$num_articles = $result->num_rows;
$num_pages = ceil($num_articles / $nr_items_page);
$offset = ($page_nr-1)*$nr_items_page;

//$result = $mysqli->query("SELECT * FROM newsarticles");
$sql = "SELECT * FROM newsarticles ORDER BY date_created DESC LIMIT $offset, $nr_items_page";
//echo $sql;
$result = $mysqli->query($sql);
$result = resultToArray($result);
?>