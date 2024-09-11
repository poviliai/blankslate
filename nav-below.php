<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s older', 'zsd' ), '<span class="meta-nav">&larr;</span>' ),
'next_text' => sprintf( esc_html__( 'newer %s', 'zsd' ), '<span class="meta-nav">&rarr;</span>' )
);
the_posts_navigation( $args ); ?>