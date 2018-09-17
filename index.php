<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="sources/bootstrap.min.css"/>
        <link rel="stylesheet" href="sources/MyStylee.css" />
        <link rel="stylesheet" href="sources/backmedia.css"/>
        <title>Event Spot</title>
    </head>

    <body>
        <div class="Upper container page">
        	<div class="MyNav navbardiv navbar-fixed-top">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <img src="images/testimonials.png"/>
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
            <br/>
            <div class="MySlider">
           		<div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!--INDICATORS---> 
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					</ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active sImage">
                            <img src="images/s1.jpg"/>
                        </div>
                        <div class="item sImage">
                            <img src="images/s2.jpg">
                        </div>
                        <div class="item sImage">
                            <img src="images/s3.jpg">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div><!--MySlider-->
            <div class="MySliderT">
            	<div class="carousel slide">
                	<div class="carousel-inner">
                    	<div class="item active sImage">
                        	<img src="images/s1.jpg"/>
                    	</div>
                    </div>
                </div>
            </div><!--MySlider-->
          </div><!--Upper-->
          <div class="Lower container-fluid">
              <div class="SearchDiv">
                  <div class="row SearchInnerDiv">
                  	<br/>
                      <div class="col-lg-2 col-md-2 col-sm-1"></div>
                      <div class="col-lg-8 col-md-8 col-sm-10">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search this site ..." aria-label="Search this site ...">
                              <span class="input-group-btn">
                                  <button class="btn btn-success" type="button">Search!</button>
                              </span>
                          </div>
                      </div>
                  </div>
              </div><!--SearchDIV-->
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
              </div> <!--TOP RATED OUTER-->
              <br/>
              <br/>
            </div><!---lower--->
              
              <div class="container-fluid FooterRaper">
         	  	<div class="Footer container">
            		<div class="row">
                		<div class="col-md-3 col-sm-6 col-xs-12">
                    		<h3>ABOUT</h3>
                        	<div class="lineW"></div>
                        	<p>We strive to deliver a level of education that exceeds the expectations of our students. 
                        	<br />
                            <br />
                           		If you have any questions about our attitude or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.
                         	</p>
                     	</div>
                     	<div class="col-md-3 col-sm-6 col-xs-12 Tweets">
	                     	<h3>TWEETS</h3>
                         	<div class="lineW"></div>
                         	<p><a href="#">Tweet @Sir Saeed</a><br />UBITians, Get ready for your DataStructure result, I will announce it tomorrow.</p>
                         	<p><a href="#">Tweet @Karachi Jobs</a><br />Urgent Java developer requird, visit <a href="#"><u>www.website.com/jobs</u></a>, good salary package and other facilities.</p>
                   		</div>
                   		<div class="col-md-3 col-sm-6 col-xs-12 MailingList">
    		            	<h3>MAILING LIST</h3>
          		        	<div class="lineW"></div>
                        	<p>Subscribe to our mailing list for class updates, results and more!</p>
                        	<br />
                        	<form class="form-inline">
                        		<div class="form-group">
                        			<input type="email" class="form-control form-control-lg" placeholder="your email">
                                  	<button type="submit" class="btn btn-primary btn-md">SUBSCRIBE</button>
                               	</div>
                        	</form>
                   		</div>
                   		<div class="col-md-3 col-sm-6 col-xs-12 Social">
               	        	<h3>SOCIAL</h3>
                    		<div class="lineW"></div>
                        	<p>UBIT
                        	<br />
                           	University Of Karachi
                           	<br />
                           	University Road
                           	<br />
                           	Karachi 75270
                           	<br />
                            <br />
                           	Phone: (9221) 99261300
                        	</p>
                         	<br />
                         	<div class="social_icons">
                         		<a href="#" class="socialicon socialicon_twitter"></a>
                            	<a href="#" class="socialicon socialicon_facebook"></a>
                            	<a href="#" class="socialicon socialicon_google"></a>
                            	<a href="#" class="socialicon socialicon_mail"></a>
                         	</div>
                		</div>
            		</div><!---row--->
                	<hr>
                	<p class="text-center">&copy; Copyright Event Spot. All Rrights Reserved</p>
        		</div><!--footer--->
    		</div><!--Footer rapper--->
    </body>
</html>