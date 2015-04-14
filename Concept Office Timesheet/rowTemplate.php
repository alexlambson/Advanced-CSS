<div class="row availabilityRow">
    	<div class="col-xs-8 col-sm-4">
        	<div class="availabilityName">
        		<?php
					$randomNum = mt_rand(0, sizeof($names));
					echo $names[$randomNum];
				?>
            </div>
        </div>
        <div class="col-xs-4 col-sm-1">
        	<div class="availabilitySlider">
            	<div class="availabilitySliderLine"></div>
                <div class="availabilitySliderCircle notAvailable">O</div>
            </div>
        </div>
        <div class="hidden-xs col-sm-1 returning" title="When will they be returning">
        	<span>1:30</span>
        </div>
        <div class="hidden-xs col-sm-5 currentTask">
        	<div>
            	Work on virtual office until it is complete. Use ritalin if ADD starts kicking in. Make sure to drink plenty of water
            </div>
        </div>
        <div class="hidden-xs col-sm-1 expandArrow">
        	<img src="img/expand.png" alt="dots" title="Show tasks list">
        </div>
        <!-- slide down area -->
        <div class="extraEmployeeInfo col-xs-12">
        	<div class="row">
            	<div class="hidden-xs col-sm-2" role="Timer" title="This shows how long you have been clocked in and when you started">
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