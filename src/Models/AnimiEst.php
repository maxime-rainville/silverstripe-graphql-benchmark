<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AnimiEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AnimiEst';

    private static $has_one = [
        "EtEa" => EtEa::class,
        "OptioEum" => OptioEum::class,
        "TemporeBeatae" => TemporeBeatae::class
    ];

    private static $has_many = [
        "EtEas" => EtEa::class,
        "OptioEums" => OptioEum::class,
        "TemporeBeataes" => TemporeBeatae::class
    ];

    private static $many_many = [
        "EtEaManys" => EtEa::class,
        "OptioEumManys" => OptioEum::class,
        "TemporeBeataeManys" => TemporeBeatae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}