<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioEum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OptioEum';

    private static $has_one = [
        "EtEa" => EtEa::class,
        "TemporeBeatae" => TemporeBeatae::class,
        "AnimiEst" => AnimiEst::class
    ];

    private static $has_many = [
        "EtEas" => EtEa::class,
        "TemporeBeataes" => TemporeBeatae::class,
        "AnimiEsts" => AnimiEst::class
    ];

    private static $many_many = [
        "TemporeBeataeManys" => TemporeBeatae::class
    ];

    private static $belongs_many_many = [
        "EtEaManys" => EtEa::class,
        "AnimiEstManys" => AnimiEst::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}