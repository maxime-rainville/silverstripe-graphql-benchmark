<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloribusFugaItaque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloribusFugaItaque';

    private static $has_one = [
        "ConsequunturCumSed" => ConsequunturCumSed::class
    ];

    private static $has_many = [
        "ConsequunturCumSeds" => ConsequunturCumSed::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ConsequunturCumSedManys" => ConsequunturCumSed::class
    ];

    private static $extensions = [
        
    ];
}