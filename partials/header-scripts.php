<section id="header-scripts">
<?php
$facebook_app_id = IGV_get_option('_igv_site_options', '_igv_og_fb_app_id');

if (!empty($facebook_app_id)) {
?>
t
<script>
	window.fbAsyncInit = function() {
		FB.init({
      appId      : '<?php echo $facebook_app_id; ?>',
			cookie     : true,
			xfbml      : true,
			version    : 'v2.8'
		});
		FB.AppEvents.logPageView();
	};

	(function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "//connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	 }(document, 'script', 'facebook-jssdk'));
</script>
<?php
}
?>
</section>
