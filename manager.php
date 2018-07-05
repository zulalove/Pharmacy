<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="images/logo.png" rel="icon"/>
        <title>Pharmacy Management System</title>

        <style type="text/css">
          th{
            width: 100px;
          }
        </style>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function()
                {

                        $('#doctorlist').show();
                        $('.doctor li:first-child a').addClass('active');
                        $('.doctor li a').click(function(e){

                                var tabDiv=this.hash;
                                $('.doctor li a').removeClass('active');
                                $(this).addClass('.active');
                                $('.switchgroup').hide();
                                $(tabDiv).fadeIn();
                                e.preventDefault();

                        });


                });
        </script>
    </head>
    <body>
        <div class="container-fluid">
            
        <!--- Header Start-->
        <div class="row header">

            <div class="col-md-10">
                    <h2 ><img src="images/logo.png" class="rounded float-left" width="60px" height="50px" />Pharmacy Management System</h2>
            </div>

            <div class="col-md-2 ">
                <ul class="nav nav-pills ">
                    <li class="dropdown dmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manager <span class="caret"></span></a>
                            <ul class="dropdown-menu ">
                                <li><a href="profile.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Change Profile</a></li>
                                <li role="separator" class="divider"></li>
                                 <li><a href="index.html"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Logout</a></li>
                            </ul>
                     </li>
                </ul>
            </div>
        </div>
  <!--- Header Ends -->
       
        <div class="row">
    
        <!----- Menu Area Start ------>
        <div class="col-md-2 menucontent" style="background-color:#272822;">
          
           <h4>Dashboard</h4>
                
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation"><a href="manager.php">Update Inventory</a></li>
                  <li role="presentation"><a href="adduser.php">Add users</a></li>
				          <li role="presentation"><a href="manager.php">View records</a></li>
                  <li role="presentation"><a href="orders.php">Place orders</a></li>
                  <li role="presentation"><a href="profile.php">Profile</a></li>
                  <li role="presentation"><a href="pharmacist.php">Pharmacist</a></li>
                </ul>
        </div>
        <!---- Menu Ares Ends  -------->
        
<!-------   Content Area start  ---->
<div class="col-md-10 maincontent" >

    <!-----------  Content Menu Tab Start   ------------>
    <div class="panel panel-default contentinside">
        <div class="panel-heading">Inventory Management</div>

        <!----------------   Panel Body Start   -------------->
        <div class="panel-body">
            <ul class="nav nav-tabs doctor">
                    <li role="presentation"><a href="#doctorlist">Inventory list</a></li>
                    <li role="presentation"><a href="#adddoctor">Add Drug</a></li>
            </ul>

            <!----------------   Display inventory List start   -------------->
           
               <div id="doctorlist" class="switchgroup">
                <?php
                include('dbcon.php');

                $query = "SELECT * FROM drugs";
                $find = mysqli_query($con,$query);
                $count = mysqli_num_rows($find);

                if ($count == 0) {
                  echo "<table>";
                  echo '<tbody><tr><td>No data found.</td></tr></tbody>';
                  echo "</table>";
                }
              else{
                echo "<table>";
                echo "<tr><th>ID</th><th>Name</th><th>Type</th><th>Purpose</th><th>Quantity</th><th>Price</th><th>Supplier</th><th>Expiry Date</th></tr>";

                    while ($row = mysqli_fetch_array($find, MYSQLI_ASSOC)) {
                      echo '<tbody>
                          <tr>
                          <td>'.$row['ID'].'</td>
                          <td>'.$row['Name'].'</td>
                          <td>'.$row['Type'].'</td>
                          <td>'.$row['Purpose'].'</td>
                          <td>'.$row['Quantity'].'</td>
                          <td>'.$row['Price'].'</td>
                         
                          <td>'.$row['Supplier'].'</td>
                          <td>'.date("F d, Y", strtotime($row['Expiry'])).'</td>
                            </tr>
                            </tbody>';

                    }
                    echo "</table>";
                  }
  ?>
              
						    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            <a  href="#" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                           
				
               </div>  
              <!----------------   Display inventory List ends   --------------->
              
              <!------ Edit drugs Modal Start ---------->
                            
             
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                       
                    
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Drug Information</h4>
                        </div>
                        
                        <div class="modal-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                             <form class="form-horizontal" action="#">
                                    
                               
                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Name</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="drugname" placeholder="drug name..">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Type</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="drugtype" placeholder="syrup or tablet..">
                                </div>
                             </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Purpose</label>
                                <div class="col-sm-5">
                                   <input type="text" class="form-control" name="purpose" placeholder="headache, chestpain...">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label">Quantity</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" name="quantity" placeholder="quantity at hand">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label">Price</label>
                                <div class="col-sm-5">
                                   <input type="currency" class="form-control" name="price" placeholder="each @">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-4 control-label">Supplier</label>
                              <div class="col-sm-5">
                                <select class="form-control">
                                 <option selected="selected" name="supplier">Supplier..</option>
                                 <option value="admin">Transwide Pharmaceuticals</option>
                                  <option value="admin">Transchem Pharmaceuticals</option>
                                  <option value="admin">Dawa Limited</option>
                                </select>
                              </div>
                              </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Update"></button>
                                 </div>
                            </form>
      </div>
                         </div>
                         </div>
                    </div>
                 </div>
               </div>
<!----------------   Modal ends here  --------------->

        
              
              
              <!----------------   Add Drug Start   ------------>
               <div id="adddoctor" class="switchgroup">
                   <div class="panel panel-default">
                       <div class="panel-body">
                           <form class="form-horizontal" action="#" method="post">

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Name</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" name="name" placeholder="drug name.." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Type</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" name="type" placeholder="syrup or tablet.." required>
                                </div>
                             </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Purpose</label>
                                <div class="col-sm-4">
                                   <input type="text" class="form-control" name="purpose" placeholder="headache, chestpain..." required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label">Quantity</label>
                                <div class="col-sm-4">
                                   <input type="number" class="form-control" name="quantity" placeholder="quantity at hand" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label">Price</label>
                                <div class="col-sm-4">
                                   <input type="currency" class="form-control" name="price" placeholder="each @" required>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-4 control-label">Supplier</label>
                              <div class="col-sm-4">
                                <select class="form-control"  name="supplier" required>
                                  <option selected="selected">Supplier..</option>
                                  <option value="Transwide Pharmaceuticals">Transwide Pharmaceuticals</option>
                                  <option value="Transchem Pharmaceuticals">Transchem Pharmaceuticals</option>
                                  <option value="dawa Limited">dawa Limited</option>
                                 </select>
                              </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label">Expiry date</label>
                                <div class="col-sm-4">
                                   <input type="date" class="form-control" name="expiry" placeholder="00-00-0000" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-12">
                                  <button type="submit" class="btn btn-primary" name="add">Add</button>
                                   <button type="button" class="btn btn-default" data-dismiss="modal" name="discard">Discard</button>
                                </div>
                            </div>

                            </div>
                            
                        </form>
                    </div>
                    </div>
                </div>


<?php

    include "dbcon.php";

    if (isset($_POST['add'])) {
      
      $name = mysqli_real_escape_string($con,stripslashes($_POST['name']));
      $type = mysqli_real_escape_string($con,stripslashes($_POST['type']));
      $purpose = mysqli_real_escape_string($con,stripslashes($_POST['purpose']));
      $quantity =  mysqli_real_escape_string($con,stripslashes($_POST['quantity']));
      $price = mysqli_real_escape_string($con,stripslashes($_POST['price']));
      $supplier = mysqli_real_escape_string($con,stripslashes($_POST['supplier']));
      $expiry = mysqli_real_escape_string($con,stripslashes($_POST['expiry']));

      if ($quantity < 0) {
        echo '<div class="alert alert-warning" role="alert" style="color:red;">invalid quantity!</div>';
      }
      else{
        $query = "INSERT INTO `drugs` (Name, Type, Purpose, Quantity, Price, Supplier, Expiry) VALUES ('$name', '$type', '$purpose', '$quantity', '$price', '$supplier', '$expiry')";

        $res = mysqli_query($con, $query);
          
        if ($res) {

          echo '<div class="alert alert-success" role="alert" style="color:green">added sucessfully&nbsp;<span class="glyphicon glyphicon-check" aria-hidden="true"></span><br/>click <a href="manager.php">here</a> to go back </div>';
        }
      else {
        echo "could not add";
      }
      }
}
?>
                   <!----------------   Add Drug Ends   --------------->
        </div>
        <!----------------   Panel Body Ends   --------------->
    </div>
    <!-----------  Content Menu Tab Ends   ------------>
</div>
<!-------   Content Area Ends  -------->
        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>