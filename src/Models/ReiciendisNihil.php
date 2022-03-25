<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ReiciendisNihil extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ReiciendisNihil';

    private static $has_one = [
        "DolorumPorro" => DolorumPorro::class
    ];

    private static $has_many = [
        "DolorumPorros" => DolorumPorro::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DolorumPorroManys" => DolorumPorro::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}