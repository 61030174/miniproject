<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Note</title>
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <meta charset="utf-8">
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
    <form method="POST" action="MyNotes_insert.php">
    <div class="row">
      <div class="col-lg-4 text-left" style="background-color:#353536;"><a href="MyNotes.php" class="btn btn-light btn-lg">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a></div>
      <div class="col-lg-4 text-center" style="background-color:#353536;"><font color="white">New Note</font></div>
      <div class="col-lg-4 text-right" style="background-color:#353536;"><button class="btn btn-light btn-lg" type="submit">Save</button></div>
    </div>
    <br><br>
    <div class="container">
        <label for="Note_Name">เรื่อง</label><br>
        <input type="text" name="Note_Name" id="Note_Name" size="80">
        <br><br>
        <label for="Detail">รายละเอียด</label><br>
        <Textarea name="Detail" id="Detail" rows="5" cols="85"></Textarea>
    </div>
    </form>
    
</div>
</font>
</body>
</html>