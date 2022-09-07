<?php
$server = "localhost";
$user = "root";
$password = "";
$databse = "twilighthotel";

$mysli_connection = mysqli_connect($server, $user, $password, $databse);

if($mysli_connection){
    ?>
    <script>
        alert("Connection Successful");
        </script>
    <?php
 }
?>