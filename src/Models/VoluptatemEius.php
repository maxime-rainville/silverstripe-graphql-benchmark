<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemEius extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemEius';

    private static $has_one = [
        "QuosMolestias" => QuosMolestias::class
    ];

    private static $has_many = [
        "QuosMolestiass" => QuosMolestias::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuosMolestiasManys" => QuosMolestias::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}