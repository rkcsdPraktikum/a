<html>
	<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
		  <?php include("./navbar.php"); ?><br>
 <?php
require('./connect.php');
$error = "
<div class='container'>
	<div class='containeook2/view.php?search=r row'>
	<div class='col-sm-10 col-sm-offset-2'>
	<a href='index.php'>
	<img class='img-thumbnail'  src='https://cdn.dribbble.com/users/605899/screenshots/4144886/pikabu.gif'>
</div>";

if(!empty($_GET['pages'])){
  require("./connect.php");
	$pages1 = $_GET['pages'];
  $sql = 'SELECT `text` , `namepg`,`pic` FROM pages WHERE id = "'.$pages1.'"';
  $result = $db->query($sql);
  if (!$result) {
    die ('Etwas stimmte mit dem Query nicht: '.$db->error);}
    while ($row = $result->fetch_assoc()) {
				if ($pages1 > 'id') {
					echo $error;
echo $row['id'];
#--------------------------------------------------------------------------
}else
echo "  <div class='jumbotron'>
    <div class='container text-left'>
    <h1>bookmark-".$row['namepg']."</h1>
      <p>readmarkable...</p>
    </div>
  </div>";
  //oben
  echo "  <div class='container'>
	  <div class='containeook2/view.php?search=r row'>
		<div class='col-sm-4'>
    <img class='img-thumbnail' src='".$row['pic']."'>
  </div>";
echo "<div class='container'>
  <div class='container row'>
<div class='col-sm-8 well'>
 <p>".$row['text']. "</p>
  </div>";

}}
if(empty($_GET['pages'])){
	echo $error;
}
?>
  </body>
</html>
