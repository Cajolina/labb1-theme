<?php

function custom_pagination() {
	$allowed_tags = [
		'span' => [
			'class' => []
		],
		'a' => [
			'class' => [],
			'href' => [],
		]
	];

	$args = [
		'prev_text' => 'Föregående',
		'next_text' => 'Nästa',
		'before_page_number' => '<span class="page-numbers">',
		'after_page_number' => '</span>',
		'mid_size' => 1,
	];

	printf( '<nav class="navigation pagination">%s</nav>', wp_kses( paginate_links( $args ), $allowed_tags ) );

}
