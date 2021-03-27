<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Detail</title>
</head>
<body>
<font size="5">
<div class="container-fluid p-3 my-3 bg-dark text-white">
    <ul class="pager">
      <li class="previous"><a href="MyNotes.php" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-chevron-left"></span>
      </a></li><b>Note</b><li class="next"></li>
    </ul>
</div><br>
<?php

    include 'Note.php';
    
    $Note_ID = $_GET['Note_ID'];

    $query = "SELECT Note_Name, Detail FROM Notes WHERE Note_ID=$Note_ID ";
    $result = mysqli_query($condb, $query) 
    or die("Error in sql : $query".mysqli_error($query));

    $row = mysqli_fetch_array($result);

?>

<div class="container">
    <b>เรื่อง</b><br>
    <?php echo $row['Note_Name'];?>
    <br><br>
    <b>รายและเอียด</b><br>
    <?php echo $row['Detail'];?>
</div>

<?php mysqli_close($condb); ?>

</font>
</body>
</html>
