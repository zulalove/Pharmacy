<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/logo.png" rel="icon"/>
        <title>Pharmacy Management System</title>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                            <ul class="dropdown-menu ">
                                <li><a href="profile.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Change Profile</a></li>
                                <li role="separator" class="divider"></li>
                                 <li><a href="index.html"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Logout</a></li>
                            </ul>
                     </li>
                </ul>
            </div>
        </div>
	<!--- Header Ends --------->
       
        <div class="row">
		
        <!----- Menu Area Start ------>
        <div class="col-md-2 menucontent">
          
                <h4>Dashboard</h4>
                
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation"><a href="manager.php">Update Inventory</a></li>
                  <li role="presentation"><a href="adduser.php">Add users</a></li>
                  <li role="presentation"><a href="manager.php ">View records</a></li>
                  <li role="presentation"><a href="orders.php">Place orders</a></li>
                  <li role="presentation"><a href="profile.php">Profile</a></li>
                  <li role="presentation"><a href="pharmacist.php">Pharmacist</a></li>
                </ul>
        </div>
        <!---- Menu Ares Ends  -------->		
<!---- Content Ares Start  -------->
    <div class="col-md-8 maincontent" >
<!----------------   Menu Tab Start   -------------->
    <div class="panel panel-default contentinside">
        <div class="panel-heading">Manage Orders</div>
        <!----------------   Panel body Start   -------------->
        <div class="panel-body">
            <ul class="nav nav-tabs doctor">
                    <li role="presentation"><a href="#doctorlist">Old Orders</a></li>
                    <li role="presentation"><a href="#adddoctor">Place Orders</a></li>
            </ul>

        <!----------------   Display Nurse Data List Start  -------------->
    
        <div id="doctorlist" class="switchgroup">
            <table class="table table-bordered table-hover">
                <tr class="active">
                        <td>ID</td>
                        <td>Date</td>
                        <td>Drug name</td>
                        <td>Price</td>
                        <td>Total Price</td>
                        <td>Supplier</td>
                        <td>Options</td>
                </tr>
                  
                    <tr>
                            <td>123</td>
                            <td>aaa</td>
                            <td>aaa</td>
                            <td>example@gmail.com</td>
                            <td>add address</td>
                            <td>1234456789</td>
                            <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                            <a  href="#" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                    </tr>
                    
            </table>
        </div>
        <!----------------   Display orders Data List Ends  --------------->

        <!----------------   place order Start   -------------->
        <div id="adddoctor" class="switchgroup">
            <div class="panel panel-default">
                <div class="panel-body">
                <form class="form-horizontal" action="#">
                    
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Order id</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="id" placeholder="....">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-5">
                             <input type="date" class="form-control" name="date" placeholder="00-00-0000">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Drug name</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="name" placeholder="paracetamol">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Quantity</label>
                      <div class="col-sm-5">
                          <input type="number" class="form-control" name="quantity" placeholder="units..">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-5">
                          <input type="number" class="form-control" name="price" placeholder="$$$">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Total price</label>
                        <div class="col-sm-5">
                          <input type="number" class="form-control" name="tpice" placeholder="$$$$">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Supplier</label>
                        <div class="col-sm-5">
                            <select class="form-control">
                                <option selected="selected" name="supplier">Supplier..</option>
                                <option value="admin">Transwide Pharmaceuticals</option>
                                <option value="admin">Transchem Pharmaceuticals</option>
                                <option value="admin">Dawa Limited</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Place order</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!----------------   place order Ends   -------------->
        </div>
        <!----------------   Panel body Ends   -------------->
    </div>
<!----------------   Menu Tab Ends   -------------->
    </div>
<!---- Content Ares Ends  -------->
		</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>