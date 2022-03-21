<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaIpsum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaIpsum';

    private static $has_one = [
        "NatusVoluptas" => NatusVoluptas::class
    ];

    private static $has_many = [
        "NatusVoluptass" => NatusVoluptas::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NatusVoluptasManys" => NatusVoluptas::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}