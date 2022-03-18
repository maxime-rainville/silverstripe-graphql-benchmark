<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CorruptiNecessitatibusItaque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CorruptiNecessitatibusItaque';

    private static $has_one = [
        "EnimOmnisDeleniti" => EnimOmnisDeleniti::class
    ];

    private static $has_many = [
        "EnimOmnisDelenitis" => EnimOmnisDeleniti::class
    ];

    private static $many_many = [
        "EnimOmnisDelenitiManys" => EnimOmnisDeleniti::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}