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
<div  id="topfixed" class="row">
<div class="col-md-8">
</div>
<div class="col-md-2" id="top-right_menu"><?php print render($page['top_bar']); ?></div>
<div class="col-md-2"> <?php print render($page['top_bar_lan']);?></div>
</div>
<div class="row" id="mega-menu-region">
<div class="logo col-md-3 col-xs-10 ">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>
        </div>
		<div class="col-md-9 menu-height">
      
        <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
      
    </div>

</div>
</div>

<div  id="slider" class=""row"><?php print render($page['slider']);?></div>
<div class="clearfix"></div>


    <div class="container highlighted">
	<?php if (!empty($page['highlighted'])): ?>
        <div class="highlight"><?php print render($page['highlighted']); ?></div>
		
      <?php endif; ?>
	  </div>
<div class="clearfix"></div>

<div  id="slider-middle">
<?php if (!empty($page['slider_middle'])): ?>
        <?php print render($page['slider_middle']); ?>
      <?php endif; ?>
	  


</div>

 <div class="sidebar-second">

<?php if (!empty($page['sidebar_second'])): ?>
      
       <?php print render($page['sidebar_second']); ?>
        <!-- /#sidebar-second -->
    <?php endif; ?>
</div>

<div class="main-container">
  <div class="row">

    
    
      
     
      
      <?php print render($page['content']); ?>
   

    

  



<div  id="slider-middle" >
<?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
	  


</div>
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
<div class=" hidden-xs hidden-sm col-md-4 col-sm-12 red-social">
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
