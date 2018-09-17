<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="sources/bootstrap.min.css"/>
        <link rel="stylesheet" href="sources/MyStylee.css" />
        <link rel="stylesheet" href="sources/backmedia.css"/>
        <title>Event Spot divs</title>
    </head>
	<body>
    	<div>
              	<div class="TopRatedHeading">
                	<h1>TOP RATED</h1>
                </div>
                <form action="imageinserter.php" method="post" enctype="multipart/form-data">
                	 Select image to upload:
        			<input type="file" name="images"/>
        			<input type="submit" name="submit" value="UPLOAD"/>
                </form>
                
                <form action="imageinserter.php" method="post" enctype="multipart/form-data">
                	<input type="submit" name="display" value="DISPALY ALL"/>
                </form>
                <br/>
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
					
						if(isset($_POST["submit"])){
						
							$image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
							$query = "INSERT INTO images (Hall_Id,Images) VALUES(001,'$image')";  
							$result = mysqli_query($con, $query);
							echo $result;
						}
						
						if(isset($_POST["display"])){
							$query = "SELECT * FROM images WHERE Hall_ID = 1";  
							$result = mysqli_query($con, $query);
							while($row = mysqli_fetch_array($result))
							{   
								echo '<tr>';
								echo '<td>';
								echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Images'] ).'" height="100" width="100" class="img-thumnail" />';
								echo '</td>'; 
								echo '</tr>';  
							
							}
						}
				
				?>    
              </div>
    </body>
</html>