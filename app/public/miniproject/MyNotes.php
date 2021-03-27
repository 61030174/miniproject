<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Notes</title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style> 
        div.a {
          white-space: nowrap; 
          width: 500px; 
          overflow: hidden;
          text-overflow: ellipsis; 
          border: 1px solid #FFFFFF;
        }
    </style>
</head>

<body>
<div class="container-fluid p-3 my-3 bg-dark text-white"><font size="5">
    <ul class="pager">
    <li class="previous"></li><b size="15">My Notes</b>
    <li class="next"><a href="MyNotes_form.php" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-plus"></span>
    </a></li>
    </ul>
  </font>
</div>

<font size="3">

<div class="container">

  <?php

  include 'Note.php';
  $query = "SELECT * FROM Notes ORDER BY Date DESC";
  $result = mysqli_query($condb, $query) 
  or die("Error in sql : $query".mysqli_error($query));

  foreach($result as $row) { ?>
    <b>วันที่ <?php echo $row['Date'];?></b>
  <div class="row">
    <div class="col-md-10">
      <div class="thumbnail">
        <a href="MyNotes_detail.php?Note_ID=<?php echo $row['Note_ID'];?>" target="_blank">
          <div class="caption">
            <p><?php echo $row['Note_Name'];?></p>
            <div class='a'><?php echo $row['Detail'];?></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a href="MyNotes_form_edit.php?Note_ID=<?php echo $row['Note_ID'];?>" target="_blank">
          <div class="caption">
          <br><span class="glyphicon glyphicon-menu-right"></span><br>
          </div>
        </a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

<?php mysqli_close($condb); ?>

</font>
</body>
</html>
