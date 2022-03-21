<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SitPossimus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SitPossimus';

    private static $has_one = [
        "SintEnim" => SintEnim::class
    ];

    private static $has_many = [
        "SintEnims" => SintEnim::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "SintEnimManys" => SintEnim::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}