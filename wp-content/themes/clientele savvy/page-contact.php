<?php 
    get_header();
?>
     <section class="contact-us">
        <div class="contact-us-container container-fluid">
            <div class="contact-us-row ">
              <div class="contact-us-text">
                  <div class="contact-us-text-container">
                      <h1 class="header-primary cp-title">contact us</h1>
                      <p class="header-secondary cp-sub">
                        we are located at:
                      </p>
                      <p class="header-tertiary cp-sub">
                        39-C/virat nagar,near vrindavan lawn , kidwai nagar,kanpur
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
                                apply for a job
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow-black.svg");?>" alt="">
                                </span>
                        </button>
                  </form>
              </div>
            </div>
        </div>
    </section>
<?php 
    get_footer();
?>