<?php
require('../bookmark2/connect.php');
  if (!empty($_GET['newnamepg'])) {
    $db->query("INSERT INTO pages (namepg,text,pic) VALUES ('".$_GET['newnamepg']."','".$_GET['newtext']."','".$_GET['newpic']."')");
    echo "<div class='alert alert-success alert-dismissable' id='success-del'>
        <a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong><i class='glyphicon glyphicon-floppy-saved'></i>  Eintrag gespeichert!</strong> <kbd class='bg-info text-success'> ".$_GET['newnamepg']." </kbd> , <kbd class='bg-info text-success'>".$_GET['newpic']."</kbd>
    </div>";
}
?>
