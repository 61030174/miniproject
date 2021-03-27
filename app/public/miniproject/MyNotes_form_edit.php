<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit & Delete</title>
  <meta charset="utf-8">
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<font size="5">

<div class="container-fluid">

<?php

  include 'Note.php';
    // เรื่องที่ส่งมาแก้ไข
    $Note_ID = $_GET['Note_ID'];

    // echo $Note_ID;
    $query = "SELECT * FROM Notes WHERE Note_ID=$Note_ID";
    $result = mysqli_query($condb, $query) 
    or die("Error in sql : $query".mysqli_error($query));

    $row = mysqli_fetch_array($result);

    // print_r($row);

?>

    <form method="POST" action="MyNotes_edit.php">
    <div class="row">
      <div class="col-lg-4 text-left" style="background-color:#353536;"><a href="MyNotes.php" class="btn btn-light btn-lg">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a></div>
      <div class="col-lg-4 text-center" style="background-color:#353536;"><font color="white">Edit</font></div>
      <div class="col-lg-4 text-right" style="background-color:#353536;"><button class="btn btn-light btn-lg" type="submit">Save</button></div>
    </div>
    <br><br>
    <div class="container">
        <label for="Note_Name">เรื่อง</label><br>
        <input type="text" name="Note_Name" id="Note_Name" size="80" require value="<?php echo $row['Note_Name'];?>">
        <br><br>
        <label for="Detail">รายละเอียด</label><br>
        <Textarea name="Detail" id="Detail" rows="5" cols="85" <?php echo $row['Note_ID']? "disablade" : '';?>><?php echo $row['Detail'];?></Textarea>
    </div>
    <br><br><br><br><br>
    <div class="row">
      <div class="col-lg-4" style="background-color:#353536;"> </div>
      <div class="col-lg-4" style="background-color:#353536;"> </div>
      <div class="col-lg-4 text-right" style="background-color:#353536;">
      <a class="btn btn-light btn-lg" href="MyNotes_delete.php?Name_ID=<?php echo $row['Name_ID'];?>" onclick="return confirm('ยืนยันการลบโน้ต');">ลบ</a></div>
    </div>
    </form>
</div>

</font>
</body>
</html>
