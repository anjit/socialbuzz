<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Login Options - Login Form 1</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<?php 
echo $this->Html->css('/assets/global/plugins/font-awesome/css/font-awesome.min.css');
echo $this->Html->css('/assets/global/plugins/font-awesome/css/font-awesome.min.css');
echo $this->Html->css('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css');
echo $this->Html->css('/assets/global/plugins/bootstrap/css/bootstrap.min.css');
echo $this->Html->css('/assets/global/plugins/uniform/css/uniform.default.css');
echo $this->Html->css('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');
echo $this->Html->css('/assets/global/plugins/select2/select2.css');
echo $this->Html->css('/assets/admin/pages/css/login.css');
echo $this->Html->css('/assets/global/css/components.css');
echo $this->Html->css('/assets/global/css/plugins.css');
echo $this->Html->css('/assets/admin/layout/css/layout.css');
echo $this->Html->css('/assets/admin/layout/css/themes/default.css');
echo $this->Html->css('/assets/admin/layout/css/custom.css');
?>	
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
		<div id="content">
<?php echo $this->fetch('content'); ?>
		</div>
		<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2014 &copy; Metronic. Admin Dashboard Template.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<?php 
echo $this->Html->script('/assets/global/plugins/jquery-1.11.0.min.js');
echo $this->Html->script('/assets/global/plugins/jquery-migrate-1.2.1.min.js');

echo $this->Html->script('/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js');
echo $this->Html->script('/assets/global/plugins/bootstrap/js/bootstrap.min.js');
echo $this->Html->script('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');
echo $this->Html->script('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');
echo $this->Html->script('/assets/global/plugins/jquery.blockui.min.js');
echo $this->Html->script('/assets/global/plugins/jquery.cokie.min.js');
echo $this->Html->script('/assets/global/plugins/uniform/jquery.uniform.min.js');
echo $this->Html->script('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');
echo $this->Html->script('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js');
echo $this->Html->script('/assets/global/plugins/select2/select2.min.js');
echo $this->Html->script('/assets/global/scripts/metronic.js');
echo $this->Html->script('/assets/admin/layout/scripts/layout.js');
echo $this->Html->script('/assets/admin/layout/scripts/quick-sidebar.js');
echo $this->Html->script('/assets/admin/layout/scripts/demo.js');
echo $this->Html->script('/assets/admin/pages/scripts/login.js');
?>
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  Login.init();
});
</script>
<!-- END JAVASCRIPTS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'keenthemes.com');
  ga('send', 'pageview');
</script>
</body>

<!-- END BODY -->
</html>