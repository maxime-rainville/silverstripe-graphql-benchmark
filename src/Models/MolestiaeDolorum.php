<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MolestiaeDolorum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MolestiaeDolorum';

    private static $has_one = [
        "UtNon" => UtNon::class,
        "VelitAut" => VelitAut::class,
        "QuibusdamDolores" => QuibusdamDolores::class
    ];

    private static $has_many = [
        "UtNons" => UtNon::class,
        "VelitAuts" => VelitAut::class,
        "QuibusdamDoloress" => QuibusdamDolores::class
    ];

    private static $many_many = [
        "UtNonManys" => UtNon::class,
        "VelitAutManys" => VelitAut::class,
        "QuibusdamDoloresManys" => QuibusdamDolores::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}