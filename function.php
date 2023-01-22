<?php
require 'Dbconnection.php';

if(isset($_POST["action"])){
  if($_POST["action"] == "insert"){
    insert();
  }
  else if($_POST["action"] == "edit"){
    edit();
  }
  else{
    delete();
  }
}

function insert(){
  global $conn;

  $name = $_POST["name"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];

  $query = "INSERT INTO php VALUES('', '$name', '$lname', '$email')";
  mysqli_query($conn, $query);
  
  echo "Inserted Successfully";
}

function edit(){
  global $conn;

  $id = $_POST["id"];
  $name = $_POST["name"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];

  $query = "UPDATE php SET name = '$name', lname = '$lname', email = '$email' WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Updated Successfully";
}

function delete(){
  global $conn;

  $id = $_POST["action"];

  $query = "DELETE FROM php WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Deleted Successfully";
}
