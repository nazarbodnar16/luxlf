<footer id="footer">
    <div class="footer-container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="text-block">
                        <p><?php echo get_field('footer_text', 'option'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 clearfix">
                    <nav class="footer-nav">
                        <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'footer_menu_top')); ?>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="text-block">
                        <p><?php echo get_field('footer_copyright_info', 'option'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 clearfix">
                    <nav class="footer-nav">
                        <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'footer_menu_bottom')); ?>
                        <span class="by">by Ai</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>