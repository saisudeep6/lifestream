<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>LifeStream</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>

<?php

$username=$_POST['username'];
$password=$_POST['password'];

$dbhost = "sql201.epizy.com";
$dbuser = "epiz_28538965";
$dbpass = "s0gxbJEB0NDzDW5";
$db="vsdata";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Could not connect");

$sql = "SELECT *  FROM data";
			$result = $conn->query($sql);

			if ($result->num_rows > 0)
            {
			  while($row = $result->fetch_assoc()) 
              {
                if($row["username"]=="$username"&&$row["password"]=="$password")
                {
                   
                    echo "<div class='alert alert-success' role='alert' style='text-align:center'>
                   Sucessfully LoggedIn
                  </div>";
                  
                    echo "<form method='post' action='welcome.php' style='visibility:hidden'><input type='text' name='user' value='$username' ><input id='submit' type='submit'></form><script>function myFunction() {document.getElementById('submit').click();} myFunction();</script>";

                    
                }
                else
                {
                    echo "<div class='alert alert-success' role='alert' style='text-align:center'>
                   LoginFailed
                  </div>";
                    echo "<script>location.href='index.html';</script>";
                }

                
			  }
			} 
            
			?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            </body>
            </html>