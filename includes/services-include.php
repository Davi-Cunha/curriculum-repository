<?php include("./includes/link-paths.php") ?>

<section>
    <div class="services-container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-header text-center">
                    <h3>Services</h3>
                    <h1>What Can I Do For You?</h1>
                    <p class="text-center">Here's a few things I can do for you or your company.</p>
                </div>
            </div>

            <?php
            $iService = array("mobile", "window-maximize", "terminal");
            $h4Service = array("Android Development", "Web Development", "Linux Administration");
            $pService = array("I've been working on android apps for about a year, doing some business apps. Most apps i've made was to back stage productivity for small corporations. Maybe I can be useful for you needs.", "I can develop cool responsive static websites based on open source frameworks like BootStrap, Materializecss, Parallax.js in HTML5,CSS3 & JavaScript. If you prefer I can also develop dynamic blogs using cms like WordPress, Blogger etc.I can also help with its hosting and DNS configurations.", "I have been using Linux since last 3 years as my primary OS and I am a pro in terms of Linux administration.I have used almost all the popular linux distros including Arch, Debian, Fedora, Tails etc. I am capable of doing advance configurations using scripts and cli. Also capable to create bots to automate some processes.");

            for ($i = 0; $i < count($iService); $i++) {
                echo "
                    <div class=\"col-md-4\">
                        <div class=\"text-center\">
                            <i class=\"fas fa-$iService[$i]\"></i>
                            <h4>$h4Service[$i]</h4>
                            <p>$pService[$i]</p>
                        </div>
                    </div>";
            }
            ?>

        </div>
    </div>
</section>



