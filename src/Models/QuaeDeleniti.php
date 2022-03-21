<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuaeDeleniti extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuaeDeleniti';

    private static $has_one = [
        "FacereCum" => FacereCum::class
    ];

    private static $has_many = [
        "FacereCums" => FacereCum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "FacereCumManys" => FacereCum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}