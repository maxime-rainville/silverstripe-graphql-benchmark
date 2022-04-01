<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilIllo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilIllo';

    private static $has_one = [
        "DelenitiItaque" => DelenitiItaque::class,
        "OfficiaPerferendis" => OfficiaPerferendis::class,
        "AmetOccaecati" => AmetOccaecati::class
    ];

    private static $has_many = [
        "DelenitiItaques" => DelenitiItaque::class,
        "OfficiaPerferendiss" => OfficiaPerferendis::class,
        "AmetOccaecatis" => AmetOccaecati::class
    ];

    private static $many_many = [
        "OfficiaPerferendisManys" => OfficiaPerferendis::class
    ];

    private static $belongs_many_many = [
        "DelenitiItaqueManys" => DelenitiItaque::class,
        "AmetOccaecatiManys" => AmetOccaecati::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}