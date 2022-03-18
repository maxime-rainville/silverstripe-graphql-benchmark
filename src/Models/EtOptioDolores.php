<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtOptioDolores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtOptioDolores';

    private static $has_one = [
        "SuntIureSit" => SuntIureSit::class
    ];

    private static $has_many = [
        "SuntIureSits" => SuntIureSit::class
    ];

    private static $many_many = [
        "SuntIureSitManys" => SuntIureSit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}