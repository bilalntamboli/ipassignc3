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
      <!-- form Ends -->
  </body>
</html>
