add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_64e504efda65e',
	'title' => 'Blog Index Settings',
	'fields' => array(
		array(
			'key' => 'field_64e505ce6e21c',
			'label' => 'Introduction',
			'name' => 'introduction',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_64e504f0d8e04',
			'label' => 'Featured Posts',
			'name' => 'featured_posts',
			'aria-label' => '',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
			),
			'post_status' => array(
				0 => 'publish',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'taxonomy',
			),
			'return_format' => 'object',
			'min' => '',
			'max' => 5,
			'elements' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '18',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64e761ce361d6',
	'title' => 'Blog Post Header',
	'fields' => array(
		array(
			'key' => 'field_64e761ce0dec6',
			'label' => 'Lead In Copy',
			'name' => 'lead_in_copy',
			'aria-label' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64e4fe6fa7f62',
	'title' => 'Blog Post Meta',
	'fields' => array(
		array(
			'key' => 'field_64e4fe7010b4f',
			'label' => 'Author(s) Attribution',
			'name' => 'authorship',
			'aria-label' => '',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'person',
			),
			'post_status' => '',
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'return_format' => 'object',
			'min' => '',
			'max' => '',
			'elements' => '',
		),
		array(
			'key' => 'field_64ef7f01ed360',
			'label' => 'Limit Category Visibility?',
			'name' => 'limit_category_visibility',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => 'When shown across the site, in all instances except the Full Post itself, hide all other categories, except selected.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_64ef803fa62c7',
			'label' => 'Limit Category Display To',
			'name' => 'limit_category_display',
			'aria-label' => '',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64ef7f01ed360',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'category',
			'add_term' => 0,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'id',
			'field_type' => 'checkbox',
			'multiple' => 0,
			'allow_null' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64e61a2347108',
	'title' => 'Notice Settings',
	'fields' => array(
		array(
			'key' => 'field_64e61a2301304',
			'label' => 'Type',
			'name' => 'type',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'deactivated' => 'Deactivated',
				'top-of-site' => 'Top of Site (banner)',
				'primary-menu' => 'Primary Menu (for summit)',
			),
			'default_value' => 'deactivated',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_64e61c57d938e',
			'label' => 'Message',
			'name' => 'message',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64e61a2301304',
						'operator' => '!=',
						'value' => 'top-of-site',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64e61d5aa57ef',
			'label' => 'Message',
			'name' => 'message_rich_text',
			'aria-label' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64e61a2301304',
						'operator' => '==',
						'value' => 'top-of-site',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array(
			'key' => 'field_64e61c8ad1036',
			'label' => 'URL',
			'name' => 'url',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64e61a2301304',
						'operator' => '==',
						'value' => 'primary-menu',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'notice',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64f1fb809e42b',
	'title' => 'Page Sidebar Meta',
	'fields' => array(
		array(
			'key' => 'field_64f1fbe25650c',
			'label' => 'Display Sidebar?',
			'name' => 'display_sidebar',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => 'some Pages are special and will not display a Sidebar even if this box is checked.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Enable',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_64f8a85cd3d78',
			'label' => 'Menu',
			'name' => 'set_menu',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '<strong>default:</strong> show child pages </br>
<strong>from parent:</strong> inherit parent\'s setting </br>
<strong>custom:</strong> set to menu </br>',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64f1fbe25650c',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'default' => 'default',
				'from parent' => 'from parent',
				'custom' => 'custom',
			),
			'default_value' => 'default',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_64f8a04b383d2',
			'label' => 'Menu Title',
			'name' => 'menu_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64f1fbe25650c',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_64f8a85cd3d78',
						'operator' => '==',
						'value' => 'custom',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64f1fb80c6edf',
			'label' => 'Display Menu',
			'name' => 'display_menu',
			'aria-label' => '',
			'type' => 'menu-chooser',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64f1fbe25650c',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_64f8a85cd3d78',
						'operator' => '==',
						'value' => 'custom',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'post_template',
				'operator' => '!=',
				'value' => 'page_static.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64ef8e67ee8e7',
	'title' => 'Person Post Meta',
	'fields' => array(
		array(
			'key' => 'field_64ef8e68e47aa',
			'label' => 'Position Title(s)',
			'name' => 'position_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'person',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64f0d7c077e12',
	'title' => 'Program Header',
	'fields' => array(
		array(
			'key' => 'field_64f0dfa085801',
			'label' => 'Sub Heading',
			'name' => 'sub_heading',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64f0d7c051722',
			'label' => 'Introduction',
			'name' => 'introduction',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'program',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64f0d1ddda5fa',
	'title' => 'Program Meta',
	'fields' => array(
		array(
			'key' => 'field_64f0d9e179827',
			'label' => 'Nested Programs Lead In Copy',
			'name' => 'nested_programs_lead_in_copy',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64f0d1dd50269',
			'label' => 'Nested Programs',
			'name' => 'nested_programs',
			'aria-label' => '',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'program',
			),
			'post_status' => '',
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'taxonomy',
			),
			'return_format' => 'object',
			'min' => '',
			'max' => '',
			'elements' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'program',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64fa22e794968',
	'title' => 'Static Page Settings',
	'fields' => array(
		array(
			'key' => 'field_64fa22e7b51c4',
			'label' => 'Static Content',
			'name' => '',
			'aria-label' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'This page is rendered directly from a custom page template file and can\'t be edited by the WordPress editor directly. Changes to this page must be made via code.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_64fa233659642',
			'label' => 'Static Template Name',
			'name' => 'static_template',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => 'hyphenated name to look for. EX: 2023-campaign',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page_static.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_64e6144d95eb4',
	'title' => 'Team Index Settings',
	'fields' => array(
		array(
			'key' => 'field_64e615afa27aa',
			'label' => 'Introduction',
			'name' => 'introduction',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_64e6144e5fac5',
			'label' => 'Staff Listing',
			'name' => 'staff_listing',
			'aria-label' => '',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'person',
			),
			'post_status' => array(
				0 => 'publish',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'return_format' => 'object',
			'min' => '',
			'max' => '',
			'elements' => '',
		),
		array(
			'key' => 'field_64e614c0fdee9',
			'label' => 'Board Listing',
			'name' => 'board_listing',
			'aria-label' => '',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'person',
			),
			'post_status' => array(
				0 => 'publish',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'return_format' => 'object',
			'min' => '',
			'max' => '',
			'elements' => '',
		),
		array(
			'key' => 'field_64e614e2ec0d0',
			'label' => 'Emeritus Listing',
			'name' => 'emeritus_listing',
			'aria-label' => '',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'person',
			),
			'post_status' => array(
				0 => 'publish',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'return_format' => 'object',
			'min' => '',
			'max' => '',
			'elements' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '157',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

add_action( 'init', function() {
	register_post_type( 'campaign', array(
	'labels' => array(
		'name' => 'Campaigns',
		'singular_name' => 'Campaign',
		'menu_name' => 'Campaigns',
		'all_items' => 'All Campaigns',
		'edit_item' => 'Edit Campaign',
		'view_item' => 'View Campaign',
		'view_items' => 'View Campaigns',
		'add_new_item' => 'Add New Campaign',
		'new_item' => 'New Campaign',
		'parent_item_colon' => 'Parent Campaign:',
		'search_items' => 'Search Campaigns',
		'not_found' => 'No Campaigns found',
		'not_found_in_trash' => 'No Campaigns found in Trash',
		'archives' => 'Campaign Archives',
		'attributes' => 'Campaign Attributes',
		'insert_into_item' => 'Insert into campaign',
		'uploaded_to_this_item' => 'Uploaded to this campaign',
		'filter_items_list' => 'Filter campaigns list',
		'filter_by_date' => 'Filter campaigns by date',
		'items_list_navigation' => 'Campaigns list navigation',
		'items_list' => 'Campaigns list',
		'item_published' => 'campaign published.',
		'item_published_privately' => 'campaign published privately.',
		'item_reverted_to_draft' => 'campaign reverted to draft.',
		'item_scheduled' => 'campaign scheduled.',
		'item_updated' => 'campaign updated.',
		'item_link' => 'campaign Link',
		'item_link_description' => 'A link to a campaign.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'delete_with_user' => false,
) );

	register_post_type( 'event', array(
	'labels' => array(
		'name' => 'Events',
		'singular_name' => 'Event',
		'menu_name' => 'Events',
		'all_items' => 'All Events',
		'edit_item' => 'Edit Event',
		'view_item' => 'View Event',
		'view_items' => 'View Events',
		'add_new_item' => 'Add New Event',
		'new_item' => 'New Event',
		'parent_item_colon' => 'Parent Event:',
		'search_items' => 'Search Events',
		'not_found' => 'No events found',
		'not_found_in_trash' => 'No events found in Trash',
		'archives' => 'Event Archives',
		'attributes' => 'Event Attributes',
		'insert_into_item' => 'Insert into event',
		'uploaded_to_this_item' => 'Uploaded to this event',
		'filter_items_list' => 'Filter events list',
		'filter_by_date' => 'Filter events by date',
		'items_list_navigation' => 'Events list navigation',
		'items_list' => 'Events list',
		'item_published' => 'Event published.',
		'item_published_privately' => 'Event published privately.',
		'item_reverted_to_draft' => 'Event reverted to draft.',
		'item_scheduled' => 'Event scheduled.',
		'item_updated' => 'Event updated.',
		'item_link' => 'Event Link',
		'item_link_description' => 'A link to a event.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'taxonomies' => array(
		0 => 'category',
	),
	'delete_with_user' => false,
) );

	register_post_type( 'notice', array(
	'labels' => array(
		'name' => 'Notices',
		'singular_name' => 'Notice',
		'menu_name' => 'Notices',
		'all_items' => 'All Notices',
		'edit_item' => 'Edit Notice',
		'view_item' => 'View Notice',
		'view_items' => 'View Attention',
		'add_new_item' => 'Add New Notice',
		'new_item' => 'New Notice',
		'parent_item_colon' => 'Parent Notice:',
		'search_items' => 'Search Attention',
		'not_found' => 'No attention found',
		'not_found_in_trash' => 'No attention found in Trash',
		'archives' => 'Notice Archives',
		'attributes' => 'Notice Attributes',
		'insert_into_item' => 'Insert into notice',
		'uploaded_to_this_item' => 'Uploaded to this notice',
		'filter_items_list' => 'Filter attention list',
		'filter_by_date' => 'Filter attention by date',
		'items_list_navigation' => 'Attention list navigation',
		'items_list' => 'Attention list',
		'item_published' => 'Notice published.',
		'item_published_privately' => 'Notice published privately.',
		'item_reverted_to_draft' => 'Notice reverted to draft.',
		'item_scheduled' => 'Notice scheduled.',
		'item_updated' => 'Notice updated.',
		'item_link' => 'Notice Link',
		'item_link_description' => 'A link to a notice.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'taxonomies' => array(
		0 => 'placement',
	),
	'delete_with_user' => false,
) );

	register_post_type( 'person', array(
	'labels' => array(
		'name' => 'People',
		'singular_name' => 'Person',
		'menu_name' => 'People',
		'all_items' => 'All People',
		'edit_item' => 'Edit Person',
		'view_item' => 'View Person',
		'view_items' => 'View People',
		'add_new_item' => 'Add New Person',
		'new_item' => 'New Person',
		'parent_item_colon' => 'Parent Person:',
		'search_items' => 'Search People',
		'not_found' => 'No people found',
		'not_found_in_trash' => 'No people found in Trash',
		'archives' => 'Person Archives',
		'attributes' => 'Person Attributes',
		'insert_into_item' => 'Insert into person',
		'uploaded_to_this_item' => 'Uploaded to this person',
		'filter_items_list' => 'Filter people list',
		'filter_by_date' => 'Filter people by date',
		'items_list_navigation' => 'People list navigation',
		'items_list' => 'People list',
		'item_published' => 'Person published.',
		'item_published_privately' => 'Person published privately.',
		'item_reverted_to_draft' => 'Person reverted to draft.',
		'item_scheduled' => 'Person scheduled.',
		'item_updated' => 'Person updated.',
		'item_link' => 'Person Link',
		'item_link_description' => 'A link to a person.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'delete_with_user' => false,
) );

	register_post_type( 'program', array(
	'labels' => array(
		'name' => 'Programs',
		'singular_name' => 'Program',
		'menu_name' => 'Programs',
		'all_items' => 'All Programs',
		'edit_item' => 'Edit Program',
		'view_item' => 'View Program',
		'view_items' => 'View Programs',
		'add_new_item' => 'Add New Program',
		'new_item' => 'New Program',
		'parent_item_colon' => 'Parent Program:',
		'search_items' => 'Search Programs',
		'not_found' => 'No programs found',
		'not_found_in_trash' => 'No programs found in Trash',
		'archives' => 'Program Archives',
		'attributes' => 'Program Attributes',
		'insert_into_item' => 'Insert into program',
		'uploaded_to_this_item' => 'Uploaded to this program',
		'filter_items_list' => 'Filter programs list',
		'filter_by_date' => 'Filter programs by date',
		'items_list_navigation' => 'Programs list navigation',
		'items_list' => 'Programs list',
		'item_published' => 'Program published.',
		'item_published_privately' => 'Program published privately.',
		'item_reverted_to_draft' => 'Program reverted to draft.',
		'item_scheduled' => 'Program scheduled.',
		'item_updated' => 'Program updated.',
		'item_link' => 'Program Link',
		'item_link_description' => 'A link to a program.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'taxonomies' => array(
		0 => 'category',
	),
	'delete_with_user' => false,
) );
} );

