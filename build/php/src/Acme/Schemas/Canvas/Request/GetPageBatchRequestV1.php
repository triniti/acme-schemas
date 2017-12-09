<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/request/get-page-batch-request/1-0-0.json#
namespace Acme\Schemas\Canvas\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1 as GdbotsNcrGetNodeBatchRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1Mixin as GdbotsNcrGetNodeBatchRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Canvas\Mixin\GetPageBatchRequest\GetPageBatchRequestV1 as TrinitiCanvasGetPageBatchRequestV1;
use Triniti\Schemas\Canvas\Mixin\GetPageBatchRequest\GetPageBatchRequestV1Mixin as TrinitiCanvasGetPageBatchRequestV1Mixin;

final class GetPageBatchRequestV1 extends AbstractMessage implements
    GetPageBatchRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeBatchRequestV1,
    TrinitiCanvasGetPageBatchRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:request:get-page-batch-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeBatchRequestV1Mixin::create(),
                TrinitiCanvasGetPageBatchRequestV1Mixin::create(),
            ]
        );
    }
}
