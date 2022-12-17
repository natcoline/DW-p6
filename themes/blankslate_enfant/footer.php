<?php wp_footer(); ?>  
    
        <footer>

            <?php 
                wp_nav_menu([
                'theme_location' => 'footer',
                'container'=>false,
                'menu_class' => 'navbar-nav d-flex flex-row justify-content-center pt-2 mb-lg-0'
                ])
             ?>

            <!-- <ul class=" navbar-nav d-flex flex-row justify-content-center pt-2 mb-lg-0">
				<li class="nav-item ">
					<a class="nav-link" href="#">Mentions Légales </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"> Test </a>
				</li>
        	</ul> -->
	    </footer> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>