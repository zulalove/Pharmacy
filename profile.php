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
        <!---- Menu Ares Ends  -------->
       
<!---- Content Ares Start  -------->
    <div class="col-md-8 maincontent" >
    
    <!----------------   Menu Tab   -------------->
    <div class="panel panel-default contentinside">
        <div class="panel-heading">Manage Profile</div>
        <!----------------   Panel body Start   -------------->
            <div class="panel-body">
                <form class="form-horizontal" action="#">
                   <div class="form-group">
                     <label  class="col-sm-2 control-label">Fullname</label>
                        <div class="col-sm-5">
                            <input type="Text" class="form-control" name="phamname" placeholder="full name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control" name="email" placeholder="example@ke.co" >
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name="password" placeholder="password" >
                            </div>
                    </div>

                     <div class="form-group">
                        <label  class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="phone" placeholder="+2547..." >
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                    </div>
                </form>															
            </div>
                        <!----------------   Panel body Ends   -------------->
    </div>
							
    <div class="panel panel-default contentinside">
        <div class="panel-heading">Change Password</div>
        <!----------------   Panel body Start   -------------->
        <div class="panel-body">
            <form class="form-horizontal" action="#">
                <div class="form-group">
                       <label class="col-sm-2 control-label">Password</label>
                       <div class="col-sm-5">
                       <input type="password" class="form-control" name="password" placeholder="Current Password">
                       </div>
                </div>
                <div class="form-group">
                       <label class="col-sm-2 control-label">New Password</label>
                       <div class="col-sm-5">
                       <input type="password" class="form-control" name="newpwd" placeholder="Enter New Password">
                       </div>
                </div>
                <div class="form-group">
                       <label class="col-sm-2 control-label">Confirm New Password</label>
                       <div class="col-sm-5">
                       <input type="password" class="form-control" name="conpwd" placeholder="Confirm Password">
                       </div>
                </div>
                <div class="form-group">
                       <div class="col-sm-offset-2 col-sm-5">
                       <button type="submit" class="btn btn-primary">Update Password</button>
                       </div>
               </div>
            </form>
        </div>
        <!----------------   Panel body Ends   -------------->
    </div>
    </div>
            
    </div>
</div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>