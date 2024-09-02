<?php
/**
 * Title: Footer default
 * Slug: littleboxes/footer-default
 * Categories: littleboxes-footers
 * Keywords: footer
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","metadata":{"name":"Footer credits"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color has-x-small-font-size">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>  •
<?php echo esc_html__('Powered by WordPress', 'littleboxes'); ?> &amp; <a href="https://timgreen.ws" target="_blank"><?php echo esc_html__('Little Boxes', 'littleboxes'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","metadata":{"name":"Links"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px","letterSpacing":"0px"}},"textColor":"secondary"} -->
<p class="has-text-align-right has-secondary-color has-text-color has-link-color"
            style="font-size:14px;letter-spacing:0px"><a href="#" data-type="page"
                data-id="1865"><?php echo esc_html__('X', 'littleboxes'); ?></a> • <a href="#" data-type="page"
                data-id="1865"><?php echo esc_html__('Instagram', 'littleboxes'); ?></a> • <a href="#" data-type="page"
                data-id="1865"><?php echo esc_html__('Facebook', 'littleboxes'); ?></a> •  <a href="#"
                data-type="page" data-id="1865"><?php echo esc_html__('Email', 'littleboxes'); ?></a>
            </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->