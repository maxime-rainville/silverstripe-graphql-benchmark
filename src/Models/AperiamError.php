<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AperiamError extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AperiamError';

    private static $has_one = [
        "EtAb" => EtAb::class,
        "OfficiaEt" => OfficiaEt::class,
        "PerspiciatisMinima" => PerspiciatisMinima::class
    ];

    private static $has_many = [
        "EtAbs" => EtAb::class,
        "OfficiaEts" => OfficiaEt::class,
        "PerspiciatisMinimas" => PerspiciatisMinima::class
    ];

    private static $many_many = [
        "EtAbManys" => EtAb::class,
        "OfficiaEtManys" => OfficiaEt::class,
        "PerspiciatisMinimaManys" => PerspiciatisMinima::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}