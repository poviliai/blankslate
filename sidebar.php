<aside id="sidebar">
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <div id="primary" class="widget-area">
        <!-- <ul class="xoxo">
        </ul> -->
        <?php dynamic_sidebar( 'primary-widget-area' ); ?>
    </div>
    <?php endif; ?>
</aside>