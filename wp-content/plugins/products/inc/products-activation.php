<?php

/**
 * @package AddProducts
 */

class AddProductsActivate
{
    static function activate()
    {
        flush_rewrite_rules();
    }
}
