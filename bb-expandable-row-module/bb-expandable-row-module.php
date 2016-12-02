<?php

function bb_er_row_extender( $form, $id ) {
	if ( 'row' == $id ) {
		$form['tabs']['bber_expandable'] = array(
			'title'     => __('Expandable Row', 'bb-expandable-row'),
			'sections'  => array(
				'expanbable_options'	=> array(
					'title'		=> '',
					'fields'	=> array(
						'is_enable'	=> array(
							'type'	=> 'select',
							'label'	=> __( 'Expandable Row?' ,'bb-expandable-row'),
							'options'	=> array(
								'yes'	=> __( 'Yes' ,'bb-expandable-row'),
								'no'	=> __( 'No' , 'bb-expandable-row')
							),
							'default'	=> 'no',
							'toggle'	=> array(
								'yes'	=> array(
									'sections'	=> array('er_general','er_before_click','er_after_click','er_typography','er_padding'),
								)
							),
						),
					)
				),// expandable option
				'er_general'	=> array(
					'title'		=> __( 'Common' ,'bb-expandable-row'),
					'fields'	=> array(
						'er_effect'		=> array(
							'type'	=> 'select',
							'label'	=> __('Appearing Effect', 'bb-expandable-row'),
							'options'	=> array(
								'slide'	=> __( 'Slide' ,'bb-expandable-row'),
								'fade'	=> __( 'Fade' ,'bb-expandable-row'),
							),
							'default'	=> 'slide'
						),
						'er_img_type'	=> array(
							'type'	=> 'select',
							'label'	=> __('Icon/Image Type', 'bb-expandable-row'),
							'options'	=> array(
								'none'	=> __( 'None' ,'bb-expandable-row'),
								'icon'	=> __('Icon','bb-expandable-row'),
								'image'	=> __('Image','bb-expandable-row'),
							),
							'default'	=> 'none',
							'toggle'	=> array(
								'icon'	=> array(
									'fields'	=> array('er_icon_size','er_icon_position','er_bc_icon','er_ac_icon','er_bc_icon_color','er_bc_icon_hcolor','er_ac_icon_color','er_ac_icon_hcolor')
								),
								'image'	=> array(
									'fields'	=> array('er_image_size','er_icon_position','er_bc_image','er_ac_image')
								)
							),
						),						
						'er_image_size'	=> array(
							'type'	=> 'text',
							'label'	=> __( 'Image Size' ,'bb-expandable-row'),
							'maxlength'	=> '3',
							'size'	=> '5',
							'placeholder'	=> '',
							'description'	=> 'px',
						),
						'er_icon_size'	=> array(
							'type'	=> 'text',
							'label'	=> __( 'Icon Size' ,'bb-expandable-row'),
							'maxlength'	=> '3',
							'size'	=> '5',
							'placeholder'	=> '',
							'description'	=> 'px',
							'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bber-icon',
                                'property'              => 'font-size',
                                'unit'                  => 'px'
                            )
						),
						'er_icon_position'	=> array(
							'type'	=> 'select',
							'label'	=> __( 'Icon/Image Position' ,'bb-expandable-row'),
							'options'	=> array(
								'top'	=> __( 'Top' ,'bb-expandable-row'),
								'bottom'	=> __( 'Bottom' ,'bb-expandable-row'),
								'left'	=> __( 'Left' ,'bb-expandable-row'),
								'right'	=> __( 'Right' ,'bb-expandable-row'),
							),
							'default'	=> 'left',
						),
						'er_bg_type'	=> array(
							'type'	=> 'select',
							'label'	=> __( 'Background Type','bb-expandable-row'),
							'options'	=> array(
								'color'	=> __( 'Color' ,'bb-expandable-row'),
								'image'	=> __( 'Image' ,'bb-expandable-row'),
							),
							'default'	=> 'color',
							'toggle'	=> array(
								'color'	=> array(
									'fields'	=> array('er_bc_bg_color','er_bc_bg_hcolor','er_ac_bg_color','er_ac_bg_hcolor')
								),
								'image'	=> array(
									'fields'	=> array('er_bc_bg_image','er_ac_bg_image')
								),
							),
						),
						'er_title_align'	=> array(
							'type'	=> 'select',
							'label'	=> __('Title Alignment', 'bb-expandable-row'),
							'options'	=> array(
								'center'	=> __('Center', 'bb-expandable-row'),
								'left'	=> __('Left', 'bb-expandable-row'),
								'right'	=> __('Right', 'bb-expandable-row')
							),
							'default'	=> 'center',
							'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'text-align',
                                'unit'                  => 'px'
                            )
						),	
					)
				),
				'er_before_click'	=> array(
					'title'		=> __( 'Before Click' ,'bb-expandable-row'),
					'fields'	=> array(
						'er_bc_title'	=> array(
							'type'	=> 'text',
							'label'	=> __( 'Title' , 'bb-expandable-row' ),
							'preview'               => array(
                                'type'                  => 'text',
                                'selector'              => '.bb-er-title',
                            )
						),
						'er_bc_title_color'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Title Color','bb-expandable-row'),
							'show_reset'=> true,
							'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'color',
                            )
						),
						'er_bc_title_hcolor'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Title Hover Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_bc_bg_color'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Background Color','bb-expandable-row'),
							'show_reset'=> true,
							'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'background-color',
                            )
						),
						'er_bc_bg_hcolor'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Background Hover Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_bc_icon'	=> array(
							'type'		=> 'icon',
							'label'		=> __('Select Icon','bb-expandable-row'),
							'show_remove'	=> true,
						),
						'er_bc_icon_color'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Icon Color','bb-expandable-row'),
							'show_reset'=> true,
							'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bber-icon',
                                'property'              => 'color'
                            )
						),
						'er_bc_icon_hcolor'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Icon Hover Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_bc_image'	=> array(
							'type'	=> 'photo',
							'label'	=> __('Select Icon Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
						'er_bc_bg_image'	=> array(
							'type'	=> 'photo',
							'label'	=> __('Select Background Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
					)
				),
				'er_after_click'	=> array(
					'title'		=> __( 'After Click' ,'bb-expandable-row'),
					'fields'	=> array(
						'er_ac_title'	=> array(
							'type'	=> 'text',
							'label'	=> __( 'Title' , 'bb-expandable-row' ),
						),
						'er_ac_title_color'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Title Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_ac_title_hcolor'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Title Hover Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_ac_bg_color'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Background Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_ac_bg_hcolor'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Background Hover Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_ac_icon'	=> array(
							'type'		=> 'icon',
							'label'		=> __('Select Icon','bb-expandable-row'),
							'show_remove'	=> true,
						),
						'er_ac_icon_color'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Icon Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_ac_icon_hcolor'	=> array(
							'type'	=> 'color',
							'label'	=> __( 'Icon Hover Color','bb-expandable-row'),
							'show_reset'=> true,
						),
						'er_ac_image'	=> array(
							'type'	=> 'photo',
							'label'	=> __('Select Icon Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
						'er_ac_bg_image'	=> array(
							'type'	=> 'photo',
							'label'	=> __('Select Background Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
					)
				),
				'er_typography'	=> array(
					'title'	=> __('Typography','bb-expandable-row'),
					'fields'	=> array(
						'er_title_typography'	=> array(
							'type'	=> 'font',
							'label'	=> 	__('Before/After Click ','bb-expandable-row'),
							'default'		=> array(
		                    	'family'	=> 'Defaults',
		                    	'weight'	=> 'Defaults'
							),
							'preview'		=> array(
                            	'type'		=> 'font',
                            	'selector'	=> '.bb-er-row'  
                        	)
						),
						'er_font_size'	=> array(
							'type'	=> 'text',
							'label'	=> __('Font Size','bb-expandable-row'),
							'maxlength'	=> '3',
							'size'	=> '5',
							'placeholder'	=> '28',
							'description'	=> 'px',
							'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'font-size',
                                'unit'					=> 'px'
                            )
						),
						'er_line_height'	=> array(
							'type'	=> 'text',
							'label'	=> __('Line Height','bb-expandable-row'),
							'maxlength'	=> '3',
							'size'	=> '5',
							'placeholder'	=> '32',
							'description'	=> 'px',
							'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'line-height',
                                'unit'					=> 'px'
                            )
						)
					)
				),// typography
				'er_padding'	=> array(
					'title'		=> __( 'Padding' ,'bb-expandable-row'),
					'fields'	=> array(
						// padding top
						'er_padding_top'	=> array(
	                        'type'			=> 'text',
	                        'label'			=> __('Top', 'bb-expandable-row'),
	                        'maxlength'		=> '3',
	                        'size'			=> '5',
	                        'placeholder'	=> '20',
	                        'description'	=> __('px','bb-expandable-row'),
	                        'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'padding-top',
                                'unit'					=> 'px'
                            )
                    	),
                    	// padding bottom
						'er_padding_bottom'	=> array(
	                        'type'			=> 'text',
	                        'label'			=> __('Bottom', 'bb-expandable-row'),
	                        'maxlength'		=> '3',
	                        'size'			=> '5',
	                        'placeholder'	=> '20',
	                        'description'	=> __('px','bb-expandable-row'),
	                        'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'padding-bottom',
                                'unit'					=> 'px'
                            )
                    	),
                    	// padding left
						'er_padding_left'	=> array(
	                        'type'			=> 'text',
	                        'label'			=> __('Left', 'bb-expandable-row'),
	                        'maxlength'		=> '3',
	                        'size'			=> '5',
	                        'placeholder'	=> '20',
	                        'description'	=> __('px','bb-expandable-row'),
	                        'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'padding-left',
                                'unit'					=> 'px'
                            )
                    	),
                    	// padding right
						'er_padding_right'	=> array(
	                        'type'			=> 'text',
	                        'label'			=> __('Right', 'bb-expandable-row'),
	                        'maxlength'		=> '3',
	                        'size'			=> '5',
	                        'placeholder'	=> '20',
	                        'description'	=> __('px','bb-expandable-row'),
	                        'preview'               => array(
                                'type'                  => 'css',
                                'selector'              => '.bb-er-row',
                                'property'              => 'padding-right',
                                'unit'					=> 'px'
                            )
                    	),
					)
				),// padding
			),//sections
		);
	}
	return $form;
}
add_filter( 'fl_builder_register_settings_form', 'bb_er_row_extender', 10, 2 );

function bb_er_row_css( $css, $nodes, $global_settings ) {
	foreach ( $nodes['rows'] as $row ) {
		ob_start();
		?>
			<?php if ( $row->settings->is_enable == 'yes' ): ?>
				.fl-node-<?php echo $row->node; ?> .bber-icon {
					color: <?php echo ($row->settings->er_bc_icon_color != '' )? '#'.$row->settings->er_bc_icon_color : 'inherit' ?>;
					font-size: <?php echo ($row->settings->er_icon_size != '' )? $row->settings->er_icon_size.'px' : 'inherit' ?>;
    				vertical-align: middle;
    				padding: 0 10px;
    				-webkit-transition: all 0.3s ease-out;
					-moz-transition: all 0.3s ease-out;
					-ms-transition: all 0.3s ease-out;
					-o-transition: all 0.3s ease-out;
					transition: all 0.3s ease-out;
				}
				.fl-node-<?php echo $row->node; ?> .bber-image {
					padding: 0 10px;
				}
				.fl-node-<?php echo $row->node; ?> .bb-er-row:hover .bber-icon {
					color: <?php echo ($row->settings->er_bc_icon_hcolor != '' )? '#'.$row->settings->er_bc_icon_hcolor : 'inherit' ?>;
				}
				<?php if ( ! FLBuilderModel::is_builder_active() ): ?>
					.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap {
						display: none;
					}
				<?php endif ?>
				.fl-node-<?php echo $row->node; ?> .bb-er-row {
					width:100%;
					color: #<?php echo ($row->settings->er_bc_title_color != '') ? $row->settings->er_bc_title_color : '000' ; ?>;
					<?php if( $row->settings->er_bg_type == 'color'): ?>
						background-color:#<?php echo ($row->settings->er_bc_bg_color != '') ? $row->settings->er_bc_bg_color : 'c7c7c7' ; ?>;
					<?php elseif ($row->settings->er_bg_type == 'image' ): ?>
						background-image: url(<?php echo $row->settings->er_bc_bg_image_src; ?>);
					<?php endif ?>
					font-family: <?php echo ($row->settings->er_title_typography['family'] != 'Default')? $row->settings->er_title_typography['family'] : 'inherit' ?>;
					font-weight: <?php echo ($row->settings->er_title_typography['weight'] != 'default' ) ? $row->settings->er_title_typography['weight'] : '500' ; ?>;
					font-size: <?php echo ($row->settings->er_font_size != '' ) ? $row->settings->er_font_size : '28' ; ?>px;
					line-height: <?php echo ($row->settings->er_line_height != '' ) ? $row->settings->er_line_height : '32' ; ?>px;
					text-align: <?php echo $row->settings->er_title_align; ?>;
					padding-top: <?php echo ($row->settings->er_padding_top != '' ) ? $row->settings->er_padding_top : '20' ; ?>px;
					padding-bottom: <?php echo ($row->settings->er_padding_bottom != '' ) ? $row->settings->er_padding_bottom : '20' ; ?>px;
					padding-left: <?php echo ($row->settings->er_padding_left != '' ) ? $row->settings->er_padding_left : '20' ; ?>px;
					padding-right: <?php echo ($row->settings->er_padding_right != '' ) ? $row->settings->er_padding_right : '20' ; ?>px;
					-webkit-transition: all 0.3s ease-out;
					-moz-transition: all 0.3s ease-out;
					-ms-transition: all 0.3s ease-out;
					-o-transition: all 0.3s ease-out;
					transition: all 0.3s ease-out;
				}
				.fl-node-<?php echo $row->node; ?> .bber-expanded {
					color: <?php echo ($row->settings->er_ac_title_color != '') ? '#'.$row->settings->er_ac_title_color : 'inherit' ; ?>;
					<?php if ($row->settings->er_bg_type == 'color' ): ?>
						background-color: <?php echo ($row->settings->er_ac_bg_color != '') ? '#'.$row->settings->er_ac_bg_color : 'c7c7c7' ; ?>;
					<?php endif ?>

				}
				.fl-node-<?php echo $row->node; ?> .bb-er-row:hover {
					color: <?php echo ($row->settings->er_bc_title_hcolor != '') ? '#'.$row->settings->er_bc_title_hcolor : 'inherit' ; ?>;
					<?php if ($row->settings->er_bg_type == 'color' ): ?>
						background-color: <?php echo ($row->settings->er_bc_bg_hcolor != '') ? '#'.$row->settings->er_bc_bg_hcolor : 'inherit' ; ?>;
					<?php endif ?>
				}
				.fl-node-<?php echo $row->node; ?> .bber-expanded:hover {
					color: <?php echo ($row->settings->er_ac_title_hcolor != '') ? '#'.$row->settings->er_ac_title_hcolor : 'inherit' ; ?>;
					<?php if ($row->settings->er_bg_type == 'color' ): ?>
						background-color: <?php echo ($row->settings->er_ac_bg_hcolor != '') ? '#'.$row->settings->er_ac_bg_hcolor : 'c7c7c7' ; ?>;
					<?php endif ?>	
				}
				.fl-node-<?php echo $row->node; ?> .bber-image img{
					width: <?php echo ( $row->settings->er_image_size != '' ) ? $row->settings->er_image_size : 'auto' ?>px;
				}
			<?php endif ?>
		<?php
		$css .= ob_get_clean();
	}
	return $css;

}
add_filter( 'fl_builder_render_css', 'bb_er_row_css', 10, 3 );

function bb_er_row_structure ( $js, $nodes, $global_settings ) {
	foreach ( $nodes['rows'] as $row ) {
		ob_start();
		?>
		<?php if ( $row->settings->is_enable == 'yes' ): ?>
			(function($) {
				var html = '<div class="bb-er-row">';
				 <?php if( $row->settings->er_icon_position == 'top' ): ?>
				 	<?php if( $row->settings->er_img_type == 'icon' ): ?>
				 		html += '<div><i class="bber-icon <?php echo $row->settings->er_bc_icon; ?>"></i></div>';
				 	<?php elseif( $row->settings->er_img_type == 'image' ): ?>
				 		html += '<div class="bber-image"><img src="<?php echo $row->settings->er_bc_image_src; ?>" /></div>';
				 <?php endif ?>
				<?php endif ?>
				 html += '<div class="bb-er-title-section">';
				<?php if( $row->settings->er_icon_position == 'left' ): ?>
				 	<?php if( $row->settings->er_img_type == 'icon' ): ?>
				 		html += '<span><i class="bber-icon <?php echo $row->settings->er_bc_icon; ?>"></i></span>';
				 	<?php elseif( $row->settings->er_img_type == 'image' ): ?>
				 		html += '<span class="bber-image"><img src="<?php echo $row->settings->er_bc_image_src; ?>" /></span>';
				 <?php endif ?>
				<?php endif ?>
				 html += '<span class="bb-er-title"><?php echo htmlspecialchars($row->settings->er_bc_title); ?></span>';
				<?php if( $row->settings->er_icon_position == 'right' ): ?>
				 	<?php if( $row->settings->er_img_type == 'icon' ): ?>
				 		html += '<span><i class="bber-icon <?php echo $row->settings->er_bc_icon; ?>"></i></span>';
				 	<?php elseif( $row->settings->er_img_type == 'image' ): ?>
				 		html += '<span class="bber-image"><img src="<?php echo $row->settings->er_bc_image_src; ?>" /></span>';
				 <?php endif ?>
				<?php endif ?>
				 html += '</div>';
				<?php if( $row->settings->er_icon_position == 'bottom' ): ?>
				 	<?php if( $row->settings->er_img_type == 'icon' ): ?>
				 		html += '<div><i class="bber-icon <?php echo $row->settings->er_bc_icon; ?>"></i></div>';
				 	<?php elseif( $row->settings->er_img_type == 'image' ): ?>
				 		html += '<div class="bber-image"><img src="<?php echo $row->settings->er_bc_image_src; ?>" /></div>';
				 <?php endif ?>
				<?php endif ?>
				 html += '</div>';

				$('.fl-row.fl-node-<?php echo $row->node; ?>').prepend(html);

				$('.fl-node-<?php echo $row->node; ?> .bb-er-row').click(function() {

					<?php if($row->settings->er_effect == 'slide'): ?>
						$('.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap').slideToggle();
					<?php elseif ($row->settings->er_effect == 'fade'): ?>
						$('.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap').fadeToggle();
					<?php endif ?>

					$('.fl-node-<?php echo $row->node; ?> .bb-er-row').toggleClass("bber-expanded");
					
					// toggle title
					( $('.fl-node-<?php echo $row->node; ?>  .bb-er-title').text() == '<?php echo htmlspecialchars($row->settings->er_bc_title); ?>' ) ? $('.fl-node-<?php echo $row->node; ?>  .bb-er-title').text('<?php echo htmlspecialchars($row->settings->er_ac_title); ?>') : $('.fl-node-<?php echo $row->node; ?>  .bb-er-title').text('<?php echo htmlspecialchars($row->settings->er_bc_title); ?>')

					// toggle icon
					<?php if( $row->settings->er_img_type == 'icon' ): ?>
						$('.fl-node-<?php echo $row->node; ?> .bber-icon').toggleClass("<?php echo $row->settings->er_bc_icon; ?> <?php echo $row->settings->er_ac_icon; ?>")
					<?php endif ?>

					// toggle background
					<?php if ($row->settings->er_bg_type == 'image' ): ?>
						var bg_toggle_src = ( $('.fl-node-<?php echo $row->node; ?> .bb-er-row').css('background-image') == 'url("<?php echo $row->settings->er_bc_bg_image_src; ?>")' ? 'url("<?php echo $row->settings->er_ac_bg_image_src; ?>")' : 'url("<?php echo $row->settings->er_bc_bg_image_src; ?>")' );
						$('.fl-node-<?php echo $row->node; ?> .bb-er-row').css({'background-image' : bg_toggle_src });
					<?php endif ?>

					// toggle image icon
					<?php if( $row->settings->er_img_type == 'image' ): ?>
						var img_toggle_src = ( $('.fl-node-<?php echo $row->node; ?> .bber-image img').attr('src') == '<?php echo $row->settings->er_bc_image_src; ?>' ? '<?php echo $row->settings->er_ac_image_src; ?>' : '<?php echo $row->settings->er_bc_image_src; ?>' );
						$('.fl-node-<?php echo $row->node; ?> .bber-image img').attr('src', img_toggle_src)
					<?php endif ?>

				});
			})(jQuery);
		<?php endif?>
		<?php
		$js .= ob_get_clean();
	}
	return $js;
}
add_filter( 'fl_builder_render_js', 'bb_er_row_structure', 10, 3 );


?>