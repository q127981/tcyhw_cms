</section>
<?php
if (git_get_option('git_superfoot_b') && !git_is_mobile()) { ?>
<div id="footbar" style="border-top: 2px solid #8E44AD;"><ul>
<li><p class="first"><?php
    echo git_get_option('git_foottitle1'); ?></p><span><?php
    echo git_get_option('git_footconent1'); ?></span></li>
<li><p class="second"><?php
    echo git_get_option('git_foottitle2'); ?></p><span><?php
    echo git_get_option('git_footconent2'); ?></span></li>
<li><p class="third"><?php
    echo git_get_option('git_foottitle3'); ?></p><span><?php
    echo git_get_option('git_footconent3'); ?></span></li>
<li><p class="fourth"><?php
    echo git_get_option('git_foottitle4'); ?></p><span><?php
    echo git_get_option('git_footconent4'); ?></span></li>
</ul>
</div>
<?php
} ?>
<footer style="border-top: 1px solid ;background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAUAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQAAgICAgICAgICAgMCAgIDBAMCAgMEBQQEBAQEBQYFBQUFBQUGBgcHCAcHBgkJCgoJCQwMDAwMDAwMDAwMDAwMDAEDAwMFBAUJBgYJDQsJCw0PDg4ODg8PDAwMDAwPDwwMDAwMDA8MDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM/8AAEQgAAgAKAwERAAIRAQMRAf/EAEwAAQEAAAAAAAAAAAAAAAAAAAAJAQEAAAAAAAAAAAAAAAAAAAAAEAEBAAAAAAAAAAAAAAAAAAAAlREBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8Ah7DAhg//2Q=='); background-repeat: repeat;" class="footer">
<div class="footer-inner"><div class="footer-copyright"><?php
if (git_get_option('git_footcode')) echo git_get_option('git_footcode'); ?> 
<span class="trackcode pull-right"><?php
if (git_get_option('git_track')) echo git_get_option('git_track'); ?></span></div></div></footer>
<?php
if (git_get_option('git_copydialog_b') && is_singular()) echo '<script type="text/javascript">document.body.oncopy=function(){alert("复制成功！");}</script>'; ?>
<?php
if (git_get_option('git_snow_b')) { ?><script src="https://cdn.bootcss.com/JQuery-Snowfall/1.7.4/snowfall.min.js"></script><script type="text/javascript">snowFall.snow(document.body, {flakeCount : 90, maxSpeed : 12, round : true, minSize: 4, maxSize:10});</script><?php
} ?>
<?php
if (git_get_option('git_copy_b') && is_singular()) echo '<script type="text/Javascript">document.oncontextmenu=function(e){return false;};document.onselectstart=function(e){return false;};</script><style>body{ -moz-user-select:none;}</style><SCRIPT LANGUAGE=javascript>if (top.location != self.location)top.location=self.location;</SCRIPT><noscript><iframe src=*.html></iframe></noscript>'; ?>
<?php
if (git_get_option('git_footercode')) echo git_get_option('git_footercode'); ?>
<?php
wp_footer();
global $dHasShare;
if( $dHasShare == true ){
    echo '<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="https://cdn.jsdelivr.net/gh/yunluo/GitCafeApi/static/api/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
	}
?>
</body>
</html>