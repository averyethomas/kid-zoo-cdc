    <div id="footer">
        <div class="container">
            <div class="footer-section">
	            <div class="social">
		            <ul>
	            		<?php social_kz_menu(); ?>
		            </ul>
	            </div>
                <p><a href="/terms">Terms of Use / Privacy Policy</a></p>
            </div>        
            <div class="footer-section">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo3.png" style="width: 100px;">
            </div>
            <div class="footer-section">
	            <p>&#169; <?php echo date("Y"); ?> Kid zoo CDC </p>
                <p>Website By <a target="_blank" href="http://averyethomas.com">Avery Thomas</a></p>
            </div>
        </div>
    <?php wp_footer(); ?>
    </footer>
  </body>
</html>