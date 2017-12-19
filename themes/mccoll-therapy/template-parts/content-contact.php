<?php
/**
 * Template part for displaying contact info.
 *
 * @package McColl_Therapy_Theme
 */

?>

<h2 class="contact-banner">Contact Us</h2>
<section class="contact-wrapper  container">
  <div class="contact-form-info flexbox">
        <div class="contact-info-wrapper flex-item flex-half">
          <div class="contact-paragraph">
            <p>
              For any inquiries, please call or complete the form.
            </p>
          </div>
          <div class="contact-info">
            <h5>Contact Information:</h5>
            <a href="https://www.google.ca/maps/place/9707+110+St+%23312,+Delta,+BC+V4C/@49.1557601,-122.9204789,17z/data=!3m1!4b1!4m5!3m4!1s0x5485d9180122f993:0x60f3115c9097c34e!8m2!3d49.1557601!4d-122.9182902?q=%23312-9707+110+Street+NW&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiWkIrT5pTYAhUT9mMKHal_AcEQ_AUICigB" target="_blank">
                #312-9707 110 Street NW<br/>
                Edmonton, AB, T5K 2L9
            </a>
            <br>
            <br>
            <a href="mailto:ldmccoll@gmail.com">ldmccoll@gmail.com</a>
            <br/>
            <a href="tel:780-965-9906">780-965-9906</a>
          </div>
        </div>
        <div class="flex-item flex-half">
          <?php echo do_shortcode('[contact-form-7 id="12" title="Contact form 1"]'); ?>
        </div>
  </div>

</section><!-- .contact-wrapper -->