<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AspernaturProvident extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AspernaturProvident';

    private static $has_one = [
        "NonEt" => NonEt::class
    ];

    private static $has_many = [
        "NonEts" => NonEt::class
    ];

    private static $many_many = [
        "NonEtManys" => NonEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}