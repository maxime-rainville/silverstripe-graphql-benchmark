<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OfficiaAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OfficiaAut';

    private static $has_one = [
        "RerumCum" => RerumCum::class
    ];

    private static $has_many = [
        "RerumCums" => RerumCum::class
    ];

    private static $many_many = [
        "RerumCumManys" => RerumCum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}