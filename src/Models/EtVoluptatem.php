<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtVoluptatem';

    private static $has_one = [
        "NecessitatibusEt" => NecessitatibusEt::class
    ];

    private static $has_many = [
        "NecessitatibusEts" => NecessitatibusEt::class
    ];

    private static $many_many = [
        "NecessitatibusEtManys" => NecessitatibusEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}