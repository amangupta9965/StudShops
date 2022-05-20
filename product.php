<?php
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
    <title>Hello, world!</title>
  </head>
  <style>


/* external css: flickity.css */




.craousels {
  background: black;
}

.craousels-cell {
  width: 70%;
  height: 200px;
  /* flex-box, center image in cell */
  display: -webkit-box;
  display: -webkit-flex;
  display:         flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
          justify-content: center;
  -webkit-align-items: center;
          align-items: center;
}

.craousels-cell img {
  display: block;
  max-width: 100%;
  max-height: 100%;
  /* dim unselected */
  opacity: 0.7;
  -webkit-transform: scale(0.85);
          transform: scale(0.85);
  -webkit-filter: blur(5px);
          filter: blur(5px);
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s, transform 0.3s, -webkit-filter 0.3s, filter 0.3s;
          transition: opacity 0.3s, transform 0.3s, filter 0.3s;
}

/* brighten selected image */
.craousels-cell.is-selected img {
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-filter: none;
          filter: none;
}

@media screen and ( min-width: 768px ) {
  .craousels-cell {
    height: 400px;
  }
}

@media screen and ( min-width: 960px ) {
  .craousels-cell {
    width: 60%;
  }
}

/* buttons, no circle */
.flickity-prev-next-button {
  width: 60px;
  height: 60px;
  background: transparent;
  opacity: 0.6;
}
.flickity-prev-next-button:hover {
  background: transparent;
  opacity: 1;
}
/* arrow color */
.flickity-prev-next-button .arrow {
  fill: white;
}
.flickity-prev-next-button.no-svg {
  color: white;
}
/* closer to edge */
.flickity-prev-next-button.previous { left: 0; }
.flickity-prev-next-button.next { right: 0; }
/* hide disabled button */
.flickity-prev-next-button:disabled {
  display: none;
}
/* recent product design ends here  */



@media screen and (max-width: 425px) {
  #btn123{
    width: 120px;
    font-size: 15px;
    padding: 10px 10px;
  }
  #h3now{
      font-size: 17px;
  }
  .b3now{
    font-size: 13px;
    margin-top: -20px;
  }
  #myForm{
    width: 240px;
    /* height: 350px; */
  }
  .nowss{
    /* max-width: 100px; */
    height: 20px;
  }
  .btn{
    font-size: 10px;
    /* max-width: 60px; */
    height: 25px;
    padding: 0px 0px 10px 0px;
  }
  #btn12{
    font-size: 13px;
    /* max-width: 60px; */
    height: 35px;
    padding: 10px 0px 10px 0px;
  }
} 
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: 1px solid black;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 210px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

/* login ends here  */
/* do not touch highly designed button  */


}
@media screen and (max-width: 1600px) {
      #slider_img{
  max-width: 100%;
  max-height: 420px;
} 
}
    @media screen and (max-width: 700px) {
      #slider_img{
  max-width: 100%;
  max-height: 300px;
} 

      
      #div123{
        width: 118px;
        height: 205px;
        margin-right: 2px;
        margin-left: 8px;
        /* margin-right: 10px; */
      
    }
    div #img112{
        height: 80px;
        max-width: 113.5px;
        padding-left: 0.7px;
    }
    div #div109{
        max-height: 110px;
        max-width: 98%;
    }

    }

    @media screen and (max-width: 370px){
  
      #slider_img{
  max-width: 100%;
  max-height: 200px;
} 
      #div123{
        width: 108px;
        height: 205px;
        height: 205px;
        margin-right: 1px;
        margin-left: 1px;
        
      }
      div #img112{
        height: 80px;
        max-width: 103px;
        padding-left: 0.7px;
    }
    div #div109{
        max-height: 100px;
        max-width: 98%;
    } 
    }

    .h3now{

        margin: 10px 0px 10px 18px;
    }

    #name{

        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    @media screen and (max-width: 427px){

#butt1{
        font-size: 12px;
        padding: 5px;
        font-weight: bolder;
        padding-left: 22px;
        padding-right: 22px;
        margin-left: 2px;
        margin-top: 10px;
    }
    #btnsearch{
      /* background-color: green; */
      font-size: 15px;
      padding: 10px;
      height: 50px;
    }
    #btn123451{
     font-size: 20px;
      padding-bottom: 35px;
      /* padding: 19px; */
    }
}


</style>
  <body>

<!-- login start here  -->
<?php


   
$error = false;
include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $email1 = $_POST['email1'];
  $password = $_POST['psw'];
$sql = "SELECT * FROM `userlogin` WHERE uname='$email1'";
$result = mysqli_query($conn , $sql);
$row = mysqli_num_rows($result);
// echo "www";
if($row == 1){
  $sql = "SELECT * FROM `userlogin` WHERE cstatus='1' AND uname='$email1'";
  $result12 = mysqli_query($conn, $sql);
  $roess = mysqli_num_rows($result12);
  if($roess == 1){
while($num = mysqli_fetch_assoc($result)){
  $add = $num['address'];
  $name = $num['name1'];

    if(password_verify($password , $num['password'])){
      // session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = "$email1";
      $_SESSION['address'] = "$add";
      $_SESSION['name'] = "$name";
      // header("location: product.php?sno=$sno");
    }
    else{
      
      echo '<script>alert("Incorrect Password")</script>'; 
    }
  }// while ends here 
} // $result12 ends here 
        else{
          echo '<script>alert("Please verify your gmail first for login. Email verification link is send to your registered gmail id");</script>';
        }
} // if row ends here
else{

echo '<script>alert("Username incorrect. Please enter a valid username.")</script>'; 

}
} // if server ends here



?>
<!-- login ends here  -->

  
  <!-- //  header start here  -->
  <header>
    <div class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <svg width="2.5em" height="2.5em" style="margin-right: 13px; background-color: white; padding: 3px;" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
        <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
      </svg>
      <a class="navbar-brand" href="index.php">Studshops <small>.com</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div></div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

          
          echo '<li class="nav-item">
          <a class="nav-link" href="#">Welcome - ';?><?php echo $_SESSION['name']; ?><?php echo '</a>
          </li>';
        }?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Product</a>
          </li>
          <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="userprofile.php">User</a>
              <a class="dropdown-item" href="contactus.php">Contact Us</a>
              <a class="dropdown-item" href="add_to_cart.php">Cart</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Change Password</a>
            </div>
          </li>';
        
      

}?>
          <li class="nav-item">
            <a class="nav-link" href="offers.php">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="freesample.php">Free Sample Papers</a>
          </li>
        
        </ul>
        <form class="form-inline my-2 my-lg-0" method = "GET" action="searching.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name = "search1">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name= "search1">Search</button> -->
      <input type="hidden" class="btn btn-outline-success my-2 my-sm-0" value="Submit">
    </form>
        
      </div>
</nav>
</div>
</header>
<!-- header ends here  -->

<!-- slider coding here start -->

<?php
include("connection.php");


$sno = $_GET['sno'];
$sql = "SELECT * FROM `product` WHERE `sno` = '$sno'";
$result = mysqli_query($conn , $sql);
while($row = mysqli_fetch_assoc($result)){
  $img = base64_encode($row['image']);
  $img1 = base64_encode($row['image1']);
  $img2 = base64_encode($row['image2']);
  echo '
  <br><br>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active" >
  <img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="bools world" id="slider_img" style="height: 40rem; width: 95rem;">
  
  </div>
  <div class="carousel-item" >
  <img src="data:image/jpg;charset=utf8;base64,'.$img1.'" alt="bools world" id="slider_img" style="height: 40rem; width: 95rem;">
  </div>
  <div class="carousel-item">
  <img src="data:image/jpg;charset=utf8;base64,'.$img2.'" alt="bools world" id="slider_img" style="height: 40rem; width: 95rem;">
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>  
  </div>
  <div style="border-bottom: 10px solid black;"></div>';
  
  
}
?>



<!-- slider ends here  -->







<?php
include("connection.php");
$sql = "SELECT * FROM `product` WHERE `sno` = '$sno'";
$result = mysqli_query($conn , $sql);
while($row = mysqli_fetch_assoc($result)){
  
  $name = $row['title'];
  $price = $row['price'];
  $oprice = $row['offer_price'];
  $username = $row['shopname'];
  $cat = $row['cat'];
  $quality = $row['quality'];
  $desc = $row['desc1'];
  $img = base64_encode($row['image']);
  $save = $price - $oprice;
  echo '<h3 class="h3now" id="name">'.ucwords($name).'</h3>
  <h4 class="h3now"style="color: green;" >&#8377;'.$oprice.'</h4>
  <h5 class="h3now">MRP <del style="color: rgb(255, 0, 0);">&#8377; '.$price.' </del>&nbsp; &nbsp;Save&nbsp;&#8377; '.$save.'</h5>
  <h5 class="h3now">Delivered product Under 3 Days by Studshops</h5>
  <hr>';
  if($oprice > 1200){
   
    echo '<div class="h3now" style="border: 1px solid black; margin-right: 19px; border-radius: 5px; background-color: rgb(202, 199, 199);">
    <div  style="background-color: rgb(202, 199, 199);"><h4 class="h3now">Save Extra in this offer</h4></div>
    <div style="border: 1px solid black; background-color: white;"><h6 class="h3now"><span style="color: green;"><b>FREE Delvery</b></span> available for this product</h6></div>
    <div style="border: 1px solid black; background-color: white;"><h6 class="h3now">Extra <span style="color: green;"><b>&#8377; 40 Off</b></span> 
    on this order.</h6></div>
    </div>
    <div>
    ';
  } 
  elseif($oprice > 500){
    echo '<div class="h3now" style="border: 1px solid black; margin-right: 19px; border-radius: 5px; background-color: rgb(202, 199, 199);">
    <div  style="background-color: rgb(202, 199, 199);"><h4 class="h3now">Save Extra with this offers</h4></div>
    <div style="border: 1px solid black; background-color: white;"><h6 class="h3now"><span style="color: green;"><b>FREE Delvery</b></span> available for this product</h6></div>
    
    </div>
    <div>
    ';
  }
  else{
    echo '<div class="h3now" style="border: 1px solid black; margin-right: 19px; border-radius: 5px; background-color: rgb(202, 199, 199);">
    <div  style="background-color: rgb(202, 199, 199);"><h4 class="h3now">Save Extra with  this offers</h4></div>
    <div style="border: 1px solid black; background-color: white;"><h6 class="h3now"><strong>Sorry!
    </strong>No offer available for this product at this time</h6></div>
    </div>
    <div>
    ';
  }
  
  echo '<h6 class="h3now" style="color: green;">In Stock</h6>
  <h6 class="h3now">Sold by '.$username.' and delivered by Studshops</h6>';
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo '  <h6 class="h3now" style="color: blue;">Deliver to '.$_SESSION['name'].'</h6>';
  }
  else{
    echo '  <h6 class="h3now" style="color: blue;">Deliver to User</h6>';
  }

 echo '<h6 class="h3now">Secure Transaction</h6>
  <div style="margin-right: 15px; margin-left: 15px;">';
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo'<a href="payment.php?sno='.$sno.'" style="text-decoration: none; color: white;">
  <button type="button" id="btn123451" style="margin-bottom: 10px; border: 2px solid black; height: 50px; padding: 5px;" class="btn btn-primary btn-lg btn-block" style="background-color: rgb(24, 141, 24);"> Buy Now</button> </a>
  ';
  }
  else{
    ?>
  <a href="#" style="text-decoration: none; color: white;">
  <button type="button" id="btn123451" style="margin-bottom: 10px; border: 2px solid black;  height: 50px; padding: 5px;"  onclick="alert('Login first for buy product and get a exciting offers');" class="btn btn-primary btn-lg btn-block"
   style="background-color: rgb(24, 141, 24);"> Buy Now</button> </a>
  

  <?php
  }
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo'<a href="addcartfunction.php?sno='.$sno.'" style="color: white; text-decoration: none;"><button type="button" class="btn-secondary btn-lg btn-block"  style="color: white; background-color: rgb(245, 141, 43); border: 2px solid black;"';?>onclick="alert
    ('<?php  echo $_SESSION['name'];?> Your product is successfully add in cart');"
    <?php echo'>
    Add To Cart</button></a>
    </div>';
   
  }
  else{
?>
      <button  type="button" class="btn-secondary btn-lg btn-block"  style="background-color: rgb(245, 141, 43); border: 2px solid black;" 
       onclick="alert('Please signin first for add product in add to cart')">Add To Cart</button>
  </div>
  <?php
  
}


echo '<hr>
<h5 class="h3now">Product Information</h5>
<table width="70%" border="2" style="margin-left: 19px;">
<tr>
<td style="font-size: 18px; padding: 10px;"><b>Item Name</b></td>
<td style="padding: 10px;">'.ucwords($name).'</td>
</tr>
<tr>
<td style="font-size: 18px; padding: 10px;"><b>Quality</b></td>
<td style="padding: 10px;">'.$quality.'</td>
</tr>
<tr>
<td style="font-size: 18px; padding: 10px;"><b>Category</b></td>
<td style="padding: 10px;">'.$cat.'</td>
</tr>
</table>
<h4 class="h3now"><b><u>Details provided by seller</u></b></h4>
<p align="justify" class="h3now" style="margin-right: 5px; font-size: 15px;">'.$desc.'</p>
';
} // end while loop here


?>

</div>




<!-- recent product start here  -->


<center>



<div class="container padding-bottom-3x"  id="div132" style="margin-top: 50px; margin-bottom: -15px;">
    <div class="card mb-3">
    <?php

      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == "true"){
        echo '
        <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span>-- Hey '.$_SESSION['name'].' Another Product for you according to your requirement -- </sapn>
    </div>
        ';
      }
      else{
        echo '
        <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span>-- Another Product for you according to your requirement -- </sapn>
    </div>
        ';

      }
    ?>
      </div>
      </div>

</center>
  <!-- Flickity HTML init -->
  
  <div class="craousels js-flickity">
  <!-- images from unsplash.com -->

<?php

$sql = "SELECT * FROM `product` WHERE cat='$cat' ORDER BY offer_price LIMIT 6";
$results1 = mysqli_query($conn , $sql);
while($row = mysqli_fetch_assoc($results1)){
  $name = $row['title'];
  $snos = $row['sno'];
  $descr = $row['desc1'];
  $price = $row['price'];
  $offer_price = $row['offer_price'];
  $save = $price - $offer_price;
  $img = base64_encode($row['image']);
  if($offer_price >500){
    $del = "Free Delivery by Studshops over &#8377;500.";
  }
  else{
    $del = "&#8377; 50 rupees charge for home delievery.";
  }


    echo ' 
    <div class="craousels-cell">
    <a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="flight formation" /></a>
  </div>
    ';
 
}
?>

</div>

<!-- recent product ends here  -->










<div style="margin-bottom: 60px;"></div>
<!-- login button start here  -->
<?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  //  echo $_SESSION['username'];
 echo '<a href="userlogout.php" style="color: white;"><button class="open-button" id="btn123"';?>onclick="return confirm('Are you sure you want to logout?');"
<?php echo'>Logout</button></a>';
 }
else{

echo '<button class="open-button" id="btn123" onclick="openForm()">SignIn</button>
<div class="form-popup" id="myForm" style="border: 2px solid black;">
<form action="product.php?sno='.$sno.'" method="post" class="form-container">


<label for="email"><b class="b3now">Email</b></label>
<input type="text" style="border: 2px solid black;" class="nowss" placeholder="Enter Email" name="email1" required>

<label for="psw"><b class="b3now">Password</b></label>
<input type="password" style="border: 2px solid black;" class="nowss" placeholder="Enter Password" name="psw" required>

<button type="submit" class="btn" id="btn12">Login</button>
<button type="button" class="btn cancel" id="btn12" onclick="closeForm()">Close</button>
<center><p><b class="b3now">Doesnt have an account</b></p></center>
<button type="button" class="btn cancel" style=" background-color: white; margin-top: -20px;">
<a style="color: black;" href="userssingup.php"><b class="b3now">SignUp Now</b></a></button>
</form>';
}
?>

</div>

<script>

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
</script>
<!-- login  button ends here  -->
<!-- don't touch it is login full access modal  -->


<!-- login ends here  -->




  <!-- footer starts here  -->
  <hr>
  <div style="border-bottom: 5px solid black;"></div>
  <div id="page-content" style="background-color: #007bff;">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
        <?php

        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
          ?>
          <h1 class="font-weight-light mt-4 text-white"><a href="#" style="color: white; text-decoration: none;" 
          onclick="alert('Please logout first to use this option.');">Sell on Studshops</a></h1>
        <?php 
        }
        else{
          echo '
          <h1 class="font-weight-light mt-4 text-white"><a href="seller_signup.php" style="color: white; text-decoration: none; ">Sell on Studshops</a></h1>
          ';
        }
?>
     
          <p class="lead text-white-50">Set up your shop on Studshops and become a seller. Earn income through Studshop. Sign Up Now.</p>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Studshops.com</small>
    </div>
  </footer>

  <!-- footer ends here  -->








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>