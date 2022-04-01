<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtEa extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtEa';

    private static $has_one = [
        "OptioEum" => OptioEum::class,
        "TemporeBeatae" => TemporeBeatae::class,
        "AnimiEst" => AnimiEst::class
    ];

    private static $has_many = [
        "OptioEums" => OptioEum::class,
        "TemporeBeataes" => TemporeBeatae::class,
        "AnimiEsts" => AnimiEst::class
    ];

    private static $many_many = [
        "OptioEumManys" => OptioEum::class,
        "TemporeBeataeManys" => TemporeBeatae::class
    ];

    private static $belongs_many_many = [
        "AnimiEstManys" => AnimiEst::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}