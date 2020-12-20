<?php wp_redirect('https://tetcoegypt.com');?>
<!DOCTYPE html>
<html class="no-js" lang="en-US" data-bt-theme="Industrial 1.1.0">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <title>
        <?php
        if ( is_home() or is_front_page() ) { wp_title(''); }
        else { wp_title(''); echo '|'; } ?>

        <?php
        bloginfo('name'); ?>
    </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
    <!--[if lte IE 9]>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/ie9.css'
          type='text/css' media='screen'/>
    <![endif]-->
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0'
          type='text/css' media='all'/>
    <!--[if lte IE 9]>
    <script type='text/javascript'
            src='<?php echo get_template_directory_uri(); ?>/js/html5.min.js?ver=1'></script>
    <![endif]-->
    <!--[if lte IE 9]>
    <script type='text/javascript'
            src='<?php echo get_template_directory_uri(); ?>/js/respond.min.js?ver=1'></script>
    <![endif]-->


<?php
if(is_front_page()){
    $stickyM = 'btBelowMenu';
}else{
    $stickyM = '';
}
?>

<body class="page-child  bodyPreloader btMenuRightEnabled btStickyEnabled btLightSkin <?php echo $stickyM; ?> btRemovePreloader  btAccentDarkHeader btNoSidebar btMenuHorizontal btLightHeader">
<!-- Google Tag Manager (noscript) -->
<div class="btPageWrap" id="top">

    <header class="mainHeader btClear gutter ">
        <div class="port">
            <div class="topBar btClear">
                                    				<ul class="langsl" style="display:inline-block;    display: inline-flex;float:right;
    position: relative;"><?php // pll_the_languages();?>
    		<?php // dynamic_sidebar( 'language-switcher' ); ?>
    		<li style="display:inline-block;list-style:none;"><a style="color:#fff;" href="https://tetco.com.eg/careers/">Careers</a></li>

    </ul>


                <div class="topBarPort btClear">
                    <div class="topTools btTopToolsLeft btTextLeft" style="display:none;">
		<span class="btIconWidget  btWidgetWithText">
			<span class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoDefaultColor">
				<span data-ico-pr="&#xf10f;" class="btIcoHolder"></span></span></span>

			<span class="btIconWidgetContent">
				<span class="btIconWidgetTitle">Working hours:</span>
				<span class="btIconWidgetText">Mon - Sat 8.00 - 18.00 </span>
			</span>
		</span>

                        <span class="btIconWidget  btWidgetWithText">
				<span class="btIconWidgetIcon">
				<span class="btIco btIcoDefaultType btIcoDefaultColor">
					<span data-ico-pr="&#xf134;" class="btIcoHolder"></span>
				</span>
				</span>
				<span class="btIconWidgetContent">
					<span class="btIconWidgetTitle">Call Us: </span>
					<span class="btIconWidgetText">(+1) 555 234-8765</span>
				</span>
			</span>

                    </div>

                    <div class="topTools btTopToolsRight btTextRight" style="display:none;">
                        <div class="btTopBox woocommerce widget_shopping_cart">
                            <div class="widget_shopping_cart_content"></div>
                        </div>
                        <a href="#" target="_blank" class="btIconWidget ">
			<span class="btIconWidgetIcon">
				<span class="btIco btIcoDefaultType btIcoDefaultColor">
					<span data-ico-fa="&#xf09a;" class="btIcoHolder"></span>
				</span>
			</span>
                        </a>
                        <a href="#" target="_blank" class="btIconWidget ">
				<span class="btIconWidgetIcon">
					<span class="btIco btIcoDefaultType btIcoDefaultColor">
						<span data-ico-fa="&#xf099;" class="btIcoHolder"></span>
					</span>
				</span>
                        </a>
                        <a href="#" target="_blank" class="btIconWidget ">
				<span class="btIconWidgetIcon">

					<span class="btIco btIcoDefaultType btIcoDefaultColor">
					<span data-ico-fa="&#xf1ca;" class="btIcoHolder"></span>
				</span>
				</span>
                        </a>

                        <div class="btTopBox widget_search">
                            <div class="btSearch">
				<span class="btIco btIcoDefaultType btIcoDefaultColor">
					<a href="#" target="_self" data-ico-fa="&#xf002;" class="btIcoHolder"></a>
				</span>


                                <div class="btSearchInner gutter" role="search" style="display:none;">
                                    <div class="btSearchInnerContent port">
                                        <form action="https://tetco.com.eg/" method="get">
                                            <input type="text" name="s" placeholder="Looking for..." class="untouched">
                                            <button type="submit" data-icon="&#xf105;"></button>
                                        </form>
                                        <div class="btSearchInnerClose">
					<span class="btIco ">
						<a href="#" target="_self" data-ico-fa="&#xf00d;" class="btIcoHolder"></a>
					</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="#"
                           target="_self" class="btIconWidget btAccentIconWidget btWidgetWithText">
				<span class="btIconWidgetContent">
					<span class="btIconWidgetTitle">GET A QUOTE</span>
				</span></a>
                    </div>

                </div>
            </div>


            <div class="btLogoArea menuHolder btClear">
		<span class="btVerticalMenuTrigger">&nbsp;
			<span class="btIco btIcoDefaultType"><a href="#" target="_self" data-ico-fa="&#xf0c9;"
                                                    class="btIcoHolder"></a></span>
		</span>


                <span class="btHorizontalMenuTrigger">&nbsp;
				<span class="btIco btIcoDefaultType"><a href="#" target="_self" data-ico-fa="&#xf0c9;"
                                                        class="btIcoHolder"></a></span>
			</span>


                <div class="logo">
					<span>
						<a href="#"><img class="btMainLogo" data-hw="2.4"
                                         src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                                         alt="Main demo"></a>
					</span>
                </div><!-- /logo -->


                <div class="menuPort">
                    <nav>

                        <ul id="menu-primary-menu" class="menu">
                                                                    <?php wp_nav_menu(array( 'theme_location' => 'primary-menu', 'items_wrap'=>'%3$s', 'container' => false )); ?>

                        </ul>


                    </nav>
                </div><!-- .menuPort -->
            </div><!-- /menuHolder / btBelowLogoArea -->
        </div><!-- /port -->
    </header><!-- /.mainHeader -->

