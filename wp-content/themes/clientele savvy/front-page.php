<?php

    use PHPMailer\PHPMailer\PHPMailer;

  
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    if(isset($_POST['email']) && $_POST['email']!=''){
        $userFName = $_POST['first-name'];
        $userLName = $_POST['last-name'];
        $userEmail = $_POST['email'];
        $userNumber = $_POST['number'];

        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

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
            $mail->addAddress('aditya.gupin1950@gmail.com');     //Add a recipient            //Name is optional


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = "From"." ".$userName.":".$userNumber;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {
        }
    }
}
   
    get_header();
?>
<!-- start of home section -->
    <section class="home ">
        <div class="container-fluid home-container">
            <div class="row">
            <div class="home-col__text col-12">
                <h1 class="header-title">
                    apply for a job where it counts
                </h1>
                <div class="sub-container">
                    <p class="text-para home-text">
                    Clientele savvy is an international BPO, which has been in this sector and is providing value for a long time. We are looking forward to working with you.
                    </p>
                    <button class="btn btn-red">
                        <a href="<?php echo site_url('/contact');?>">
                            apply for a job
                            <span class="arrow">
                                <img src="<?php echo get_theme_file_uri("/image/arrow-white.svg");?>" alt="">
                            </span>
                        </a>
                    </button>
                </div>
            </div>
            <div class="home-col__img col-12">
                <img class="home-img" src="<?php echo get_theme_file_uri("/image/home-img.png"); ?>" alt="">
            </div>
            </div>
        </div>
    </section>
<!-- end of  home section -->
<!-- start of wl section -->

    <section class="work-ladder">
        <div class="container-fluid work-ladder-section">
            <div class="row work-ladder-row">
                <div class="work-ladder-col__text col-12 col-lg-6">
                    <div class="wl-text-container">
                        <h1 class="header-primary">
                            Work yourself up the ladder and see the results
                        </h1>
                        <p class="text-para">
                            Clientele savvy is an Indian business generation and 
                            development unit of a UK Based company, which suggests 
                            financial aid to UK residents and help them manage their
                            unsecured debts. We based on their income and family size
                            suggest them the best financial programmes to help them 
                            get back in the driver’s seat of life
                        </p>
                        <button class="btn btn-lined__dark">
                            <a href="<?php echo site_url('/about'); ?>">
                                read more
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow-black.svg");?>" alt="">
                                </span>
                            </a>
                        </button>
                    </div>
                </div>
                <div class="work-ladder-col__img col-12 col-lg-6">
                    <img class="wl-image" src="<?php echo get_theme_file_uri('/image/wl-image.png'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- end of wl section -->
<!-- start of services -->
    <section class="services">
        <div class="container-fluid services-container">
            <div class="row services-row">
                <div class="col-12 services-col services-col__text">
                    <h1 class="header-primary">incentive and allowances for you</h1>
                    <p class="text-para">
                        check out the incentive and allowances that we provide you in clientele savvy
                    </p>
                </div>
                <div class="col-12 services-col services-col__grid">
                    <div class="grid">
                        <div class="grid-items grid-items__1">
                            <div class="grid-items__img">
                                <img src="<?php echo get_theme_file_uri("./image/incentive.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">Amazing monthly & Weekly Incentives</h1>
                                    <p class="text-para">
                                        You will get amazing incentives based on your sales at the end of the month and also weekly incentives based on your performance
                                    </p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="grid-items grid-items__2">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/salary.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">Generous Salary Packages</h1>
                                    <p class="text-para">
                                        we provide you generous salary according to your experience and potential
                                    </p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="grid-items grid-items__3">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/Group.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">Salary Increment in every six months</h1>
                                    <p class="text-para">
                                        you can get your salary incremented in every six months, being one of the many perks of staying with the company
                                    </p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="grid-items grid-items__4">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/holiday.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">Saturdays & Sundays are complete off</h1>
                                    <p class="text-para">
                                        You will be able to enjoy your weekends as Saturday and Sunday will be completely off for you.  
                                    </p>
                                </div>
                                <div class="line"></div> 
                            </div>
                        </div>
                        <div class="grid-items grid-items__5">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/cab.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">1500 INR Attendance Allowance</h1>
                                    <p class="text-para">
                                        if you don’t have any personal means of transport, we have CAB pickup and drop facility for you
                                    </p>
                                </div>
                                <div class="line"></div>
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
               <div class="col-12 work-item work-item__1">
                   <div class="work-item__text work-item__text__1">
                       <div class="work-item__text-container">
                            <h1 class="header-secondary">being with us is fun</h1>
                            <p class="text-para">
                                we as a company believe in discipline but there is no issue with having fun, because nobody likes to work at a boring place even us.
                            </p>
                            <button class="btn btn-lined">
                                <a href="<?php echo site_url('/contact'); ?>">
                                apply for a job
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow-red.svg");?>" alt="">
                                </span>
                                </a>
                            </button>
                        </div>
                    </div>
                   <div class="work-item__img work-item__img__1"><img src="<?php echo get_theme_file_uri("/image/slides-vector-1.svg"); ?>" alt=""></div>
               </div>
               <div class="col-12 work-item  work-item__rev work-item__2">
                   <div class="work-item__img work-item__img__2"><img src="<?php echo get_theme_file_uri("/image/slides-vector-2.svg"); ?>" alt=""></div>
                   <div class="work-item__text work-item__text__2">
                       <div class="work-item__text-container">
                            <h1 class="header-secondary">enjoy working with us</h1>
                            <p class="text-para">
                                We make work place fun, so that you can come back every morning with a fresh mind and willingness to work
                            </p>
                            <button class="btn btn-lined">
                                <a href="<?php echo site_url('/contact'); ?>">
                                apply for a job
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow-red.svg");?>" alt="">
                                </span>
                                </a>
                            </button>
                        </div>
                    </div>
               </div>
               <div class="col-12 work-item work-item__3">
                   <div class="work-item__text work-item__text__3">
                       <div class="work-item__text-container">
                            <h1 class="header-secondary">get great incentive</h1>
                            <p class="text-para">
                                you get great no of incentive and allowance such as monthly incentive, weekly incentive, 1500 INR attendance allowance, food allowance and so much more
                            </p>
                            <button class="btn btn-lined">
                                <a href="<?php echo site_url('/contact'); ?>">
                                apply for a job
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow-red.svg");?>" alt="">
                                </span>
                                </a>
                            </button>
                        </div>
                    </div>
                   <div class="work-item__img work-item__img__3"><img src="<?php echo get_theme_file_uri("/image/slides-vector-3.svg"); ?>" alt=""></div>
               </div>
            </div>
        </div>
    </section>
<!-- end of work environment -->
<!-- start of COA -->
<section class="coa">
    <div class="container-fluid coa-container">
        <div class="coa-text">
            <h1 class="coa-text-primary header-primary"> get a job </h1>
            <p class="coa-text-para text-para">
                Get a job at clientele savvy by either contacting us at or by submitting you details through are contact form
            </p>
            <button class="btn btn-black">
                <a href="<?php echo site_url('/contact'); ?>">
                submit
                    <span class="arrow">
                        <img src="<?php echo get_theme_file_uri("/image/arrow-white.svg");?>" alt="">
                    </span>
                </a>
            </button>
        </div>
</div>
</section>
<!-- end of COA -->
<!-- start of contact us -->
    <section class="contact-us">
        <div class="contact-us-container container-fluid">
            <div class="contact-us-row ">
              <div class="contact-us-text">
                  <div class="contact-us-text-container">
                      <h1 class="header-primary">contact to work with us</h1>
                      <p class="text-para">
                        You can contact us either by calling us, emailing us or by submitting us your details through our contact form, you can also contact us through or social media handles
                      </p>
                  </div>
              </div>
              <div class="contact-us-form">
                  <form action="" method="post" class="form">
                      <input class="text-input" name="first-name" type="text" placeholder="first name" id="first-name">
                      <input class="text-input" name="last-name" type="text" placeholder="last name" id="last-name">
                      <input class="text-input" name="number" type="text" placeholder="contact number" id="number">
                      <input class="text-input" name="email" type="text" placeholder="email" id="email" >
                      <button class="btn btn-lined__dark" id="btn">
                                submit
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow-black.svg");?>" alt="">
                                </span>
                        </button>
                  </form>
              </div>
            </div>
        </div>
    </section>
<!-- end of contact us -->

<?php
    get_footer();
?>