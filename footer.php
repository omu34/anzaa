<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anzaa
 */

?>

<footer id="colophon" class="site-footer" style="background-color: #F8F0ED;">
    <div class="site-info text-center">

        <div class="justify-self-center">
            <p class="f-p">
                <?php
                printf(esc_html__('© Copyright KCIC 2023. All Rights Reserved.')); ?>

            </p>
        </div>



        <b><a href="<?php echo esc_url(__('https://wordpress.org/', 'anzaa')); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf(esc_html__('Proudly powered by %s', 'anzaa'), 'GrowthLab');
                ?>
            </a>
            <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Theme: %1$s by %2$s.', 'anzaa'), 'anzaa', '<a href="">@Bernard</a>');
            ?></b>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>

</html>