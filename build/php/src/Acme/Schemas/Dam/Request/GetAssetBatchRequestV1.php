<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-asset-batch-request/1-0-0.json#
namespace Acme\Schemas\Dam\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1 as GdbotsNcrGetNodeBatchRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1Mixin as GdbotsNcrGetNodeBatchRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Dam\Mixin\GetAssetBatchRequest\GetAssetBatchRequestV1 as TrinitiDamGetAssetBatchRequestV1;
use Triniti\Schemas\Dam\Mixin\GetAssetBatchRequest\GetAssetBatchRequestV1Mixin as TrinitiDamGetAssetBatchRequestV1Mixin;

final class GetAssetBatchRequestV1 extends AbstractMessage implements
    GetAssetBatchRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeBatchRequestV1,
    TrinitiDamGetAssetBatchRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:request:get-asset-batch-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeBatchRequestV1Mixin::create(),
                TrinitiDamGetAssetBatchRequestV1Mixin::create(),
            ]
        );
    }
}
