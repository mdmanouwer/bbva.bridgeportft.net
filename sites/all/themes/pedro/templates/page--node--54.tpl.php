<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<div class="header" id="fixtop">
<div  id="topfixed" class="row hidden-xs">
<div class="col-md-9">
</div>
<div class="col-md-2 top-right-menu" id="top-right_menu"><?php print render($page['top_bar']); ?></div>
<div class="col-md-1  lan-switch-menu"> <?php print render($page['top_bar_lan']);?></div>
</div>
<div class="row" id="mega-menu-region">
      <div class="logo col-md-3 col-xs-10">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      
        </div>
		
		<div class="col-md-9  col-xs-2 menu-height">
      
        <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        
        </div>
	<div class="col-md-12 hidden-xs breadcrumb">
	<?php
  $block = module_invoke('easy_breadcrumb', 'block_view', 'easy_breadcrumb');
  print $block['content'];
?>
	</div>

</div>
</div>





    

<div class="main-container">
  

    
    
      
     <div class="row">
        <div class="col-sm-12">
            <div class="field-collection-container clearfix"><div class="flexblueslider-container hidden-xs hidden-sm">
    <div class="row">
        <div class="span12">
            <div id="flexblueslider" class="carousel slide carousel-fade" data-interval="false">
                        <!-- Carousel items -->
            <div class="carousel-inner">
                                                                        <div class="item active">
                        <div class="row">
                                                    <div id="local-business-line-carousel-hero" class="block-local-business-line local-business-line-carousel-hero" style="background-image: url(https://consumerfinance-pro.s3.amazonaws.com/hero/hpp_2.jpg )">
                    <div class="row local-bussines-bloque">
                        <div class="col-xs-12">
                            <div class="row margin-all-percent-5">
                                <div class="col-lg-4 col-md-5 col-sm-12 font-bold font-color-white">
                                    <h1 class="titulo font-size-titulo-enriquecido" style="max-height: 130px; overflow: hidden; margin-bottom: 33px;">
                                        <p>NEED HELP?</p>                                    </h1>
                                    <div class="row">
                                                                                    <div class="col-xs-4 text-center">
                                                <div class="margin-right-40">
                                                                                                            <img class="img-responsive img-center" src="https://consumerfinance-pro.s3.amazonaws.com/icons/paga_ahora_online_icon_2.png" alt="<p>Always by your side</p>" style="max-width: 74px;">
                                                                                                                                                                <div class="margin-top-28 textoiconos" style="max-height: 90px; overflow: hidden;">
                                                            <p>Always by your side</p>                                                        </div>
                                                                                                    </div>
                                            </div>
                                                                                    <div class="col-xs-4 text-center">
                                                <div class="margin-right-40">
                                                                                                            <img class="img-responsive img-center" src="https://consumerfinance-pro.s3.amazonaws.com/icons/opciones_pago_icon_2.png" alt="<p>The best solutions for you</p>" style="max-width: 74px;">
                                                                                                                                                                <div class="margin-top-28 textoiconos" style="max-height: 90px; overflow: hidden;">
                                                            <p>The best solutions for you</p>                                                        </div>
                                                                                                    </div>
                                            </div>
                                                                                    <div class="col-xs-4 text-center">
                                                <div class="margin-right-40">
                                                                                                            <img class="img-responsive img-center" src="https://consumerfinance-pro.s3.amazonaws.com/icons/elige_dia_icon_1_2.png" alt="<p>Update your details</p>" style="max-width: 74px;">
                                                                                                                                                                <div class="margin-top-28 textoiconos" style="max-height: 90px; overflow: hidden;">
                                                            <p>Update your details</p>                                                        </div>
                                                                                                    </div>
                                            </div>
                                                                            </div>
                                    <div class="row margin-top-percent-10">
                                        <div class="col-xs-12">
                                            <a class="btn _pxp-cta _pxp-verde _pxp-280" href="/en/contact?co=219" title="CONTACT US">
                                                CONTACT US                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                                                </div>
                </div>
            </div><!--/carousel-inner-->
            </div><!--/flexblueslider-->
        </div>
    </div>
</div>

<div class="flexblueslider-container hidden-lg hidden-md particular_global margin-bottom-percent-10">
    <div class="row">
        <div class="span12">
            <div id="flexblueslider" class="carousel slide" data-interval="false">
                        <!-- Carousel items -->
            <div class="carousel-inner">
                                                                        <div class="item active">
                        <div class="row">
                                                    <div class="col-xs-12">
                    <img class="img-responsive width-percent-100" src="https://consumerfinance-pro.s3.amazonaws.com/hero/particulares_local_mobile-pro_2.png">
                </div>
                <div>
                    <div class="row local-bussines-bloque margin-bottom-percent-5">
                        <div class="col-xs-12">
                            <div class="row margin-all-percent-5" style="margin-top:-5%">
                                <div class="titulo col-md-4 col-sm-12 font-bold text-center block-hero-business-line-mobile">
                                    <h1 class="font-size-titulo-enriquecido texto-titulo-enriquecido margin-left-percent-7 margin-right-percent-7">
                                        <p>NEED HELP?</p>                                    </h1>
                                    <div class="row row margin-left-percent-5 margin-right-percent-5">
                                                                                    <div class="col-xs-4 text-center">
                                                <div class="">
                                                <img class="img-responsive img-center iconos-particulares" src="https://consumerfinance-pro.s3.amazonaws.com/icons/paga_ahora_online_icon_2.png" alt="<p>Always by your side</p>">
                                                <div class="margin-top-percent-5 margin-left-percent-15 margin-right-percent-15 textoiconos">
                                                    <p>Always by your side</p>                                                </div>
                                                </div>
                                            </div>
                                                                                    <div class="col-xs-4 text-center">
                                                <div class="">
                                                <img class="img-responsive img-center iconos-particulares" src="https://consumerfinance-pro.s3.amazonaws.com/icons/opciones_pago_icon_2.png" alt="<p>The best solutions for you</p>">
                                                <div class="margin-top-percent-5 margin-left-percent-15 margin-right-percent-15 textoiconos">
                                                    <p>The best solutions for you</p>                                                </div>
                                                </div>
                                            </div>
                                                                                    <div class="col-xs-4 text-center">
                                                <div class="">
                                                <img class="img-responsive img-center iconos-particulares" src="https://consumerfinance-pro.s3.amazonaws.com/icons/elige_dia_icon_1_2.png" alt="<p>Update your details</p>">
                                                <div class="margin-top-percent-5 margin-left-percent-15 margin-right-percent-15 textoiconos">
                                                    <p>Update your details</p>                                                </div>
                                                </div>
                                            </div>
                                                                            </div>
                                    <div class="row margin-top-percent-10">
                                        <div class="col-xs-12">
                                            <a class="btn btn-success btn-action" href="/en/contact?co=219" title="CONTACT US">
                                                CONTACT US                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                                                </div>
                </div>
            </div><!--/carousel-inner-->
            </div><!--/flexblueslider-->
        </div>
    </div>
</div></div>        </div>
    </div>
      
  
   

    

  



</div>


<div class="container highlighted">
	<?php if (!empty($page['highlighted'])): ?>
        <div class="highlight"><?php print render($page['highlighted']); ?></div>
		
      <?php endif; ?>
	  </div>
<div class="main-container">
  

    
    
      
     <div class="row">
<?php print render($page['content']); ?>
     </div>
    </div>

<div class="row">
<div id="footer">
<div class="section">
<div class="wrapper">

<?php if(!empty($page['topfooter'])):?>
<?php print render($page['topfooter']);?>
<?php endif; ?>

</div>
<div class="enlaces-footer text-center">
<div class="row sub-menus">
        <div class="col-md-4 columna-footer">
      
          <span>BBVA Consumer Finance</span>    
          <a href="http://www.bbva.com/TLBB/tlbb/esp/index.jsp">Web Corporativa BBVA.com</a> <a href="http://inversores.bbva.com/TLBB/tlbb/bbvair/esp/index.jsp">Informação para acionistas</a>    </div>
  <div class="col-md-4 columna-footer">
      
          <span>TRABALHE CONNOSCO</span>    
          <a href="https://careers.bbva.com/">Emprego no BBVA</a>    
          <hr class="hidden-md hidden-lg hrFooter">    </div>
  <div class="col-md-4 columna-footer">
      
          <span>NOTÍCIAS E RSC</span>    
          <a href="https://info.bbva.com/es/?sc_ref_bbva=https%253A%252F%252Fwww.bbva.es%252Fparticulares%252Findex.jsp">Notícias BBVA</a> <a href="http://bancaresponsable.com/">Responsabilidade Social Corporativa</a>    </div>
    </div>
</div>
</div>
</div>
</div>


<div id="footernavbar">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-8">
<div class="wrapper">
<?php if(!empty($page['footernavbar'])):?>
<?php print render($page['footernavbar']);?>
<?php endif; ?>
</div>
</div>
<div class="col-md-4 col-sm-12 red-social">
                <span>Siga-nos</span>
                <a href="https://www.facebook.com/GrupoBBVA/" target="_blank">
                    <button class="fa fa-facebook" aria-hidden="true"></button>
                </a>
                <a href="https://www.youtube.com/user/bbva" target="_blank">
                    <button class="fa fa-youtube" aria-hidden="true"></button>
                </a>
                <a href="https://www.linkedin.com/company/bbva" target="_blank">
                    <button class="fa fa-linkedin" aria-hidden="true"></button>
                </a>
                <a href="https://twitter.com/BBVA" target="_blank">
                    <button class="fa fa-twitter" aria-hidden="true"></button>
                </a>
                <a href="https://plus.google.com/u/0/116515550915076317173" target="_blank">
                    <button class="fa fa-google-plus" aria-hidden="true"></button>
                </a>
			</div>
</div>
</div>
