<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SuntArchitectoVelit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SuntArchitectoVelit';

    private static $has_one = [
        "QuiNobisVeniam" => QuiNobisVeniam::class
    ];

    private static $has_many = [
        "QuiNobisVeniams" => QuiNobisVeniam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuiNobisVeniamManys" => QuiNobisVeniam::class
    ];

    private static $extensions = [
        
    ];
}