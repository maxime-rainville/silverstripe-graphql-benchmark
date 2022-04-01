<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SuntError extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SuntError';

    private static $has_one = [
        "SedMolestiae" => SedMolestiae::class,
        "QuiVeniam" => QuiVeniam::class,
        "LaudantiumRerum" => LaudantiumRerum::class
    ];

    private static $has_many = [
        "SedMolestiaes" => SedMolestiae::class,
        "QuiVeniams" => QuiVeniam::class,
        "LaudantiumRerums" => LaudantiumRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "SedMolestiaeManys" => SedMolestiae::class,
        "QuiVeniamManys" => QuiVeniam::class,
        "LaudantiumRerumManys" => LaudantiumRerum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}