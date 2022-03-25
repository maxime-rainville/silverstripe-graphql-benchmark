<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloribusUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloribusUt';

    private static $has_one = [
        "OdioSapiente" => OdioSapiente::class
    ];

    private static $has_many = [
        "OdioSapientes" => OdioSapiente::class
    ];

    private static $many_many = [
        "OdioSapienteManys" => OdioSapiente::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}