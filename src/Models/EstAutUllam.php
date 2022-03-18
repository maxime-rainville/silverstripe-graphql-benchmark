<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstAutUllam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstAutUllam';

    private static $has_one = [
        "UtRerumOfficiis" => UtRerumOfficiis::class
    ];

    private static $has_many = [
        "UtRerumOfficiiss" => UtRerumOfficiis::class
    ];

    private static $many_many = [
        "UtRerumOfficiisManys" => UtRerumOfficiis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}