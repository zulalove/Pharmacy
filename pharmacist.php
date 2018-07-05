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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pharmacist<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>View Profile</a></li>
                                <li role="separator" class="divider"></li>
                                 <li><a href="index.html"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Logout</a></li>
                            </ul>
                     </li>
                </ul>
            </div>
        </div>
</div>
 <div class="col-md-2 menucontent">
          
            <h4>Dashboard</h4>
                
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation"><a href="manager.php">Manager</a></li>
                  <li role="presentation"><a href="pharmacist.php">Update sales</a></li>
                </ul>
        </div>

        <div class="col-md-10 maincontent" >

    <!--  Content Menu Tab Start  -->
    <div class="panel panel-default contentinside">
        <div class="panel-heading">Inventory Management</div>

        <!--   Panel Body Start   -->
        <div class="panel-body">
            <ul class="nav nav-tabs doctor">
                    <li role="presentation"><a href="#doctorlist">Daily Stock Inventory</a></li>
                   <li role="presentation"><a href="#adddoctor">Update sales</a></li>
            </ul>

            <!--   Display Department Data List start  -->
           
               <div id="doctorlist" class="switchgroup">
                   <table class="table table-bordered table-hover">
                   <tr class="active">
                           <td>Date</td>
                           <td>Opening stock</td>
                           <td>Closing stock</td>
                           <td>Sales</td>
                           <td>Options</td>
                   </tr>
                   <tr>
                           <td>00-00-0000</td>
                           <td>80</td>
                           <td>60</td>
                           <td>20</td>
                           <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                            <a  href="#" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                           
                           </td>
                   </tr>
           
                  </table>
               </div> 


                <div id="adddoctor" class="switchgroup">
                   <div class="panel panel-default">
                       <div class="panel-body">
                           <form class="form-horizontal" action="#" method="post">

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Date</label>
                                <div class="col-sm-4">
                                  <input type="date" class="form-control" name="salesdate" placeholder="stock.." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Opening Stock</label>
                                <div class="col-sm-4">
                                  <input type="number" class="form-control" name="opening" placeholder="stock.." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Closing Stock</label>
                                <div class="col-sm-4">
                                  <input type="number" class="form-control" name="closing" placeholder="stock.." required>
                                </div>
                             </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Today's Sales</label>
                                <div class="col-sm-4">
                                   <input type="number" class="form-control" name="sales" placeholder="sales.." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-12">
                                  <button type="submit" class="btn btn-primary" name="add" action="pharmacist.php">Add</button>
                                   <button type="button" class="btn btn-default" data-dismiss="modal" name="discard">Discard</button>
                                </div>
                            </div>

                            </div>
                            
                        </form>
                    </div>
                    </div>
                </div>

 
</body>
</html>