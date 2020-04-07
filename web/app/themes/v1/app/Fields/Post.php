<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder( 'Article Options' );

$post
    ->setLocation( 'post_type', '==', 'post' )
    ->setGroupConfig( 'position', 'side' );

$post
    ->addFields( get_field_partial('Partials.Brand') )
    ->addFields( get_field_partial('Partials.Country') )
    ->addFields( get_field_partial('Partials.Type') );

return $post;
