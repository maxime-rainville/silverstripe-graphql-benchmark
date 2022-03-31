<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UndeNihil extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UndeNihil';

    private static $has_one = [
        "MolestiaeQuod" => MolestiaeQuod::class
    ];

    private static $has_many = [
        "MolestiaeQuods" => MolestiaeQuod::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "MolestiaeQuodManys" => MolestiaeQuod::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}