<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuaeOdio extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuaeOdio';

    private static $has_one = [
        "EtUt" => EtUt::class
    ];

    private static $has_many = [
        "EtUts" => EtUt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtUtManys" => EtUt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}