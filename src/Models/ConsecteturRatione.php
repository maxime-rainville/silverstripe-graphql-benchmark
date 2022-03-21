<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsecteturRatione extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsecteturRatione';

    private static $has_one = [
        "EtOmnis" => EtOmnis::class
    ];

    private static $has_many = [
        "EtOmniss" => EtOmnis::class
    ];

    private static $many_many = [
        "EtOmnisManys" => EtOmnis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}