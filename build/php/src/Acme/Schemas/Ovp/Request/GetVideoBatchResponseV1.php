<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/request/get-video-batch-response/1-0-0.json#
namespace Acme\Schemas\Ovp\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1 as GdbotsNcrGetNodeBatchResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1Mixin as GdbotsNcrGetNodeBatchResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Ovp\Mixin\GetVideoBatchResponse\GetVideoBatchResponseV1 as TrinitiOvpGetVideoBatchResponseV1;
use Triniti\Schemas\Ovp\Mixin\GetVideoBatchResponse\GetVideoBatchResponseV1Mixin as TrinitiOvpGetVideoBatchResponseV1Mixin;

final class GetVideoBatchResponseV1 extends AbstractMessage implements
    GetVideoBatchResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeBatchResponseV1,
    TrinitiOvpGetVideoBatchResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:request:get-video-batch-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeBatchResponseV1Mixin::create(),
                TrinitiOvpGetVideoBatchResponseV1Mixin::create(),
            ]
        );
    }
}