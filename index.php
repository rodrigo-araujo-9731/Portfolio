<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Portfolio</title>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="ico-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Port<span>folio</span></a></div>
            <ul class="menu">
                <li><a class="li-btn" href="#home">Home</a></li>
                <li><a class="li-btn" href="#about">About</a></li>
                <li><a class="li-btn" href="#projects">Projects</a></li>
                <li><a class="li-btn" href="#skills">Skills</a></li>
                <li><a class="li-btn" href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="ico-list"></i>
                <i class="ico-close off"></i>
            </div>
        </div>
    </nav>

<!-- home section -->

    <section class="home" id="home">
        <div class="home-max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is </div>
                <div class="text-2">Rodrigo Araújo</div>
                <div class="text-3">And I'm a <span>Web Developer</span></div>
                <a href="#">Hire Me!</a>
            </div>
        </div>
    </section>

<!-- About section -->

    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="./Assets/pics/profile-pic.png" alt="profile-pic">
                </div>
                <div class="column right">
                    <div class="text">I'm Rodrigo and I'm a Web developer.</div>
                    <p>My experience is related to the 1 year long Full-Stack Web Development course I did in FLAG school.</p>
                    <p>In this course I learned Agile, SCRUM, UI/UX, HTML, CSS, JavaScript, Typescript, Angular, Git, MySQL, MongoDB, PHP,
                    NodeJS.</p>
                    <p>During this course I developed two projects, the first focused on front-end and the second focused on back-end.</p>
                    <a href="./Assets/CV/CV - EN - Rodrigo Araújo.pdf" target="_blank" rel="noopener noreferrer">Download CV</a>
                </div>
            </div>
        </div>
    </section>

<!-- Projects section -->

<section class="projects" id="projects">
    <div class="projects-max-width">
        <h2 class="title">My projects</h2>
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                    <div class="card">
                        <div class="box">
                            <img src="Assets/pics/DJVILL.png" alt="DJ VILL Website">
                            <div class="text">DJ VILL</div>
                            <p>DJ VILL website</p>
                        </div>
                    </div>
                    </li>
                    <li class="glide__slide">
                        <div class="card">
                            <div class="box">
                                <img src="Assets/pics/Icebreaker.png" alt="Icebreaker Website">
                                <div class="text">Icebreaker</div>
                                <p>Social Network</p>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="card">
                            <div class="box">
                                <a href="#contact">
                                    <i class="ico-plus"></i>
                                    <div class="text">More to come</div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><</button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">></button>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>

        </div>
    </div>
</section>



<!-- Skills section -->

    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills and experiences.</div>
                    <br>
                    <p class="text-date">December 2020 to January 2021</p>
                    <p class="text-title">Front-end Web Development Project</p>
                    <p class="text-details">Develop a static website for a DJ.</p>
                    <a href="https://github.com/MrSimba79/DJ_VILL" target="_blank" rel="noopener noreferrer">GitHub repository link</a>
                    <br><br><br>
                    <p class="text-date">March 2021 to May 2021</p>
                    <p class="text-title">Back-End Web Development Project</p>
                    <p class="text-details">Develop an API for a social network website.</p>
                    <a href="https://github.com/MrSimba79/Icebreaker" target="_blank" rel="noopener noreferrer">GitHub repository link</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>70%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Javascript</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>ReactJS</span>
                            <span>30%</span>
                        </div>
                        <div class="line react"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>30%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>NodeJS</span>
                            <span>20%</span>
                        </div>
                        <div class="line node"></div>
                    </div>
                </div>
            </div>
        </div>  
    </section>

<!-- Contact section -->

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <i class="ico-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Rodrigo Araújo</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="ico-marker"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Lisbon, Portugal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="ico-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">rodrigo.araujo.9731@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form method="post" action="./index.php">
                        <div class="fields">
                            <div class="field name">
                                <input name="Name" type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input name="Email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input name="Subject" type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea  name="Message" cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- Footer section -->

    <footer>
        <span><a href="https://www.linkedin.com/in/rodrigo-ara%C3%BAjo-428ba7105/" target="_blank" rel="noopener noreferrer">Rodrigo Araújo</a> <i class="ico-copyright"></i> 2021</span>
    </footer>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
    new Glide('.glide', {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        peek: 20,
        breakpoints: {
            1250: {
                perView: 2
            },
            880: {
                perView: 1
            }
        }
    }).mount()</script>
</body>
</html>

<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "rodrigo.araujo.9731@gmail.com";
    // $email_subject = "New form submissions";

    function problem($error)
    {
        echo "I am very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }


    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Subject']) ||
        !isset($_POST['Message'])
    ) {
        problem('I am sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $subject = $_POST['Subject']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($subject) < 2) {
        $error_message .= 'The Subject you entered do not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    // $email_message .= "Name: " . clean_string($name) . "\n";
    // $email_message .= "Email: " . clean_string($email) . "\n";
    // $email_message .= "Subject: " . clean_string($subject) . "\n";
    // $email_message .= "Message: " . clean_string($message) . "\n";

    $email_body =   'User Name: $name.\n'.
                    'User Email: $email.\n'.
                    'User Subject: $subject.\n'.
                    'User Message: $message.\n';

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email_to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // ini_set('smtp_port', 25);
    mail($email_to, $email_body, $headers);
?>

    <!-- include your success message below -->

    Thank you for contacting me. I will be in touch with you very soon.

<?php
}
?>