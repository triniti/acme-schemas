<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/get-video-batch-response/1-0-0.json#
namespace Acme\Schemas\Videos\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1 as GdbotsNcrGetNodeBatchResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1Mixin as GdbotsNcrGetNodeBatchResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Videos\Mixin\GetVideoBatchResponse\GetVideoBatchResponseV1 as TrinitiVideosGetVideoBatchResponseV1;
use Triniti\Schemas\Videos\Mixin\GetVideoBatchResponse\GetVideoBatchResponseV1Mixin as TrinitiVideosGetVideoBatchResponseV1Mixin;

final class GetVideoBatchResponseV1 extends AbstractMessage implements
    GetVideoBatchResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeBatchResponseV1,
    TrinitiVideosGetVideoBatchResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:request:get-video-batch-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeBatchResponseV1Mixin::create(),
                TrinitiVideosGetVideoBatchResponseV1Mixin::create(),
            ]
        );
    }
}
