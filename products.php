<?php
session_start();

   if(isset($_POST['next'])){

     $_SESSION['cname'] = $_POST['name'];
     $_SESSION['caddr'] = $_POST['addr'];
     $_SESSION['cphone'] = $_POST['phone'];
   }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

     <link rel="stylesheet" href="style.css">
    <title>Products</title>
  </head>
  <body>

     <!-- form starts -->

    <div class="main">
       <div class="main_two ">
         <div class="container text-center my-5">
             <h2>Product Information</h2>
         </div>
         <div class="form">
            <form method="post" action="bill.php">
                 <div class="select1">
                      <select name="selects" class="select">
                         <option class="option" selected >Select Product</option>
                         <option class="option" value="NoteBook">NoteBook</option>
                         <option class="option" value="Book">Book</option>
                         <option class="option"  value="Pen">Pen</option>
                       </select>
                 </div>
                 <div class="select1">
                      <select name="select2" class="select">
                         <option selected disabled>Select Quantity</option>
                         <option class="option" value="1">1</option>
                         <option class="option" value="2">2</option>
                         <option class="option" value="3">3</option>
                     </select>
                 </div>
                 <div class="select1">
                      <select name="select3" class="select">
                         <option selected disabled>Select Price</option>
                         <option class="option" value="20">₹20</option>
                         <option class="option" value="30">₹30</option>
                         <option  class="option" value="40">₹40</option>
                      </select>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary" type="submit" name="view">View Bill</button>
                </div>
            </form>
        </div>
     <div>
   </div>
  </div>
</body>
</html>
