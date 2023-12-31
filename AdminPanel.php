<?php
  require("AdminConnection.php");
  session_start();
  session_regenerate_id(true);
  if(!isset($_SESSION['AdminLoginId'])){
    header("location: AdminLogin.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
    *{
      font-family: poppins;
    }
    body{
      margin: 0;
    }
    div.header{
      color: #f0f0f0;
      font-family: poppins;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      padding: 10px 60px;
      padding-top: 15px;
      background-color: #1c1c1e;
    }
    div.header button{
      background-color: #f0f0f0;
      font-size: 16px;
      font-weight: 550;
      padding: 8px 12px;
      border: 2px solid black;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  
<div class="header">
  <h2>ADMIN PANEL - <?php echo htmlspecialchars($_SESSION['AdminLoginId']) ?></h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <button type="submit" name="Logout">LOG OUT</button>
  </form>
</div>


<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12">
      <table class="table text-center table-dark">
        <thead>
          <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <!-- <th scope="col">Orders</th> -->
          </tr>
        </thead>
        <tbody>
          <?php 
            $query="SELECT * FROM `products`";
            $user_result=mysqli_query($con,$query);
            while($user_fetch=mysqli_fetch_assoc($user_result))
            {
              echo"
                <tr>
                  <td>$user_fetch[id]</td>
                  <td>$user_fetch[name]</td>
                  <td>$user_fetch[price]</td>
                  <td>$user_fetch[description]</td>
                  <td>$user_fetch[image]</td>
                  <td>
                    <table class='table text-center table-dark'>
                      <thead>
                        <tr>
                          <th scope='col'>Item Name</th>
                          <th scope='col'>Price</th>
                          <th scope='col'>Quantity</th>
                        </tr>
                      </thead>
                      <tbody>
                  ";
                    $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
                    $order_result=mysqli_query($con,$order_query);
                    while($order_fetch=mysqli_fetch_assoc($order_result))
                    {
                      echo"
                        <tr>
                          <td>$order_fetch[Item_Name]</td>
                          <td>$order_fetch[Price]</td>
                          <td>$order_fetch[Quantity]</td>
                        </tr>
                      ";
                    }
              echo"
                      </tbody>
                    </table>
                  </td>
                </tr>
              ";
            }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>


<?php 
  if(isset($_POST['Logout']))
  {
    session_destroy();
    header("location: AdminLogin.php");
  }
?>

</body>
</html>