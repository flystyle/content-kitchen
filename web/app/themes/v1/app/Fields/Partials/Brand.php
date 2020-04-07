<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$brand = new FieldsBuilder( 'Brand' );

$brand
    ->addImage( 'article_brand' );

return $brand;