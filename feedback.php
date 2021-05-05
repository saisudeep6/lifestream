<?php
$name=$_POST['user'];
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>LifeStream</title>
 
    <link rel="stylesheet" href="donate.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-black bg-light">
    




    <main class="form-signin">
      <form method="POST" action="feedbacksubmit.php">
        <img class="mb-4" src="images/feedbackicon.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">FeedBack</h1>
    
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingUserName" placeholder="name@example.com" value="<?php echo"$name" ?>" name="fdusername" style="display: none;">
          <label for="floatingUserName">UserName</label>
        </div>

        <div class="form-floating">
        <input type="text" class="form-control" id="floatingPhone Number" placeholder="name@example.com" name="phno" >
          <label for="floatingPhone Number">Phone Number</label>
        </div>
   
        <div class="form-floating" >
          <textarea required="required" class="form-control" rows="6" id="floatingfeedback" placeholder="feedback" name="feedback" style="height:20vh"></textarea>
          <label for="floatingfeedback" >feedback</label>
        </div>
        
    
    <br>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Terms and Conditions
          </label>
        </div>
        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Submit">
      </form>
    </main>
<form method="POST" action="profile.php" style="display: none;">
              <input type="text" value="<?php echo "$name"?>" name="user" >
              <input id="submit" type="submit" style="background-color: royalblue;color: seashell;">
              </form>
<script>
       function submit(){
         document.getElementById('submit').click();
       }
     </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script>
        function logout(){
          location.href="index.html";
        }
      </script>
  </body>
</html>
