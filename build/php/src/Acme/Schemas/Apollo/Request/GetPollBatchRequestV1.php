<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-batch-request/1-0-0.json#
namespace Acme\Schemas\Apollo\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1 as GdbotsNcrGetNodeBatchRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1Mixin as GdbotsNcrGetNodeBatchRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Apollo\Mixin\GetPollBatchRequest\GetPollBatchRequestV1 as TrinitiApolloGetPollBatchRequestV1;
use Triniti\Schemas\Apollo\Mixin\GetPollBatchRequest\GetPollBatchRequestV1Mixin as TrinitiApolloGetPollBatchRequestV1Mixin;

final class GetPollBatchRequestV1 extends AbstractMessage implements
    GetPollBatchRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeBatchRequestV1,
    TrinitiApolloGetPollBatchRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:request:get-poll-batch-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeBatchRequestV1Mixin::create(),
                TrinitiApolloGetPollBatchRequestV1Mixin::create(),
            ]
        );
    }
}
