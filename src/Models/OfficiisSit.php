<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OfficiisSit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OfficiisSit';

    private static $has_one = [
        "TemporaSit" => TemporaSit::class
    ];

    private static $has_many = [
        "TemporaSits" => TemporaSit::class
    ];

    private static $many_many = [
        "TemporaSitManys" => TemporaSit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}