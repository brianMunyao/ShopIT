<?php

/**
 * @package AddProducts
 */

class AddProductsActivate
{
    static function activate()
    {
        AddProducts::create_table_to_db();
        flush_rewrite_rules();
    }
}
