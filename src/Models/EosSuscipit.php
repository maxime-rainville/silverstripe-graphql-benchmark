<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EosSuscipit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EosSuscipit';

    private static $has_one = [
        "EligendiAliquid" => EligendiAliquid::class
    ];

    private static $has_many = [
        "EligendiAliquids" => EligendiAliquid::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EligendiAliquidManys" => EligendiAliquid::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}