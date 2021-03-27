<?php

include 'Note.php';

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// echo '<hr>';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// exit;

// ประกาศตัวแปร
$Note_Name = $_POST['Note_Name'];
$Detail = $_POST['Detail'];
$Note_ID = $_POST['Note_ID'];

// update ข้อมูล
$sql = "UPDATE Notes SET
Note_Name = '$Note_Name',
Detail = '$Detail' 
WHERE Note_ID = $Note_ID ";

$result = mysqli_query($condb, $sql) 
or die("Error in sql : $sql".mysqli_error($sql));

mysqli_close($condb);

// echo $sql;
// echo '<hr>';

if($result){
    echo "<script type='text/javascript'>";
        echo "alert('Update Successfully');";
        echo "window.location = 'MyNotes.php';";
    echo "</script>";
}else{
    echo "<script type='text/javascript'>";
        echo "alert('Error !!');";
        echo "window.location = 'MyNotes.php';";
    echo "</script>";
}

?>