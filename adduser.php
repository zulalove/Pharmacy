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
                width: 140px;
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
            
        <!--- Header Start -------->
        <div class="row header">

            <div class="col-md-10">
                  <h2 ><img src="images/logo.png" class="rounded float-left" width="60px" height="50px" />Pharmacy Management System</h2>
            </div>

            <div class="col-md-2 ">
                <ul class="nav nav-pills ">
                    <li class="dropdown dmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manager<span class="caret"></span></a>
                            <ul class="dropdown-menu ">
                                <li><a href="profile.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Change Profile</a></li>
                                <li role="separator" class="divider"></li>
                                 <li><a href="index.html"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Logout</a></li>
                            </ul>
                     </li>
                </ul>
            </div>
        </div>
	<!--- Header Ends -------->
       
        <div class="row">
		
        <!----- Menu Area Start ------>
        <div class="col-md-2 menucontent">
          
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
        <!-- Menu Ares Ends  -->
<!-- Content Ares Start -->
    <div class="col-md-8 maincontent" >
    <!--   Menu Tab -->
        <div class="panel panel-default contentinside">
                <div class="panel-heading">Manage Doctor</div>
                <!--   Panel body Start   -->
                <div class="panel-body">
                        <ul class="nav nav-tabs doctor">
                                <li role="presentation"><a href="#doctorlist">Pharmacists</a></li>
                                <li role="presentation"><a href="#adddoctor">Add Pharmacist</a></li>
                        </ul>

    <!--   Display pharmacist Data List Start -->
    
        <div id="doctorlist" class="switchgroup">
            <?php
                include('dbcon.php');

                $query = "SELECT * FROM users";
                $find = mysqli_query($con,$query);
                $count = mysqli_num_rows($find);

                if ($count == 0) {
                    echo '<table>';
                    echo '<tbody><tr><td>No data found.</td></tr></tbody>';
                    echo '</table>';
                }
                else{
                    echo '<table>';
                    echo '<tr><th>Name</th><th>Email</th><th>Password</th><th>Phone No</th></tr>';

                    while ($row = mysqli_fetch_array($find, MYSQLI_ASSOC)) {
                        echo '<tbody>
                            <tr>
                            <td>'.$row['Name'].'</td>
                            <td>'.$row['Email'].'</td>
                            <td>'.$row['Password'].'</td>
                            <td>'.$row['Phone'].'</td>
                            </tr>
                            </tbody>';
                    }
                    echo '</table>';
                }
            ?>

        <!--<table class="table table-bordered table-hover">
                <tr class="active">
                        <td>Name</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Phone No.</td>
                        <td>Options</td>
                </tr>
                
                    <tr>
                            <td>kate</td>
                            <td>kate@123.com</td>
                            <td>****</td>
                            <td>123456789</td>-->
                            <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                            <a  href="#" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </div>
    <!--   Display pharmacist Data List Ends  -->
   
    <!-- Pharmacist Edit Info Modal Start Here -->
                            
           
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                       
                    
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Pharmacist Information</h4>
                        </div>
                        
                        <div class="modal-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                             <form class="form-horizontal" action="editDoct.jsp" method="post">
                                <div class="form-group">
                                <label  class="col-sm-3 control-label">Fullname <span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                                <div class="col-sm-8">
                                    <input type="Text" class="form-control" name="phamname" placeholder="kate..">
                                </div>
                                </div>

                                <div class="form-group">
                                      <label class="col-sm-3 control-label">Email <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></label>
                                      <div class="col-sm-8">
                                          <input type="email" class="form-control" name="email" placeholder="example@ke.co" >
                                      </div>
                                </div>

                    <div class="form-group">
                          <label class="col-sm-3 control-label">Password <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" placeholder="***.." >
                          </div>
                    </div>

                     <div class="form-group">
                        <label  class="col-sm-3 control-label">Phone <span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="phone" placeholder="+2547..." >
                        </div>
                    </div>
              
             
                   <!-- <div class="form-group">
                        <label  class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">

                        <select class="form-control" name="dept">
                        <option selected="selected">Depatrtment</option>
                        
                        <option> Neurology</option>
                   
                              
                        </select>
                        </div>
                    </div> -->                                                       
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


    <!----------------   Add Doctor Start   -------------->
    <div id="adddoctor" class="switchgroup">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="#" method="post">
                   <div class="form-group">
                     <label  class="col-sm-2 control-label">Fullname <span class="glyphicon glyphicon-user grey-lighten" aria-hidden="true"></span></label>
                        <div class="col-sm-5">
                            <input type="Text" class="form-control" name="fname" placeholder="full name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control" name="email" placeholder="example@ke.co" >
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name="password" placeholder="password" >
                            </div>
                    </div>

                     <div class="form-group">
                        <label  class="col-sm-2 control-label">Phone <span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="phone" placeholder="+2547..." >
                            </div>
                    </div>
              

                    <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                          </div>
                    </div>
                </form>

               </div>
        </div>
    </div>

<?php

    include('dbcon.php');

    #if submit insert values into db
    if (isset($_POST['submit'])) {

        #escape backslashes and special characters
        $name = mysqli_real_escape_string($con,stripslashes($_POST['fname']));
        $email = mysqli_real_escape_string($con,stripslashes($_POST['email']));
        $password = mysqli_real_escape_string($con,stripslashes($_POST['password']));
        $phone = mysqli_real_escape_string($con,stripslashes($_POST['phone']));

        if (!is_numeric($phone)) {
           echo '<div class="alert alert-warning" role="alert" style="color:red;">invalid quantity!</div>';
        }
        else{
             $query = "INSERT INTO `users` (Name, Email, Password, Phone) VALUES ('$name', '$email', '$password',  '$phone')";

        $res = mysqli_query($con, $query);
        
        if ($res) {

            echo "<h3>user added successfully!<h3>
            <br/>click <a href='adduser.php'>here</a> to go back";

        }
        else{
            echo "Failed, could not insert into the database";
        } 
        }
        
      
/*else{
    echo "Failed, check your variables.";
}*/
}
?>
                           <!----------------   Add Pharmacist Ends   --------------->
                </div>
           <!----------------   Panel body Ends   -------------->
         </div>
    </div>
	</div>
</div>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>