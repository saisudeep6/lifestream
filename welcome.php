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
    <link rel="stylesheet" href="welcome.css"/>
    <link rel="stylesheet" href="sidebar.css"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

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
    


  <form method="POST" action="feedback.php" style="display:none">
              <input type="text" value="<?php echo "$name"?>" name="user" >
              <input id="fbsubmit" type="submit" style="background-color: royalblue;color: seashell;">
</form>



<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">LifeStream</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#" style="color:#00aef5;">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
        <a class="nav-link dropdown-toggle ml-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin: 0%;">
                 <img src="images/roundedprofile.jpeg" alt="mdo" width="32" height="32" class="rounded-circle ml-2"> <?php echo "$name"; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item"  onclick="submit()">Profile</a></li>
            <li><a class="dropdown-item" href="donate.php">Donate Blood</a></li>
            <li><a class="dropdown-item" href="request.php">Request blood</a></li>
            <li><a class="dropdown-item"  onclick="feedback()" style="cursor: pointer;">Feedback</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="logout()">Signout</a></li>
          </ul>
          
          
      </nav>
    </div>
  </header>

  <main class="px-3" >
    <h1>Anybody can save lives</h1>
    <p class="lead">The Ties And Relations Established With Blood Are Better Than Ties And Relations Established With Money.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-black bg-black">Learn more</a>
    </p>
  </main>

  

  <footer class="mt-auto text-black-50">
    <p>Covered by <a href="https://getbootstrap.com/" class="text-dark">LifeSavers</a>, by <a href="#" class="text-dark">@SS</a>.</p>
  </footer>
</div>
<form method="POST" action="profile.php" style="display: none;">
              <input type="text" value="<?php echo "$name"?>" name="user" >
              <input id="submit" type="submit" style="background-color: royalblue;color: seashell;">
</form>

<script>
       function submit(){
         document.getElementById('submit').click();
       }
       function feedback(){
         document.getElementById('fbsubmit').click();
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
