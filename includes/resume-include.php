<?php include("./includes/link-paths.php")?>

<section>
    <div class="resume-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="resume-header">
                        <h3><?php echo $resumeHeaderH3?></h3>
                        <h1><?php echo $resumeHeaderH1?></h1>
                        <p><?php echo $resumeHeaderP?></p>
                    </div>
                </div>

                <?php

                echo "
                    <div class=\"col-md-12\">
                        <div class=\"timeline-wrap-header\">
                            <h4 class=\"text-center\">Work Experience</h4>
                        </div>
                    </div>";

                $workH4TimelineHeader = array("Freelancer", "Web Designer");
                $workPTimelineHeader = array("June 2015 - Present", "October 2017 - December 2017");
                $workITimelineWrapIcon = "fas fa-briefcase";

                $workH4TimelineOccupation = array("Source Manager Application Developer", "Nerit");
                $workPTimelineOccupation = array("Since I learned how to program when I was 12 years old I have got some freelancer jobs from
                            simple landing pages for some websites to whole source manager systems for little
                            companies.", "I got hired as a intern at Nerit, a brazilian software company. I worked as web designer as
                            well as infrastructure support, certifying that the company's hardware as whole was running
                            as it should.");

                for ($i = 0; $i < count($workH4TimelineHeader); $i++) {
                    echo "<div class=\"col-md-4\">
                              <div class=\"timeline-header\">
                                  <h4>$workH4TimelineHeader[$i]</h4>
                                  <p>$workPTimelineHeader[$i]</p>
                              </div>
                          </div>
                          <div class=\"col-md-1\">
                              <div class=\"timeline-wrap-icon\">
                                  <i class=\"$workITimelineWrapIcon\"></i>
                              </div>
                          </div>
                          <div class=\"col-md-5\">
                              <div class=\"timeline-occupation\">
                                  <h4>$workH4TimelineOccupation[$i]</h4>
                                  <p>$workPTimelineOccupation[$i]</p>
                              </div>
                          </div>
                          ";


                }

                echo "
                    <div class=\"col-md-12\">
                        <div class=\"timeline-wrap-header\">
                            <h4 class=\"text-center\">Education</h4>
                        </div>
                    </div>";

                $educationH4TimelineHeader = array("Computer Science Bachelor", "Computer Engineering Bachelor", "High School");
                $educationPTimelineHeader = array("January 2018 - Present", "January 2016 - December 2017", "January 2013 - December 2015");
                $educationITimelineWrapIcon = "fas fa-graduation-cap";

                $educationH4TimelineOccupation = array("PUC Minas", "FUMEC", "Edna Roriz High School");
                $educationPTimelineOccupation = array("Moved to Computer Science I'm still doing this course at the moment, planning to finish it at
                            2021.", "I started Computer Engineering course at FUMEC, which is more focused on hardware at 2016 but
                            I changed to Computer Science because I got more interested on software development than
                            hardware development over time. Another factor that made me decide to move to Computer
                            Science is due fact that I started a company and we needed a computer scientist as CTO
                            (me).", "I studied from the 10th to 12th grade at Edna Roriz High School, a brazilian international
                            school. Through my whole time at it I had the opportunity to meet people from all over the
                            world from different backgrounds and cultures.");

                for($i = 0; $i < count($educationH4TimelineHeader); $i++) {
                    echo "
                    <div class=\"col-md-4\">
                        <div class=\"timeline-header\">
                            <h4>$educationH4TimelineHeader[$i]</h4>
                            <p>$educationPTimelineHeader[$i]</p>
                        </div>
                    </div>
                    <div class=\"col-md-1\">
                        <div class=\"timeline-wrap-icon\">
                            <i class=\"$educationITimelineWrapIcon\"></i>
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"timeline-occupation\">
                            <h4>$educationH4TimelineOccupation[$i]</h4>
                            <p>$educationPTimelineOccupation[$i]</p>
                        </div>
                    </div>";
                }
                ?>
        </div>
    </div>


</section>


