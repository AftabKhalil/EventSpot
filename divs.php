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
    	<div class="TopRatedOuter row">
              	<div class="TopRatedHeading">
                	<h1>TOP RATED</h1>
                </div>
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

						$sql = "SELECT `Name`, `Hall_Id`, `Address`, `Capacity`, `Price`, `Area`, `Ranking` FROM `hall` WHERE 1 ORDER BY `Ranking` DESC";
						$no = 0;
						$result = mysqli_query($con , $sql);
						if($result)
						{
							 if(mysqli_num_rows($result) > 0 )
						 	{
								while($row = mysqli_fetch_assoc($result))
								{
									$rows[$no] = $row;
									$no++;
								}
							}
						 
						 	else
						 	{
								 echo "Zero Rows";
						 
					     	}
						}
						else
						{
							echo " No Result";
						}
				
					echo "<div class='TopRatedDiv col-lg-4 col-md-4 col-sm-4 col-xs-12'>";
						echo "<div class='TopRatedInnerDiv'>";
							echo "<div class='TopImage'>";
								echo "<img src='images/s1.jpg'  class='TopImageImage'>";
							echo "</div>";
							echo "<div class='TopName'>";
								echo "<h3>";
								echo $rows[0]["Name"];
								echo"</h3>";
							echo"</div>";
							echo "<div class='TopStars'>";
								echo  $rows[0]["Ranking"];
							echo "</div>";
							echo "<div class='TopDescription'>";
								echo "<p>Description </p>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
					echo "<div class='TopRatedDiv col-lg-4 col-md-4 col-sm-4 col-xs-12'>";
						echo "<div class='TopRatedInnerDiv'>";
							echo "<div class='TopImage'>";
								echo "<img src='images/s1.jpg'  class='TopImageImage'>";
							echo "</div>";
							echo "<div class='TopName'>";
								echo "<h3>";
								echo $rows[1]["Name"];
								echo"</h3>";
							echo"</div>";
							echo "<div class='TopStars'>";
								echo  $rows[1]["Ranking"];
							echo "</div>";
							echo "<div class='TopDescription'>";
								echo "<p>Description </p>";
							echo "</div>";
						echo "</div>";
					echo "</div>";echo "<div class='TopRatedDiv col-lg-4 col-md-4 col-sm-4 col-xs-12'>";
						echo "<div class='TopRatedInnerDiv'>";
							echo "<div class='TopImage'>";
								echo "<img src='images/s1.jpg'  class='TopImageImage'>";
							echo "</div>";
							echo "<div class='TopName'>";
								echo "<h3>";
								echo $rows[2]["Name"];
								echo"</h3>";
							echo"</div>";
							echo "<div class='TopStars'>";
								echo  $rows[2]["Ranking"];
							echo "</div>";
							echo "<div class='TopDescription'>";
								echo "<p>Description </p>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				?>    
              </div><!--TOP RATED OUTER-->
    </body>
</html>