<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>bookmark</title>
  <style>
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>

</head>
<body>
<?php include ("./savepg.php"); ?>
<header>
  <div class="jumbotron">
    <div class="container text-left">
      <h1>bookmark</h1>
      <p>readmarkable...</p>
    </div>
  </div>
  <div class="container">
  <div class="container row">
  <div class="col-sm-8">

      <form target="_parent" method="get" >
        <div class="form-group well">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
            <input class="form-control" name="newnamepg" type="text" placeholder="Name from page">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
            <input type="url"  class="form-control" name="newpic"  placeholder="Link from pic..." required><br>
          </div>
           <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea   rows="5" class="form-control" name="newtext"  placeholder="Your text..." required></textarea><br>
          </div>
          <br>
        <button class="btn btn-primary" type="submit" id="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
      </div>
      </form>
  </div>
</div>
</div>
</body>
