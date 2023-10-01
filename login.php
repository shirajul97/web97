<?php

if(isset($_POST['btn'])){
    $_username = $_POST['username'];
    $_u_num = $_POST['u_num'];
    $_address = $_POST['address'];
    $_email = $_POST['email'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
  

    <title>Document</title>
</head>

<body>
 

    <table class="table container">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">username</th>
      <th scope="col">number</th>
      <th scope="col">address</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      
      <th><?php if(isset($_POST['username'])){
            echo $_username;
           } ?></th>
      <th> <?php if(isset($_POST['u_num'])){
            echo $_u_num;
           } ?></th>

     <th><?php if(isset($_POST['address'])){
            echo $_address;
           } ?></th>

     <th><?php if(isset($_POST['email'])){
            echo $_email;
           } ?></th>


    </tr>

  </tbody>
</table>




    <!--------- javascript ------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>