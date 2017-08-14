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

</div>
</div>

<div    id="slider"><?php print render($page['slider']);?></div>



    <div class="container highlighted">
	<?php if (!empty($page['highlighted'])): ?>
        <div class="highlight">
            <div class="hidden-xs">
           <?php $block = module_invoke('views', 'block_view', 'consumer_fiance-block');
           print render($block['content']);
          ?>
                </div>
            <div class="visible-xs-block">
            <?php $block = module_invoke('views', 'block_view', 'consumer_fiance-block_1');
           print render($block['content']);
           
          ?>
                </div>
        </div>
        
		
      <?php endif; ?>
	  </div>






<div class="field-collection-container clearfix">
    <div class="row background-partners text-center" style="background-image: url(sites/all/themes/pedro/images/fondo_partners_1.jpg);">
    <div class="col-md-12 col-xs-12">
        <div class="font-size-antetitulo font-regular margin-top-110 margin-left-70 margin-right-70" style="color: #d9f4ff; text-transform: uppercase; max-height: 16px; overflow: hidden;">
            PARTNERS        </div>
        <span class="linea"></span>
        <div class="titulo margin-left-70 margin-right-70">
            <h5 class="font-color-white font-size-titulo-seccion">
                <p>A strong and lasting relationship</p>            </h5>
        </div>
        <div class="row row-centered margin-top-45 margin-bottom-50">
            <div class="margin-logos-partner">
                               
<?php 

$block = module_invoke('views', 'block_view','partners-block');
print render($block);
?>

                                </div>
        </div>
        <div class="calls">
            <a class="btn _pxp-cta _pxp-verde _pxp-255 margin-right-3 EnviadoPartnerOK" href="/en/contact" title="BECOME A PARTNER NOW!">
                <span class="text font-size-botones">
                    BECOME A PARTNER NOW!                </span>
            </a>
            <a class="btn _pxp-cta _pxp-gris-3 _pxp-255" href="/en/partners" title="ALL OUR PARTNERS">
                <span class="text font-size-botones">
                    ALL OUR PARTNERS                </span>
            </a>
        </div>
    </div>
</div>
<script>
var Drupal = Drupal || {};

(function($, Drupal){

    $(document).ready(function() {
        $('img-responsive').hover(
            function () {
                var hover = $(this).data('hover');
                $(this).find('img').attr("src", hover);
            },
            function () {
                var out = $(this).data('out');
                $(this).find('img').attr("src", out);
            }
        )
    });

})(jQuery, Drupal);
</script>
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

  


