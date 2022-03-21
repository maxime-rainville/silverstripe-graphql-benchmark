<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtQuis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtQuis';

    private static $has_one = [
        "AtqueEt" => AtqueEt::class
    ];

    private static $has_many = [
        "AtqueEts" => AtqueEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AtqueEtManys" => AtqueEt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}