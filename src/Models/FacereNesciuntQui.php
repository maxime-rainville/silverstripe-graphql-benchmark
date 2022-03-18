<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FacereNesciuntQui extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FacereNesciuntQui';

    private static $has_one = [
        "DolorumConsequaturPerferendis" => DolorumConsequaturPerferendis::class
    ];

    private static $has_many = [
        "DolorumConsequaturPerferendiss" => DolorumConsequaturPerferendis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DolorumConsequaturPerferendisManys" => DolorumConsequaturPerferendis::class
    ];

    private static $extensions = [
        
    ];
}