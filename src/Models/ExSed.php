<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ExSed';

    private static $has_one = [
        "IllumAd" => IllumAd::class
    ];

    private static $has_many = [
        "IllumAds" => IllumAd::class
    ];

    private static $many_many = [
        "IllumAdManys" => IllumAd::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}