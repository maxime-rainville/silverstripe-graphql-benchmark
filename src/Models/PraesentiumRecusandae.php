<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PraesentiumRecusandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PraesentiumRecusandae';

    private static $has_one = [
        "SolutaDolores" => SolutaDolores::class
    ];

    private static $has_many = [
        "SolutaDoloress" => SolutaDolores::class
    ];

    private static $many_many = [
        "SolutaDoloresManys" => SolutaDolores::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}