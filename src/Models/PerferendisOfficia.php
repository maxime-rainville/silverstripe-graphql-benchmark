<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PerferendisOfficia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PerferendisOfficia';

    private static $has_one = [
        "QuosEarum" => QuosEarum::class
    ];

    private static $has_many = [
        "QuosEarums" => QuosEarum::class
    ];

    private static $many_many = [
        "QuosEarumManys" => QuosEarum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}