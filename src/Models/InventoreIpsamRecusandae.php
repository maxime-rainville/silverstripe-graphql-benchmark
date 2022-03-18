<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InventoreIpsamRecusandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InventoreIpsamRecusandae';

    private static $has_one = [
        "UtEstPerspiciatis" => UtEstPerspiciatis::class
    ];

    private static $has_many = [
        "UtEstPerspiciatiss" => UtEstPerspiciatis::class
    ];

    private static $many_many = [
        "UtEstPerspiciatisManys" => UtEstPerspiciatis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}