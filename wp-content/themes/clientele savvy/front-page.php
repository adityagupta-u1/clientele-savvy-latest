<?php

    use PHPMailer\PHPMailer\PHPMailer;

  
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userNumber = $_POST['number'];

    try {
        //Server settings       
        $mail->isSMTP();   
        $mail-> SMTPAuth = false;                         
        $mail->Port      = 25;
        $mail->Host      = 'localhost';
        $mail->Username  = "clientelesavvy@clientelesavvy.com";
        $mail->Password  = "8381923988@a";

        $mail->IsSendmail();                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('clientelesavvy@clientelesavvy.com','clientelesavvy');
        $mail->addAddress('beenagupta934@gmail.com');     //Add a recipient            //Name is optional


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
    }
   
    get_header();
?>
<!-- start of home section -->
    <section class="home margin-bottom-big">
        <div class="container-fluid home-container">
            <div class="row">
            <div class="home-col__text col-12">
                <h1 class="header-title">
                    <span class="italics">apply</span> for a job where it <span class="italics">counts</span>
                </h1>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Assumenda et nihil, libero quia atque nulla fugiat eveniet dolores vitae 
                    accusamus laborum dolor vero, alias, deserunt consequuntur at! Quidem.
                </p>
                <button class="btn btn-lined">
                    <a href="#">
                        apply for a job
                        <span class="arrow">
                            <img src="<?php echo get_theme_file_uri("/image/arrow.svg");?>" alt="">
                        </span>
                    </a>
                </button>
            </div>
            <div class="home-col__img col-12">
                <img class="home-img" src="<?php echo get_theme_file_uri("/image/home-img.svg"); ?>" alt="">
            </div>
            </div>
        </div>
    </section>
<!-- end of  home section -->
<!-- start of contact section -->
    <section class="contact">
        <div class="container-fluid contact-section">
            <div class="row contact-row">
                <div class="contact-col__img col-xl-6 col-lg-12">
                    <img class="contact-col__img contact-img" src="<?php echo get_theme_file_uri("/image/contact-img.svg"); ?>" alt="">
                </div>
                <div class="contact-col__text col-xl-6 col-lg-12">
                    <div class="contact-text-container">
                        <h1 class="header-primary">join the family of clientele savvy</h1>
                        <p class="text-para">Lorem ipsum dolor sit amet, consectetur 
                            adipisicing elit. Omnis assumenda aspernatur modi tenetur dolor 
                            rem possimus!
                        </p>
                    </div>
                    <form action="" method="post" class="form">
                        <input id="name" name="name" class="form-input text-input" type="text" placeholder="Name"  maxlength="24">
                        <input id="number" name="number" class="form-input text-input" type="text" placeholder="Contact" pattern="[0-9]{10}" maxlength="10">
                        <input id="email" name="email" class="form-input text-input" type="email" placeholder="Email" maxlength="40">
                        <button id="btn" class="btn btn-lined">
                            <a href="#">submit</a>
                            <img src="<?php echo get_theme_file_uri("/image/arrow.svg"); ?>" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- end of contact section -->
<!-- start of services -->
    <section class="services">
        <div class="container-fluid services-container">
            <div class="row services-row">
                <div class="col-12 services-col services-col__text">
                    <h1 class="header-primary">incentive and allowances</h1>
                </div>
                <div class="col-12 services-col services-col__grid">
                    <div class="grid">
                        <div class="grid-items grid-items__1">
                            <div class="grid-items__img">
                                <img src="<?php echo get_theme_file_uri("./image/incentive-1.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">Amazing monthly & Weekly Incentives</h1>
                                    <p class="text-para">Lorem, ipsum dolor sit amet consectetur adipisicing 
                                        elit. Quaerat sequi quam quas itaque vitae vero?
                                    </p>
                                </div>
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow.svg");?>" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="grid-items grid-items__2">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/salary.png"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">Generous Salary Packages</h1>
                                    <p class="text-para">Lorem, ipsum dolor sit amet consectetur adipisicing 
                                        elit. Quaerat sequi quam quas itaque vitae vero?
                                    </p>
                                </div>
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow.svg");?>" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="grid-items grid-items__3">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/salary_increment.jpg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">Salary Increment in every six months</h1>
                                    <p class="text-para">Lorem, ipsum dolor sit amet consectetur adipisicing 
                                        elit. Quaerat sequi quam quas itaque vitae vero?
                                    </p>
                                </div>
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow.svg");?>" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="grid-items grid-items__4">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/holiday.jpg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">Saturdays & Sundays are complete off</h1>
                                    <p class="text-para">Lorem, ipsum dolor sit amet consectetur adipisicing 
                                        elit. Quaerat sequi quam quas itaque vitae vero?
                                    </p>
                                </div>
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow.svg");?>" alt="">
                                </span> 
                            </div>
                        </div>
                        <div class="grid-items grid-items__5">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/attendance_allowance.jpg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">1500 INR Attendance Allowance</h1>
                                    <p class="text-para">Lorem, ipsum dolor sit amet consectetur adipisicing 
                                        elit. Quaerat sequi quam quas itaque vitae vero?
                                    </p>
                                </div>
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow.svg");?>" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="grid-items grid-items__6">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/cab.jpg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">1500 INR Attendance Allowance</h1>
                                    <p class="text-para">Lorem, ipsum dolor sit amet consectetur adipisicing 
                                        elit. Quaerat sequi quam quas itaque vitae vero?
                                    </p>
                                </div>
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow.svg");?>" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- end of services -->
<!-- start of work environment -->
    <section class="work">
        <div class="container-fluid work-container">
            <div class="row work-row">
                <div class="col-6 work-col work-col__text">
                        <h1 class="header-primary">we offer you something more than salary</h1>
                        <ul class="work-list">
                            <li class="work-list-items">
                                <span class="list-vector">
                                    <img src="<?php echo get_theme_file_uri("./image/equality-vector.svg"); ?>" alt="">
                                </span> 
                                we believe in gender equality
                            </li>
                            <li class="work-list-items">
                                <span class="list-vector">
                                    <img src="<?php echo get_theme_file_uri("./image/oppurtunity-vector.svg"); ?>" alt="">
                                </span>
                                endless opportunity to work yourself up the ladder
                            </li>
                            <li class="work-list-items">
                                <span class="list-vector">
                                    <img src="<?php echo get_theme_file_uri("./image/friendly-vector.svg"); ?>" alt="">
                                </span>
                                we keep a friendly work environment
                            </li>
                        </ul>
                        <div class="btn btn-yellow">
                            <a href="#" class="text-btn">
                                apply for a job
                            </a>
                        </div>
                </div>
                <div class="col-6 work-col work-col__img">
                    <img class="work-img__background work-img__background-1 " src="<?php echo get_theme_file_uri("/image/work-1__background.png"); ?>" alt="">
                    <img class="work-img__background work-img__background-2" src="<?php echo get_theme_file_uri("/image/work-1__background.png"); ?>" alt="">
                    <img class="work-img__background work-img__background-3" src="<?php echo get_theme_file_uri("/image/work-1__background.png"); ?>" alt="">
                    <img class="work-img__background work-img__background-4" src="<?php echo get_theme_file_uri("/image/work-1__background.png"); ?>" alt="">
                    <img class="work-img__background work-img__background-5" src="<?php echo get_theme_file_uri("/image/work-1__background.png"); ?>" alt="">
                    <img class="work-img" src="<?php echo get_theme_file_uri("/image/work-1.png"); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- end of work environment -->
<!-- start of contact us -->
    <section class="contact-us">
        <div class="contact-us-container container-fluid">
            <div class="contact-us-row row">
                <div class="contact-us-col-text col-5">
                    <div class="text-container">
                        <h1 class="header-primary">contact us for job opportunities</h1>
                        <p class="text-para">Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Quae error aut reiciendis maiores 
                            tempora omnis accusamus similique officiis fugiat rem!
                        </p>
                    </div>
                    <form action="#" method="post" class="form">
                        <input class="form-input text-input" type="text" placeholder="Name"  maxlength="24">
                        <input class="form-input text-input" type="text" placeholder="Contact" pattern="[0-9]{10}" maxlength="10">
                        <input class="form-input text-input" type="email" placeholder="Email" maxlength="40">
                        <button class="btn btn-lined">
                            <a href="#">submit</a>
                            <img src="<?php echo get_theme_file_uri("/image/arrow.svg"); ?>" alt="">
                        </button>
                    </form>
                </div>
                <div class="contact-us-col-img col-7">
                    <img class="contact-us-background" src="<?php echo get_theme_file_uri("./image/contact-us-background.svg"); ?>" alt="">
                    <img class="contact-us-img" src="<?php echo get_theme_file_uri("./image/contact-us-img.jpg"); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- end of contact us -->

<?php
    get_footer();
?>