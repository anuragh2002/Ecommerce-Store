<?php require("Connection.php") ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link rel="stylesheet" href="Admin.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/73ba6c97c2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="form" >
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <h1 class="header">ADMIN LOGIN</h1>
        <input
          class="col-12 input"
          type="text"
          placeholder="Admin Name"
          name="AdminName"
        />
        <div>
          <input
            class="col-12 input"
            type="password"
            id="password"
            placeholder="Password"
            name="AdminPass"
          />
          <i class="fa-solid fa-eye-slash" id="eye" onclick="toggle()"></i>
        </div>
        <button class="col-6 login" type="submit" name="Login">LOGIN</button>
      </form>
    </div>
    
    <?php
      
      function input_filter($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
      }

      if(isset($_POST['Login'])){
        
        //Filtering user input
        $AdminName = input_filter($_POST['AdminName']);
        $AdminPass = input_filter($_POST['AdminPass']);

        //Escaping special symbols used in SQL statement
        $AdminName = mysqli_real_escape_string($con,$AdminName);
        $AdminPass = mysqli_real_escape_string($con,$AdminPass);

        //query template

        $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password`=?";

        //prepared statement
        if($stmt = mysqli_prepare($con,$query)){
          mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);

          if(mysqli_stmt_num_rows($stmt)==1){
            session_start();
            $_SESSION['AdminLoginId']=$AdminName;
            header("location: addProducts.php");
          }else{
            echo "<script>alert('Invalid Admin Name or Password')</script>";
          }
          mysqli_stmt_close($stmt);

        }else{
          echo "<script>alert('SQL Query cannot be prepared')</script>";
        }



      }

    ?>

    <script src="store.js"></script>

    
  </body>
</html>
