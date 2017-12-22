<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-asset-response/1-0-0.json#
namespace Acme\Schemas\Dam\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Dam\Mixin\GetAssetResponse\GetAssetResponseV1 as TrinitiDamGetAssetResponseV1;
use Triniti\Schemas\Dam\Mixin\GetAssetResponse\GetAssetResponseV1Mixin as TrinitiDamGetAssetResponseV1Mixin;

final class GetAssetResponseV1 extends AbstractMessage implements
    GetAssetResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiDamGetAssetResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:request:get-asset-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiDamGetAssetResponseV1Mixin::create(),
            ]
        );
    }
}
