<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DignissimosAt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DignissimosAt';

    private static $has_one = [
        "UtEx" => UtEx::class
    ];

    private static $has_many = [
        "UtExs" => UtEx::class
    ];

    private static $many_many = [
        "UtExManys" => UtEx::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}