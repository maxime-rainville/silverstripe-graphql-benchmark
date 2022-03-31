<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloreVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloreVoluptatem';

    private static $has_one = [
        "ConsecteturQuasi" => ConsecteturQuasi::class
    ];

    private static $has_many = [
        "ConsecteturQuasis" => ConsecteturQuasi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ConsecteturQuasiManys" => ConsecteturQuasi::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}