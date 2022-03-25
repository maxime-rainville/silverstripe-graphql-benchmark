<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuasEum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuasEum';

    private static $has_one = [
        "QuiQuidem" => QuiQuidem::class
    ];

    private static $has_many = [
        "QuiQuidems" => QuiQuidem::class
    ];

    private static $many_many = [
        "QuiQuidemManys" => QuiQuidem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}