<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemExpedita extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemExpedita';

    private static $has_one = [
        "EnimSint" => EnimSint::class
    ];

    private static $has_many = [
        "EnimSints" => EnimSint::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EnimSintManys" => EnimSint::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}