<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class BeataeEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'BeataeEt';

    private static $has_one = [
        "ConsecteturFacilis" => ConsecteturFacilis::class
    ];

    private static $has_many = [
        "ConsecteturFaciliss" => ConsecteturFacilis::class
    ];

    private static $many_many = [
        "ConsecteturFacilisManys" => ConsecteturFacilis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}