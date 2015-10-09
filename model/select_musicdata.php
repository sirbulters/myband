<?php

$nr_items_page = NR_ITEMS_PAGE3;
$result = $mysqli->query("SELECT DISTINCT(musicID) FROM musicdata;");

$num_articles = $result->num_rows;
$num_pages = ceil($num_articles / $nr_items_page);
$offset = ($page_nr-1)*$nr_items_page;

//$result = $mysqli->query("SELECT * FROM music");
$sql = "SELECT * FROM musicdata ORDER BY musictitle DESC LIMIT $offset, $nr_items_page";
//echo $sql;
$result = $mysqli->query($sql);
$result = resultToArray($result);
?>