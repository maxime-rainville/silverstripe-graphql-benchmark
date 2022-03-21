<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FacereVeritatis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FacereVeritatis';

    private static $has_one = [
        "DoloresFuga" => DoloresFuga::class
    ];

    private static $has_many = [
        "DoloresFugas" => DoloresFuga::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloresFugaManys" => DoloresFuga::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}