<?php
mysql_connect('localhost','username','password');

mysql_select_db('database');

$sql="SELECT requestlist.*,songlist.artist,songlist.title,songlist.duration FROM requestlist LEFT JOIN songlist ON requestlist.songid=songlist.id ORDER BY t_stamp DESC LIMIT 15";
$list=mysql_query($sql);
?>
