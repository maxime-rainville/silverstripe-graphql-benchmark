<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtVoluptatem';

    private static $has_one = [
        "EnimNihil" => EnimNihil::class
    ];

    private static $has_many = [
        "EnimNihils" => EnimNihil::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EnimNihilManys" => EnimNihil::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}