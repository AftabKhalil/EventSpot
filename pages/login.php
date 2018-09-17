<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
 	 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../sources/bootstrap.min.css"/>
        <link rel="stylesheet" href="../sources/MyStylee.css" />
        <link rel="stylesheet" href="../sources/backmedia.css"/>
        <link rel="stylesheet" href="../sources/login.css"/>
        <title>Event Spot</title>
    </head>
    
    <body>
    	<div class="Upper container page">
        	<div class="MyNav navbardiv navbar-fixed-top">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <img src="../images/testimonials.png"/>
                    </div>
                    <div class="col-lg-10 col-md-12 marginNav">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
            							<span class="icon-bar"></span>
            							<span class="icon-bar"></span>
           								<span class="icon-bar"></span>                        
          							</button>
                                </div>
                                <div class="collapse navbar-collapse"  id="myNavBar">
                                    <ul class="nav navbar-nav">
                                        <li><a>HOME <span class="glyphicon glyphicon-home"></span></a></li>
                                        <li><a>EXPLORE HALLS <span class="glyphicon glyphicon-search rotSearch"></span></a></li>
                                        <li><a>CONTACT US <span class="glyphicon glyphicon-earphone rotPhone"></span></a></li>
                                        <li><a>HELP <span class="glyphicon helpIcon"></span></a></li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a>Sign Up <span class="glyphicon glyphicon-user"></span></a></li>
                                        <li><a href="pages/login.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
                                    </ul>
                                </div>
                            </div><!--containerFluid-->
                        </nav>
                    </div><!--marginNav-->
                </div><!--row-->
        	</div><!--navbardiv-->
    	</div>
        <div class="container LowerLogin">
        	<div class="row LoginForm">
            	<div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <form action="login.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="user_name">User Name:</label>
                            <div class="col-sm-10">
                             	<input type="text" class="form-control" name="User_Id" placeholder="Enter your User Name">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="control-label col-sm-2" for="user_password">Password:</label>
                            <div class="col-sm-10">
                             	<input type="password" class="form-control" name="Password" placeholder="Enter your Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="user_type">You Are:</label>
                            <div class="col-sm-10">
                             	<label class="radio-inline"><input type="radio" name="radio" value="Owner">Owner</label>
								<label class="radio-inline"><input type="radio" name="radio" value="Customer">Customer</label>
                            </div>
                        </div>
                        	<div class="form-group text-center">
                            	<input type="submit" name="Submit" class="btn btn-default myBtn" value="Login"/>
                            </div>
                    </form>
            	</div>
                <div class="col-sm-2">
                </div>
        	</div>
            <div>
            	 <?php
			$con = mysqli_connect('localhost','root','');
					
						if(!$con)
						{
							echo("Not Connected to server");
						}
						if(!mysqli_select_db($con,'eventlink'))
						{
							echo "Not Connected";
						}
						else
						{
							echo "<div>";
							echo "-----CONNECTED----" ;
							echo "</div>";
						}
						
						if(isset($_POST['Submit']))
						{
							echo "<div class='bbb'>Button Pressed</div>";
							if(isset($_POST['radio']))
{
echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
}
						}
		?>
            </div>
    	</div>
    </body>
</html>