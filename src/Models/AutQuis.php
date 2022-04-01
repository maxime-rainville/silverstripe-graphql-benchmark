<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutQuis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutQuis';

    private static $has_one = [
        "DoloremAsperiores" => DoloremAsperiores::class,
        "AliquidMagni" => AliquidMagni::class,
        "CorporisPorro" => CorporisPorro::class
    ];

    private static $has_many = [
        "DoloremAsperioress" => DoloremAsperiores::class,
        "AliquidMagnis" => AliquidMagni::class,
        "CorporisPorros" => CorporisPorro::class
    ];

    private static $many_many = [
        "DoloremAsperioresManys" => DoloremAsperiores::class,
        "CorporisPorroManys" => CorporisPorro::class
    ];

    private static $belongs_many_many = [
        "AliquidMagniManys" => AliquidMagni::class
    ];

    private static $extensions = [
        
    ];
}