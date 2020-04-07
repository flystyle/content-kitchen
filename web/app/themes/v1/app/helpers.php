<?php

/**
 * Theme helpers.
 */

namespace App;

/**
 * Field partial includes.
 *
 * @param  mixed $partial
 * @return mixed
 */
function get_field_partial($partial)
{
    $partial = str_replace('.', '/', $partial);
    return include( get_theme_file_path('/app/Fields/') . "{$partial}.php" );
}
