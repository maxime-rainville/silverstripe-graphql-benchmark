<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FacereSit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FacereSit';

    private static $has_one = [
        "QuiError" => QuiError::class
    ];

    private static $has_many = [
        "QuiErrors" => QuiError::class
    ];

    private static $many_many = [
        "QuiErrorManys" => QuiError::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}