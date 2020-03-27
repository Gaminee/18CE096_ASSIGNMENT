<?php
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$Email = $_POST['email'];
$Contact_no = $_POST['contact'];
$Gender = $_POST['Gender'];
$Address = $_POST['address'];
$Pin_Code = $_POST['Pincode'];
$City = $_POST['City'];
$State = $_POST['State'];
$Country = $_POST['Country'];
//Database connection
$conn = new mysqli('localhost','root','','data');
if ($conn->connect_error) {
  die('Connection Failed :'.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into all_data(fname, mname, lname, email, contact, Gender, address, Pincode, City, State, Country) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssississs", $fname, $mname, $lname, $Email, $Contact_no, $Gender, $Address, $Pin_Code, $City, $State, $Country);
  $stmt->execute();
  echo "Registration Successfully....";
  $stmt->close();
  $conn->close();
}
?>
