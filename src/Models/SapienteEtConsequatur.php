<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SapienteEtConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SapienteEtConsequatur';

    private static $has_one = [
        "VoluptasPorroQuos" => VoluptasPorroQuos::class
    ];

    private static $has_many = [
        "VoluptasPorroQuoss" => VoluptasPorroQuos::class
    ];

    private static $many_many = [
        "VoluptasPorroQuosManys" => VoluptasPorroQuos::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}