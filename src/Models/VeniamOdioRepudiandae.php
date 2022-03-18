<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VeniamOdioRepudiandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VeniamOdioRepudiandae';

    private static $has_one = [
        "AtqueEsseQuisquam" => AtqueEsseQuisquam::class
    ];

    private static $has_many = [
        "AtqueEsseQuisquams" => AtqueEsseQuisquam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AtqueEsseQuisquamManys" => AtqueEsseQuisquam::class
    ];

    private static $extensions = [
        
    ];
}