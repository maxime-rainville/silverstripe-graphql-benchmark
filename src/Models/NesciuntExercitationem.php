<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NesciuntExercitationem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NesciuntExercitationem';

    private static $has_one = [
        "EtRem" => EtRem::class
    ];

    private static $has_many = [
        "EtRems" => EtRem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtRemManys" => EtRem::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}