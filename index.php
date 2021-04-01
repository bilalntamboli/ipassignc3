<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

     <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  <body>

     <!-- form starts -->

    <div class="main">
      <div class="main_two ">
        <div class="container text-center my-5">
        <h2>Customer Information</h2>
        </div>
     
           <div class="form">
               
              <form method="post" action="products.php">
                <div class="input">
                  <input type="text" placeholder="Name" class="input1" name="name" required>
                </div>
                <div class="input">
                  <input type="text" placeholder="Address" class="input1 " name="addr"  required>
                </div>
                <div class="input">
                  <input type="text" placeholder="Phone Number" class="input1"  name="phone"  required>
                </div>
                <div class="text-center mt-3">
                  <button class="btn btn-primary" type="submit"  name="next" >Next</button>
                </div>
              </form>
            </div>
          
        <div>
      </div>
    </div>


      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
