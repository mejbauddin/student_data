<?php 
include ('inc/db.php');


$id = $_POST["id"];
$name = $_POST["name"];
$roll = $_POST["roll"];
$regno = $_POST["regno"];
$dep = $_POST["dep"];
$disc = $_POST["disc"];
//$imgs = $_POST["image"];

$image = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "./Student-Details/" . $image;

// echo 'id'. $id;
// echo 'name'. $name;
// echo 'roll'.$roll;
// echo 'reg'.$regno;
// echo 'dep'.$dep;
// echo 'dis'.$disc;
// echo 'img'.$image;


$sql = "INSERT INTO info (id, roll, regno, users_name, users_pass, dep, dis, img) VALUES ('$id', '$roll', '$regno', '$name', '@pass', '$dep', '$disc', '$image')";
//$sql = "INSERT INTO info (id, users_name, roll, regno, dep, dis, img) VALUES ('$id', '$name', '$roll', '$regno', '$dep', '$disc', '$image')";
$result = mysqli_query($conn, $sql);
if($result){
    move_uploaded_file($tempname,$folder);
    //echo 'Success! Your entry has been submitted successfully!';
    header('location: home_page.php?result=ok');
}else{
    header('location: user_edit.php?result=Name, ID, Roll, Reg.No, Department Or Description Error!');
}


?>