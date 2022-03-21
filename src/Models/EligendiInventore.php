<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EligendiInventore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EligendiInventore';

    private static $has_one = [
        "QuibusdamQui" => QuibusdamQui::class
    ];

    private static $has_many = [
        "QuibusdamQuis" => QuibusdamQui::class
    ];

    private static $many_many = [
        "QuibusdamQuiManys" => QuibusdamQui::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}