<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IlloCupiditateAliquam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IlloCupiditateAliquam';

    private static $has_one = [
        "CumqueCorruptiPerferendis" => CumqueCorruptiPerferendis::class
    ];

    private static $has_many = [
        "CumqueCorruptiPerferendiss" => CumqueCorruptiPerferendis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CumqueCorruptiPerferendisManys" => CumqueCorruptiPerferendis::class
    ];

    private static $extensions = [
        
    ];
}