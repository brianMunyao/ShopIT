<?php

/**
 * @package AddProducts
 */

class AddProductsDeactivate
{
    static function deactivate()
    {
        flush_rewrite_rules();
    }
}
