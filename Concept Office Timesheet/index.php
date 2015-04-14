<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VO | Availability Chart</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<nav class="navbar navbar-fixed-top">
	<div class="container">
    	<div class="row">
            <div class="logo-container col-xs-6 col-sm-3">
                <img src="img/logo.png" alt="no">
            </div>
            <div class="mobile-nav col-xs-6" onClick="toggleDiv('mobileSettings');">
            </div><!-- mobile nav -->
            <div class="col-sm-2 col-md-4">
            </div>
            <div class="desktop-nav hidden-xs col-sm-7 col-md-5">
            	<div class="row">
                	<div class="col-sm-1 visible-sm"></div>
                	<div id="desktopNavGroupContainer">
                        <div id="desktopNavGroupButton" class="dropdown-toggle col-sm-5 col-md-5" data-toggle="dropdown">My Groups</div>
                        <ul class="dropdown-menu" role="menu">
                            <li><div class="pull-left"><img src="img/group01.jpg" alt="n"></div><div>Dixie State Univesity Student Association</div></li>
                            <li><div class="pull-left"><img src="img/group02.jpg" alt="n"></div><div>Get Success 101</div></li>
                            <li><div class="pull-left"><img src="img/group03.png" alt="n"></div><div>Academic Innovations</div></li>
                            <li><div class="pull-left"><img src="img/group04.jpg" alt="n"></div><div>USA</div></li>
                            <li><div class="pull-left"><img src="img/group05.png" alt="n"></div><div>Academic Integrity Committee</div></li>
                        </ul>
                    </div>
                    <div id="desktopProfileImage" class="col-sm-6 col-md-7">
                        <img src="img/profile.jpg" alt="n">
                    	<div id="desktopNavName">Phillip Lambson</div>
                    </div>
                </div>
            </div><!-- desktop nav -->
        </div><!-- row -->
    </div><!-- container -->
</nav>
<div id="clearNavBar"></div>
<div id="mobileSettings" class="container-fluid">
	<div class="row"><!--profile -->
    	<div id="mobileProfileName" class="col-xs-8">
        	Phillip Alex Lambson
        </div>
        <div id="mobileProfileImage" class="col-xs-4">
        	<img src="img/profile.jpg" alt="none">
        </div>
    </div><!-- profile -->
    <div id="mobileGroupSelect" class="row"><!-- groups -->
    	<div class="col-xs-12">
        	<select>
            	<option value="1">Get Success 101</option>
                <option value="2">DSUSA</option>
                <option value="3">Academic Innovations</option>
            </select>
        </div>
    </div>
</div><!-- mobile settings -->

<div id="mainAvailabilityChart" class="container"><!-- main area -->
	<!-- this is where we put the availibility --> 
    <?php
		$ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum vestibulum rutrum. Aliquam congue accumsan mauris sit amet rutrum. Aenean ac vehicula massa. Donec pretium nibh id erat interdum, non aliquam sem eleifend. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce dapibus arcu id massa pharetra sodales. Pellentesque turpis tellus, convallis sit amet libero id, venenatis maximus purus. Maecenas dui est, sagittis a magna quis, interdum accumsan nisl. Aenean quis vehicula nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean volutpat ante sed condimentum pulvinar.
Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sed rutrum nunc. Aliquam eget ex laoreet, efficitur augue molestie, faucibus mi. Morbi quis nisl vitae erat cursus mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque non feugiat lorem. Morbi ultricies posuere venenatis. Pellentesque nisi lacus, molestie at sodales sed, vestibulum vitae velit. Vivamus sem dui, maximus sit amet lorem quis, consectetur consectetur nulla. Maecenas auctor varius nunc, eu vestibulum ante vulputate sit amet. Duis fermentum odio a pharetra blandit. Nullam sed interdum erat. Aenean elementum aliquet elit eu sagittis.
Donec efficitur turpis eget enim euismod, id rutrum felis fringilla. Maecenas non quam id neque placerat viverra sit amet eu nibh. Duis fermentum arcu ut lorem semper viverra. Aenean turpis erat, vulputate ac neque quis, condimentum sodales arcu. Vivamus vel rhoncus mauris. Aenean ut augue bibendum, pellentesque turpis ac, viverra metus. Praesent mollis rhoncus tellus in mollis. Suspendisse placerat, dui id varius tempus, massa enim blandit lectus, sed dapibus tortor sapien a elit. Fusce elementum feugiat massa, eget dignissim elit.
Pellentesque a tortor urna. Etiam consequat magna lacinia neque tincidunt volutpat. Donec ac tortor sem. Pellentesque consequat scelerisque iaculis. Aliquam ullamcorper suscipit sapien, eget pretium lacus interdum eget. Morbi.";

		$names = array("Phillip <span class='middleName hidden-xs'>Alex</span> Lambson", "Brad Owen", "Eric Lewis", "Mark Speener", "Celeste Carter", "Parker Lambson", "Cloie Talley",
						"Matthew Kearl", "Sebastion Nay", "Haden Goebel", "Michael Sullivan", "Kai Anderson", "Sammantha Tommer", "Greg Layton", "Katie Czappa", "Khalob Freeborn",
						"Sarah Ramaker", "Conner Fankhouser", "Megan Church", "Kayla Coolbear", "Kaleen Talley", "Miles Manwaring");
		for($i = 0; $i < 20; $i++){
			?>
            	<div class="row availabilityRow">
    	<div class="col-xs-8 col-sm-4">
        	<div class="availabilityName">
        		<?php
					$randomNum = mt_rand(0, sizeof($names)-1);
					if($i == 0){
						$randomNum = 0;
					}
					echo $names[$randomNum];
				?>
            </div>
        </div>
        <div class="col-xs-4 col-sm-1">
        	<div class="availabilitySlider">
            	<div class="availabilitySliderLine"></div>
                <div class="availabilitySliderCircle notAvailable"></div>
            </div>
        </div>
        <div class="hidden-xs col-sm-1 returning" title="When will they be returning">
        	<span><?php 
				echo(mt_rand(1, 12));
			?>:<?php 
				$randomNum = mt_rand(1,59);
				if($randomNum < 10){
					$randomNum = "0".$randomNum;
				}
				echo($randomNum);
			?></span>
        </div>
        <div class="hidden-xs col-sm-5 currentTask">
        	<div>
            	<?php
                	$alex = "Work on virtual office until it is complete. Use ritalin if ADD starts kicking in. Make sure to drink plenty of water";
					if($i == 0){
						echo($alex);
					} else {
						$randomNum = mt_rand(0, strlen($ipsum)/2);
						echo(substr($ipsum, $randomNum, strlen($ipsum) - ($randomNum + $randomNum/2)));	
					}
				?>
            </div>
        </div>
        <div class="hidden-xs col-sm-1 expandArrow">
        	<img src="img/expand.png" alt="dots" title="Show tasks list">
        </div>
        <!-- slide down area -->
        <div class="extraEmployeeInfo col-xs-12">
        	<div class="row">
            	<div class="hidden-xs col-sm-2" role="progressbar" title="This shows how long you have been clocked in and when you started">
                	<div class="timer timerHide">
                    	<div class="timerText">
                        	<span>04H</span><br>
                            <span>30M</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h2 class="visible-xs">Current Tasks</h2>
                    <ul>
                    	<li>Clean Toilets</li>
                        <li>Drink smoothie</li>
                        <li>Implement Map Reduce</li>
                        <li>Cry</li>
                        <li>Drop out of school</li>
                    </ul>
                </div>
                <div class="hidden-xs col-sm-1 listActions">
                	<div><img src="img/plus.png" alt="plus" title="Add a task to their their list"></div>
                    <div><img src="img/list.png" alt="list" title="View their complete task list"></div>
                    <div><img src="img/reports.png" alt="list" title="View their reports"></div>
                </div>
                <div class="hidden-xs col-xs-12 col-sm-6 taskareainput">
                	<form>
                    	<textarea placeholder="What have you worked on today?"></textarea>
                        <button type="submit">Post</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- slide down end -->
    </div><!-- row -->
            <?php
		}
    ?>
</div><!-- main area -->

<!--div class="heightexpand">
</div-->


</body>
</html>
