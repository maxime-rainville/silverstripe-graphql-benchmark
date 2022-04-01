<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloremAsperiores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloremAsperiores';

    private static $has_one = [
        "AutQuis" => AutQuis::class,
        "AliquidMagni" => AliquidMagni::class,
        "CorporisPorro" => CorporisPorro::class
    ];

    private static $has_many = [
        "AutQuiss" => AutQuis::class,
        "AliquidMagnis" => AliquidMagni::class,
        "CorporisPorros" => CorporisPorro::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutQuisManys" => AutQuis::class,
        "AliquidMagniManys" => AliquidMagni::class,
        "CorporisPorroManys" => CorporisPorro::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}