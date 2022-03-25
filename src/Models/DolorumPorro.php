<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorumPorro extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorumPorro';

    private static $has_one = [
        "ReiciendisNihil" => ReiciendisNihil::class
    ];

    private static $has_many = [
        "ReiciendisNihils" => ReiciendisNihil::class
    ];

    private static $many_many = [
        "ReiciendisNihilManys" => ReiciendisNihil::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}