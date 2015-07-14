<?php
							$defaults = array(

								'menu'            => '',
								'container'       => 'div',
								'container_class' => 'main-navigation menu_top',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav navbar-right">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
								);
								wp_nav_menu( $defaults );?>
