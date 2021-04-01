<?php
            
           session_start();
           error_reporting(0);
            $name=$_SESSION['cname'];
            $addr=$_SESSION['caddr'];
            $phone=$_SESSION['cphone'];
              
            if (isset($_POST['view'])){

           
                $pname = $_POST['selects'];
                $quan = $_POST['select2'];
                $price = $_POST['select3'];
                
                $bill = $quan*$price;

                
               
           

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
    <title>Bill</title>
  </head>
  <body>

     <!-- form starts -->
     <div class="main">
      <div class="main_two ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                
                <div class=" bg-dark text-white p-4 text-center">
                    

                    <div class="px-5 ">
                        <div class="mb-2"><h2>Invoice</h2></div>
                    </div>
                </div>

                       
                    </div>

               

                    <div class="row inf">
                        <div class="container col-md-6 mt-2">
                        <ul class="list-group">
                        <li class="list-group-item"><h4><b>Customer Information</b></h4></li>  
                           <li class="list-group-item"><b>Name :</b> <?php echo "<b>$name</b>";?></li>
                           <li class="list-group-item"><b>Address :</b> <?php echo "<b>$addr</b>";?></li>
                           <li class="list-group-item"><b>Phone No :</b> <?php echo "<b>$phone</b>";?></li>
        </ul>
                        </div>

                      
                    </div>
                    
                    <div class="row p-3">
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase small font-weight-bold">Sr.No</th>
                                        <th class=" text-uppercase small font-weight-bold">Product</th>
                                        <th class=" text-uppercase small font-weight-bold">Quantity</th>
                                        <th class=" text-uppercase small font-weight-bold">Unit Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>1</b></td>
                                        <td><?php echo "<b>$pname</b>";?></td>
                                        
                                        <td><?php echo "<b>$quan</b>";?></td>
                                        <td>₹<?php echo "<b>$price</b>";?></td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4 ">
                    

                        <div class="px-5 text-right">
                            <div class="mb-2"> Total amount</div>
                            <div class="h2 font-weight-light">₹<?php echo "<b>$bill</b>";?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        
    







  </body>
</html>
