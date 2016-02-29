<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5-css3.js"></script><![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- 所有页面的导航栏，全站通用 -->
	<div id="nav_var_b" class="navigation">
		<!-- 适合阅读障碍 -->
		<a class="sr-only" href="#skip-navigation">跳过导航</a>
		<!-- 页面头部 -->
		<header class="site-header" role="banner">
			<nav id="eyebrow" class="header-nav" role="navigation">
				<div class="nav-cont">
					<!-- 页眉logo -->
					<div class="headnav-logo">
					<!-- 此处有一堆不知所云的东西，应该是HTML5的，暂时按下面的简单模式来 -->
						<a id="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png">
							<i class="mindseedcon"> </i>
							<span class="sr-only">Mindseed.cn | 心种子，新力量</span>
						</a>
					</div>
					<div id="submenu-left">
						<ul role="menu" >
							<li id="submenu-library" class="flat-menu submenu-toggle-cont popover-trigger" tabindex="0" role="menuitem">
								<span class="text-uppercase top-menu-item submenu-goggle">
									<a id="browse-library" class="nav-ga-track" data-qa="link_click" data-ev-label="library" data-ev-action="click" data-ev-category="header" data-ev-persona=" " href="http://www.mindseed.cn/subject/all">
										Library
										<i class="mindseedcon arrow-down nav-caret"> </i>
									</a>							
								</span>
								<div id="subject_sub_menu_a2" class="subject_software_bootstrap-popover" style="display : none;">
									<ul id="subject-sub-menu" aria-labelledby="submenu-library" role="menu">
										<div class="css-table menu-table">
											<div class="narrow"> </div>
											<div class="css-table-row">
												<div class="css-table-cell main-subject" data-qa="qa_browse_subjects" aria-labelledby="submenu-library">
													<ul role="menu">
														<li class="action" role="menuitem">
															<a class="submenu-expand nav-ga-track" data-qa="qa_subject_Biography" data-ev-type="link_click" data-ev-label="library:Biography" data-ev-action="click" data-ev-category="header" data-ev-persona=" " href=" " data-detals=" " tabindex="-1">
																<i class="mindseedcon cat-1 category-icons"> </i>
																名人档案
															</a>
														</li>
													</ul>
												</div>
											</div>										
										</div>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- 跳过导航 -->
		<div id="skip-navigation"> </div>
	</div>
