<?php
// Add custom Theme Functions here
remove_filter( ‘the_content’, ‘wpautop’ );
remove_filter( ‘the_excerpt’, ‘wpautop’ );
