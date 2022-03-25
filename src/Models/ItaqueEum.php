<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ItaqueEum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ItaqueEum';

    private static $has_one = [
        "VeritatisVeritatis" => VeritatisVeritatis::class
    ];

    private static $has_many = [
        "VeritatisVeritatiss" => VeritatisVeritatis::class
    ];

    private static $many_many = [
        "VeritatisVeritatisManys" => VeritatisVeritatis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}