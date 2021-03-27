<?php

include 'Note.php';

echo '<pre>';
print_r($_GET);
echo '</pre>';

echo '<hr>';

echo '<pre>';
var_dump($_GET);
echo '</pre>';

exit;

// รับตัวแปร
$Note_ID = $_GET['Note_ID'];

// delete ข้อมูล
$sql = "DELETE FROM Notes WHERE Note_ID = $Note_ID";

$result = mysqli_query($condb, $sql)
or die("Error in sql : $sql".mysqli_error($sql));

mysqli_close($condb);

echo $sql;
echo '<hr>';

if($result){
    echo "<script type='text/javascript'>";
        echo "window.location = 'MyNotes.php';";
    echo "</script>";
}else{
    echo "<script type='text/javascript'>";
        echo "alert('Error !!');";
        echo "window.location = 'MyNotes.php';";
    echo "</script>";
}

?>