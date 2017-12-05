<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/request/get-video-batch-request/1-0-0.json#
namespace Acme\Schemas\Ovp\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1 as GdbotsNcrGetNodeBatchRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1Mixin as GdbotsNcrGetNodeBatchRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Ovp\Mixin\GetVideoBatchRequest\GetVideoBatchRequestV1 as TrinitiOvpGetVideoBatchRequestV1;
use Triniti\Schemas\Ovp\Mixin\GetVideoBatchRequest\GetVideoBatchRequestV1Mixin as TrinitiOvpGetVideoBatchRequestV1Mixin;

final class GetVideoBatchRequestV1 extends AbstractMessage implements
    GetVideoBatchRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeBatchRequestV1,
    TrinitiOvpGetVideoBatchRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:request:get-video-batch-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeBatchRequestV1Mixin::create(),
                TrinitiOvpGetVideoBatchRequestV1Mixin::create(),
            ]
        );
    }
}
