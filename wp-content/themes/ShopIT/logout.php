<?php
wp_logout();

// Redirect the user to the home page
wp_redirect(home_url());
exit;
