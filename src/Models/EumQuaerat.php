<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EumQuaerat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EumQuaerat';

    private static $has_one = [
        "EtSapiente" => EtSapiente::class
    ];

    private static $has_many = [
        "EtSapientes" => EtSapiente::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtSapienteManys" => EtSapiente::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}