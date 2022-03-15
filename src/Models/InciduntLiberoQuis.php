<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InciduntLiberoQuis extends DataObject
{

    private static $db = [
        'AStringValue' => 'Varchar',
        'Numeric' => 'Int',
        'TrueOrFalse' => 'Boolean',
        'MyNovel' => 'Text',
        'MyNovelWithFormattedContent' => 'HTMLText',
        'ShowMeTheMoney' => 'Money',
        'ListOfThings' => 'Enum("USD,EUR,GBP,AUD,CAD,CHF,CNY,DKK,HKD,JPY,NZD,PLN,RUB,SEK,SGD,THB,ZAR")',
        'YourTimeWillCome' => 'Datetime',
        'SplintingNumber' => 'Decimal',
        'InTheYearOfThyLord' => 'Year',
    ];

    private static $table_name = 'InciduntLiberoQuis';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "ConsequaturLaboreQui" => ConsequaturLaboreQui::class,
        "QuodInDolores" => QuodInDolores::class,
        "LiberoQuisBeatae" => LiberoQuisBeatae::class,
        "SuscipitBeataeEveniet" => SuscipitBeataeEveniet::class,
        "ExNequeAdipisci" => ExNequeAdipisci::class,
        "AutInventoreVero" => AutInventoreVero::class,
        "InciduntLiberoQuis" => InciduntLiberoQuis::class,
        "EaAnimiDolorem" => EaAnimiDolorem::class,
        "PerferendisEnimQui" => PerferendisEnimQui::class,
        "AliquidVoluptasSed" => AliquidVoluptasSed::class,
        "QuoDictaDeserunt" => QuoDictaDeserunt::class,
        "SitModiTemporibus" => SitModiTemporibus::class,
        "RepellendusQuibusdamDolorum" => RepellendusQuibusdamDolorum::class,
        "MollitiaOdioVoluptas" => MollitiaOdioVoluptas::class,
        "AsperioresUllamNeque" => AsperioresUllamNeque::class,
        "VoluptasVelitConsectetur" => VoluptasVelitConsectetur::class,
        "EstAtqueUt" => EstAtqueUt::class,
        "AliquamAnimiQuaerat" => AliquamAnimiQuaerat::class,
        "MolestiaeQuaeUllam" => MolestiaeQuaeUllam::class,
        "EosAssumendaSimilique" => EosAssumendaSimilique::class,
        "DolorQuisEaque" => DolorQuisEaque::class
    ];

    private static $has_many = [
        "ConsequaturLaboreQuis" => ConsequaturLaboreQui::class,
        "QuodInDoloress" => QuodInDolores::class,
        "LiberoQuisBeataes" => LiberoQuisBeatae::class,
        "SuscipitBeataeEveniets" => SuscipitBeataeEveniet::class,
        "ExNequeAdipiscis" => ExNequeAdipisci::class,
        "AutInventoreVeros" => AutInventoreVero::class,
        "InciduntLiberoQuiss" => InciduntLiberoQuis::class,
        "EaAnimiDolorems" => EaAnimiDolorem::class,
        "PerferendisEnimQuis" => PerferendisEnimQui::class,
        "AliquidVoluptasSeds" => AliquidVoluptasSed::class,
        "QuoDictaDeserunts" => QuoDictaDeserunt::class,
        "SitModiTemporibuss" => SitModiTemporibus::class,
        "RepellendusQuibusdamDolorums" => RepellendusQuibusdamDolorum::class,
        "MollitiaOdioVoluptass" => MollitiaOdioVoluptas::class,
        "AsperioresUllamNeques" => AsperioresUllamNeque::class,
        "VoluptasVelitConsecteturs" => VoluptasVelitConsectetur::class,
        "EstAtqueUts" => EstAtqueUt::class,
        "AliquamAnimiQuaerats" => AliquamAnimiQuaerat::class,
        "MolestiaeQuaeUllams" => MolestiaeQuaeUllam::class,
        "EosAssumendaSimiliques" => EosAssumendaSimilique::class,
        "DolorQuisEaques" => DolorQuisEaque::class
    ];
}