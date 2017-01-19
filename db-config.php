<?php
mysql_connect('localhost','username','password');

mysql_select_db('database');

$sql="SELECT requestlist.*,songlist.artist,songlist.title,songlist.duration FROM requestlist LEFT JOIN songlist ON requestlist.songid=songlist.id";
$list=mysql_query($sql);
?>