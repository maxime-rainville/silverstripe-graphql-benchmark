<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtSapiente extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtSapiente';

    private static $has_one = [
        "EumQuaerat" => EumQuaerat::class
    ];

    private static $has_many = [
        "EumQuaerats" => EumQuaerat::class
    ];

    private static $many_many = [
        "EumQuaeratManys" => EumQuaerat::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}