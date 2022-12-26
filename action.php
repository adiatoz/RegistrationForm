<?php
$Name = $_POST['Fullname'];
$RollNo = $_POST['Rollno'];
$Mobileno = $_POST['Mobileno'];
$Email = $_POST['Email'];
$Branch = $_POST['Branch'];
$Sem = $_POST['Sem'];

$conn = new mysqli('localhost','root','','simple');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into info(Name,Rollno,Mobileno,Email,Branch,Sem) values(?,?,?,?,?,?)");
    $stmt->bind_param("siissi",$Name,$RollNo,$Mobileno,$Email,$Branch,$Sem);
    $stmt->execute();
    echo "Registeration Succesfully";
    $stmt->close();
    $conn->close();
}
?>