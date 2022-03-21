<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AtNeque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AtNeque';

    private static $has_one = [
        "DucimusQuibusdam" => DucimusQuibusdam::class
    ];

    private static $has_many = [
        "DucimusQuibusdams" => DucimusQuibusdam::class
    ];

    private static $many_many = [
        "DucimusQuibusdamManys" => DucimusQuibusdam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}