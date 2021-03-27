<?php

include 'Note.php';

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// echo '<hr>';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// ประกาศตัวแปร
$Note_Name = $_POST['Note_Name'];
$Detail = $_POST['Detail'];

// insert ข้อมูล
$sql = "INSERT INTO Notes
(Note_Name,Detail)
VALUES
('$Note_Name','$Detail')
";

$result = mysqli_query($condb, $sql) 
or die("Error in sql : $sql".mysqli_error($sql));

mysqli_close($condb);

// echo $sql;
// echo '<hr>';

if($result){
    echo "<script type='text/javascript'>";
        echo "alert('Insert Successfully');";
        echo "window.location = 'MyNotes.php';";
    echo "</script>";
}else{
    echo "<script type='text/javascript'>";
        echo "alert('Error !!');";
        echo "window.location = 'MyNotes.php';";
    echo "</script>";
}

?>