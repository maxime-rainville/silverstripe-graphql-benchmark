<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CorporisPorro extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CorporisPorro';

    private static $has_one = [
        "AutQuis" => AutQuis::class,
        "DoloremAsperiores" => DoloremAsperiores::class,
        "AliquidMagni" => AliquidMagni::class
    ];

    private static $has_many = [
        "AutQuiss" => AutQuis::class,
        "DoloremAsperioress" => DoloremAsperiores::class,
        "AliquidMagnis" => AliquidMagni::class
    ];

    private static $many_many = [
        "DoloremAsperioresManys" => DoloremAsperiores::class
    ];

    private static $belongs_many_many = [
        "AutQuisManys" => AutQuis::class,
        "AliquidMagniManys" => AliquidMagni::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}