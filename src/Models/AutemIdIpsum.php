<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutemIdIpsum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutemIdIpsum';

    private static $has_one = [
        "SitLaboreUt" => SitLaboreUt::class
    ];

    private static $has_many = [
        "SitLaboreUts" => SitLaboreUt::class
    ];

    private static $many_many = [
        "SitLaboreUtManys" => SitLaboreUt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}