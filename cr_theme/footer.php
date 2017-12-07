<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cr_theme
 */

?>
    <footer class="row">
        <span class="col-xs-12 text-right">
            &copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
            <br /><br />
            <a href="http://richardsonmediahouse.com/" title="Design & Branding by Richardson Media House" class="rmhLogo"><img src="http://richardsonmediahouse.com/assets/uploads/2014/08/squarelogo.png" width="30px" /></a>
        </span>

    </footer>
</div>
<script> 
    var $buoop = {c:2}; 
    function $buo_f(){ 
     var e = document.createElement("script"); 
     e.src = "//browser-update.org/update.min.js"; 
     document.body.appendChild(e);
    };
    try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
    catch(e){window.attachEvent("onload", $buo_f)}
</script>
<?php wp_footer(); ?>
</body>
</html>