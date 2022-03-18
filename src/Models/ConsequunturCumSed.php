<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequunturCumSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequunturCumSed';

    private static $has_one = [
        "DoloribusFugaItaque" => DoloribusFugaItaque::class
    ];

    private static $has_many = [
        "DoloribusFugaItaques" => DoloribusFugaItaque::class
    ];

    private static $many_many = [
        "DoloribusFugaItaqueManys" => DoloribusFugaItaque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}