<?php
/*
Template Name: Template contacts неробоча
*/
?>

<?php
if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Будь ласка напишіть ваше імя.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    if(trim($_POST['contactPhone']) === '') {
        $phoneError = 'Будь ласка впишіть ваш телефон';
        $hasError = true;
    } else {
        $name = trim($_POST['contactPhone']);
    }

    if(trim($_POST['email']) === '')  {
        $emailError = 'Будь ласка напишіть ваш Email.';
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
        $emailError = 'Ви ввели неправильну адресу Email.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

    if(trim($_POST['comments']) === '') {
        $commentError = 'Будь ласка напишіть повідомлення.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }

    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = '[PHP Snippets] From '.$name;
        $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>

<?php
get_header();?>

<div class="middle row">
    <div id="primary" class="col-md-10 col-sm-12 content-area">
        <main id="main" class="site-main" role="main">
            <div class="row">
                <div class="col-xs-12">
                <div class="form_feedback">
                    <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                        <div>
                            <textarea class="comm_entry" name="comments" id="commentsText">Повідомлення</textarea>
                        </div>

                        <?php if($commentError != '') { ?>
                            <span class="error"><?=$commentError;?></span>
                        <?php } ?>

                        <div class="input_group">

                                <input type="text" name="contactName" id="contactName" value="ПІБ" />

                            <?php if($nameError != '') { ?>
                                <span class="error"><?=$nameError;?></span>
                            <?php } ?>


                                <input type="text" name="contactPhone" id="contactPhone" value="Телефон" />
                            <?php if($phoneError != '') { ?>
                                <span class="error"><?=$commentError;?></span>
                            <?php } ?>

                                <input type="text" name="email" id="email" value="Email" />

                            <?php if($emailError != '') { ?>
                                <span class="error"><?=$commentError;?></span>
                            <?php } ?>

                        </div>
                            <div class="submit">
                                <button type="submit">Відіслати</button>
                            </div>

                            <input type="hidden" name="submitted" id="submitted" value="true" />
                    </form>
                </div>

            <?php if(isset($emailSent) && $emailSent == true) { ?>

                        <div class="thanks">
                            <p>Thanks, your email was sent successfully.</p>
                        </div>

                <?php } else { ?>
                <?php the_content(); ?>
                <?php if(isset($hasError) || isset($captchaError)) { ?>

                    <p class="error">Sorry.<p>

            <?php }} ?>




                </div>
            </div>

            <div class="map" id="map"></div>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; // end of the loop. ?>

            <div id="social" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>

            </article><!-- #post-## -->
        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>

</div> <!--/row-->

<?php get_footer(); ?>


