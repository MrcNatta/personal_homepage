<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

//function judul
function getPostTitleById($conn, $id) {
  $sql = "SELECT judul FROM blog WHERE id=" . $id;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row["judul"];
  } else {
    return "0 results";
  }
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$title1 = getPostTitleById($conn, 1);
$title2 = getPostTitleById($conn, 2);
$title3 = getPostTitleById($conn, 3);


//function deskripsi
function getPostDescById($conn, $id) {
    $sql = "SELECT deskripsi FROM blog WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["deskripsi"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $desc1 = getPostDescById($conn, 1);
  $desc2 = getPostDescById($conn, 2);
  $desc3 = getPostDescById($conn, 3);

//3rd func
function getPostURLById($conn, $id) {
    $sql = "SELECT url FROM blog WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["url"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $url1 = getPostURLById($conn, 1);
  $url2 = getPostURLById($conn, 2);
  $url3 = getPostURLById($conn, 3);

$conn->close();
?>