<?php include 'db-config.php';?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Request History Viewer</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrapper">
  
  <div class="table">
    <div class="row header blue">
      <div class="cell">Timestamp</div>
      <div class="cell" style="width:400px;">Song Requested</div>
      <div class="cell">Requested By</div>
      <div class="cell"><center>Status</center></div>
	</div>

<?php
	while($requestlist=mysql_fetch_assoc($list)){
		echo "<div class='row'>";
		echo "<div class='cell'>".$requestlist['t_stamp']."</div>";
		echo "<div class='cell' style='width:400px;'>".$requestlist['artist']. " - " .$requestlist['title']."<br>";
		echo "<div style='font-size:13px'><b>Dedacation:</b>&nbsp;".$requestlist['msg']."</div></div>";
		echo "<div class='cell'>".$requestlist['name']."</div>";
		echo "<div class='cell'><center>".$requestlist['code']."</center>";
		echo "<center>".$requestlist['status']."</center></div>";
		echo "</div>";
}
?>

    </div>
	
	<div class="table">
	<div class="row header red">
      <div class="cell">
        Request Status Code Legend
      </div>
        <div class="cell">
        &nbsp;
      </div>
    </div>
	<div class="row">
	<div class="cell" style='font-size:13px'>
	600 - Requested song is offline and can not be played<br>
	601 - Song recently played.<br>
	602 - Artist recently played<br>
	603 - Song already in queue to be played<br>
	604 - Artist already in queue to be played.<br>
	605 - Song already in request list<br>
	606 - Artist already in request list<br>
	609 - Track recently played<br> 
	610 - Track already in queue to be played<br>
	611 - Track already in request list<br>
	612 - Album already in queue to be played<br>
	</div>
  <div class="cell" style='font-size:13px'>
	700 - Invalid request. (Unknown error with request)<br>
	701 - Banned<br>
	702 - Banned until mm:ss<br>
	703 - Requested song ID invalid<br>
	704 - Request limit reached. You can only request xx songs every xx minutes<br>
	705 - Request limit reached. You can only request xx songs per day<br>
	706 - Requests are disabled.<br>
	707 - Authorization failed. IP not in allowed list.<br>
	708 - You have already requested this song and it is waiting in the request queue to be played.<br>
	</div>
	</div>
</div>
</body>
</html>
