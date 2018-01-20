<?php include("./includes/link-paths.php") ?>

<section id="about">
    <div class="about-container">
        <div class="container">
            <div class="row">
                <header class="col-md-12 text-center about-header">
                    <h3>About</h3>
                    <h2>Let me introduce myself.</h2>
                </header>
                <div class="col-md-4">
                    <img class="profile-pic" src="img/profile-pic.png">
                </div>
                <div class="col-md-8">
                    <div class="about-me">
                        <p>I was a Brazilian kid from early 2000's. I grow up in a not that friendly hood to a kid to
                            play at the street. So, as expected, I grow up playing video games with my old friends and
                            trying to learn something about computers, that's where my passion for technology came from.
                            <br>I started to learning programming languages at 12 and when i was 15 years old i was full
                            capable to work as little freelancer programmer, doing little jobs just for fun.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-container">
                        <ul>

                            <?php
                            $strong = array("Profile", "Fullname:", "Birth Date:", "Job:", "Website:", "E-mail:", "Languages:");
                            $span = array("Here is a few things about me.", "Davi Cunha Silva", "October 19, 1996", "Freelancer, Website Designer, Web Developer, Back-End Developer, Front-End Developer, Video Editor", "davicunhasilva.me", "davipccunhasilva@hotmail.com", "English, Portuguese, French");

                            for ($i = 0; $i < count($strong); $i++) {
                                if ($i == 0) {
                                    echo "
                                    <header>
                                        <li>
                                            <strong>$strong[$i]</strong>
                                            <br>
                                            <p>$span[$i]</p>
                                        </li>
                                    </header>";
                                } else {
                                    echo "
                                    <li>
                                        <strong>$strong[$i]</strong>
                                        <br>
                                        <span>$span[$i]</span>
                                    </li>
                                    ";
                                }
                            }

                            ?>
                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skills-container">
                        <ul>
                            <?php
                            $strong = array("Skills", "Android", "Java", "HTML5", "CSS", "Bootstrap", "PHP", "JavaScript", "Python", "C", "C++", "Go", "Linux");
                            $progress_bar = array("android", "java", "html", "css", "bootstrap", "php", "javascript", "python", "c", "cplusplus", "go", "linux");

                            for ($i = 0, $j = 0; $i < count($strong); $i++) {
                                if ($i == 0) {
                                    echo "
                                    <header>
                                        <li>
                                            <strong>$strong[$i]</strong>
                                            <br>
                                            <p>Programing languages I known.</p>
                                        </li>
                                    </header>";
                                } else {
                                    echo "
                                    <li>
                                        <strong>$strong[$i]</strong>
                                        <br>
                                        <div class=\"progress-bar-container\">
                                            <div class=\"progress-bar-background\"></div>
                                            <div class=\"progress-bar-$progress_bar[$j]\"></div>
                                        </div>
                                    </li>";
                                    $j++;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="hire-me">
                                <a href="#">Hire me</a>
                            </div>
                        </div>
                        <div class="cv col-md-6">
                            <div class="cv">
                                <a href="../download/CirrículoDavi.docx" download="Davi's Curriculum">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>


    </div>
</section>



