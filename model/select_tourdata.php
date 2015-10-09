<?php

$nr_items_page = NR_ITEMS_PAGE2;
$result = $mysqli->query("SELECT DISTINCT(id) FROM tourdata;");

$num_articles = $result->num_rows;
$num_pages = ceil($num_articles / $nr_items_page);
$offset = ($page_nr-1)*$nr_items_page;

//$result = $mysqli->query("SELECT * FROM tourdata");
$sql = "SELECT * FROM tourdata ORDER BY date DESC LIMIT $offset, $nr_items_page";
//echo $sql;
$result = $mysqli->query($sql);
$result = resultToArray($result);
?>