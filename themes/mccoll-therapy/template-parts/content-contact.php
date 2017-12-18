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
            <a href="tel:780-965-9906">780-965-9906</a>
            <br/>
            <a href="mailto:ldmccoll@gmail.com">ldmccoll@gmail.com</a>
            <p>
                #312-9707 110 Street NW<br/>
                Edmonton, AB
                <br/>T5K 2L9
            </p>
          </div>
        </div>
        <div class="flex-item flex-half">
          <?php echo do_shortcode('[contact-form-7 id="12" title="Contact form 1"]'); ?>
        </div>
  </div>

</section><!-- .contact-wrapper -->