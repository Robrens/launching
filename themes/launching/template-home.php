<?php 
/* 
Template Name: Home 
Template Post Type : post, page, event
*/
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        <?php echo get_post_meta( get_the_ID(), "title", true) ?>
                    </h1>
                    <?php
                    $Realise_Date = get_post_meta( get_the_ID(), "Europe", true);
                    $Countdown = new DateTime($Realise_Date);
                    $date = date("m/d/Y h:i:s a", time());
                    $current = new DateTime($date);
                    $interval = $current->diff($Countdown);
                    
                    ?>
                    <h2>
                        <?php echo $interval->format("%d Days | %h Hours | %i Minutes : %s s"); ?>
                    </h2>
                    <button type="button" class="btn" id="form" data-toggle="modal" data-target="#exampleModal">News
                        Letter</button>
                    <p>Codi- hight quality Bootstrap HTML5 Coming Sool Landing Page template</p>
                    <p>Comes with fully responsive layout, Cool features, and Clean design</p>
                    <p>Template Handcrafted by <span>Codi n Camp</span></p>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="newsletter_email" class="col-form-label">Subscribe address:</label>
                            <input type="email" id="newsletter_email" name="newsletter_email" class="form-control" placeholder="Your mail address">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
get_footer();