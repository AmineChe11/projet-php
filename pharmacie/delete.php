<?php
include "database.php";
$id = $_GET["id_client"];
$sql = "DELETE FROM clients WHERE id_client = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: admin.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}