<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedRepellat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SedRepellat';

    private static $has_one = [
        "NumquamQuibusdam" => NumquamQuibusdam::class
    ];

    private static $has_many = [
        "NumquamQuibusdams" => NumquamQuibusdam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NumquamQuibusdamManys" => NumquamQuibusdam::class
    ];

    private static $extensions = [
        
    ];
}