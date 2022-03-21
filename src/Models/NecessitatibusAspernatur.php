<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NecessitatibusAspernatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NecessitatibusAspernatur';

    private static $has_one = [
        "DebitisVoluptas" => DebitisVoluptas::class
    ];

    private static $has_many = [
        "DebitisVoluptass" => DebitisVoluptas::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DebitisVoluptasManys" => DebitisVoluptas::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}