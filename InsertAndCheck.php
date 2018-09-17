<html>
	<head>
    	<title>Insert And Check</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <?php
			
			session_start();
			
			$con = mysqli_connect('localhost','root','');
			
			if(!$con)
			{
				echo("Not Connected to server");
			}
			
			if(!mysqli_select_db($con,'first'))
			{
				echo "Not Connected";
			}
		
			if(isset($_POST['Save']))
			{
				$UserId = $_POST['SaveUserId'];
				$UserPassword = $_POST['SavePassword'];
				$Message = $_POST['SaveMessage'];
				
				$SQLStatement = "INSERT INTO table_two (UserId,Password,Message) VALUES ('$UserId','$UserPassword','$Message');" or die;
				
				if(!mysqli_query($con,$SQLStatement))
				{
					echo ("Not Inserted");
				}
				else
				{
					echo ("Inserted");	
				}
			}
			
			if(isset($_POST['Change']))
			{
				$UserId = $_POST['ChangeUserId'];
				$UserPassword = $_POST['ChangePassword'];
				$Message = $_POST['ChangeMessage'];
				
				$SQLStatement = "UPDATE table_two SET `Message` = '$Message' WHERE UserId = '$UserId' and Password = '$UserPassword';" or die;
				if(!mysqli_query($con,$SQLStatement))
				{
					echo ("Not Edited");
				}
				else
				{
					echo ("edited");	
				}
			}
        ?>
    </head>
    <body>
    	<div class="container-fluid">
        	<div class="container-fluid">
            <br />
            	<div class="col-md-12 text-center">
                	<fieldset>
                    	<legend>Save A Message</legend>
                            <form method="post" action="InsertAndCheck.php" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-4 col-md-4 control-label">User Id</label>
                                    <div class="col-md-4 col-sm-6">
                                    	<input type="text" class="form-control " name="SaveUserId">
                                    </div>
                                </div>
                                <div class="form-group">
                                	 <label class="col-sm-4 col-md-4 control-label">Password</label>
                                     <div class="col-sm-6 col-md-4"> 
                                     	<input type="text" class="form-control" name="SavePassword">
                                     </div>
                                </div>
                                <div class="form-group">
                                	 <label class="col-sm-4 col-md-4 control-label">Secret Message</label>
                                     <div class="col-sm-6 col-md-4"> 
                                     	<input type="text" class="form-control" name="SaveMessage">
                                     </div>
                                </div>
                                <div class="form-group">
                                	<input type="submit" class="btn btn-default" name="Save" value="Save Message">
                                </div>
                            </form>
                    </fieldset>
                </div>
            </div>
            <br />
            <br />
            <div class="container-fluid">
            	<div class="col-md-12 text-center">
                	<fieldset>
                    	<legend>Change Your Message</legend>
                        <form class="form-horizontal" method="post" action="InsertAndCheck.php">
                        	<div class="form-group">
                            	<label class="control-label col-md-4 col-sm-4">User Id</label>
                                <div class="col-sm-6 col-md-4">
                                	<input type="text" class="form-control" name="ChangeUserId">
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="control-label col-sm-4 col-md-4">Password</label>
                                <div class="col-sm-6 col-md-4">
                                	<input type="text" class="form-control" name="ChangePassword">
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="control-label col-sm-4 col-md-4">New Message</label>
                                <div class="col-sm-6 col-md-4">
                                	<input type="text" class="form-control" name="ChangeMessage">
                                </div>
                            </div>
                            <div class="form-group">
                            	<input type="submit" class="btn btn-default" name="Change" value="change">
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
	</body>
</html>