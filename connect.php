<?php
$name = $_POST[name];
$email = $_POST[email];
$Passingyear = $_POST[Passingyear];
$CompanyName = $_POST[CompanyName];
$linkedinURL= $_POST[linkedinURL];
$Shareexperience=$_POST[Shareexperience];

$conn= new mysqli('localhost:3306','root@localhost','','placement');
if(conn->connect_error){
    die('Connection Failed :' . $conn->connect_error);

}
else{
    $stmt = $conn->prepare("insert into registration(name, email, Passingyear, CompanyName, linkedinURL, Shareexperience) values(?,?,?,?,?,?)");
    $stmt->blind_param("ssisss",$name, $email, $Passingyear, $CompanyName, $linkedinURL, $Shareexperience);
    $stmt=execute();
    echo "Registration Successful";
    $stmt = close();
    $conn = close();
}




?>