<?php
wp_logout();
wp_destroy_current_session();
wp_clear_auth_cookie();
header("location: index.php");
