<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequaturIure extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequaturIure';

    private static $has_one = [
        "AmetAdipisci" => AmetAdipisci::class
    ];

    private static $has_many = [
        "AmetAdipiscis" => AmetAdipisci::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AmetAdipisciManys" => AmetAdipisci::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}