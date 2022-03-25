<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstNon extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstNon';

    private static $has_one = [
        "AutemRerum" => AutemRerum::class
    ];

    private static $has_many = [
        "AutemRerums" => AutemRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutemRerumManys" => AutemRerum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}