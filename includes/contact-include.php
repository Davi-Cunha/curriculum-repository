<?php include("./includes/link-paths.php") ?>

<section>
    <div class="contact-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-header">
                        <h3 class="text-center">Contact me</h3>
                        <h1 class="text-center">I would love hear from you.</h1>
                        <p class="text-center">You can contact me via social medias listed above, phone or even e-mail.
                            Feel free to contact me, I'll get back to you as soon as possible.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <form method="post" action="./redirect.php">
                        <fieldset class="text-center">
                            <div class="form-field">
                                <input type="text" id="name" placeholder="Name" name="name"
                                       onfocus="borderColorFunction(this)" required>
                            </div>
                            <div class="form-field">
                                <input type="email" id="email" placeholder="E-mail" name="email"
                                       onfocus="borderColorFunction(this)" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="subject" placeholder="Subject" name="subject"
                                       onfocus="borderColorFunction(this)" required>
                            </div>
                            <div class="form-field">
                                <textarea id="message" placeholder="Message" name="message"
                                          onfocus="borderColorFunction(this)" required></textarea>
                            </div>
                            <div class="form-field">
                                <button type="submit" id="submit-button">Submit</button>
                            </div>
                            <script>
                                function borderColorFunction(x) {
                                    x.style.transition = "all .4s ease-in-out";
                                    x.style.borderBottomColor = "#cc005f";
                                }
                            </script>
                        </fieldset>
                    </form>
                </div>


                <?php
                $iContact = array("map-marker", "envelope", "phone");
                $h5Contact = array("Where to find me", "Email me", "Call me");
                $pContact = array("davipccunhasilva@hotmail.com", "+55 (31) 99937-9709");

                for($i = 0; $i < count($iContact); $i++) {
                    echo "
                        <div class=\"col-md-4\">
                            <div class=\"where-to-find text-center\">
                                <i class=\"fas fa-$iContact[$i]\"></i>
                                <h5>$h5Contact[$i]</h5>
                                <div class=\"info\">
                    ";

                    if($i == 0) {
                        echo "<p>Rua Patagônia, nº 983, Sion</p>
                              <p>Belo Horizonte</p>
                              <p>Minas Gerais</p>
                              <p>Brazil</p>";
                    } elseif ($i > 0) {
                        $j = $i - 1;
                        echo "<p>$pContact[$j]</p>";
                    }

                    echo "
                                </div>
                            </div>
                        </div>";
                }

                ?>
            </div>
        </div>
    </div>
</section>


