<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$type = new FieldsBuilder( 'type' );

$type
    ->addButtonGroup( 'article_type' )
            ->addChoices( ['owned' => 'Owned'], ['paid' => 'Paid'], ['earned' => 'Earned'] );

return $type;