<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-batch-response/1-0-0.json#
namespace Acme\Schemas\Apollo\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1 as GdbotsNcrGetNodeBatchResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1Mixin as GdbotsNcrGetNodeBatchResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Apollo\Mixin\GetPollBatchResponse\GetPollBatchResponseV1 as TrinitiApolloGetPollBatchResponseV1;
use Triniti\Schemas\Apollo\Mixin\GetPollBatchResponse\GetPollBatchResponseV1Mixin as TrinitiApolloGetPollBatchResponseV1Mixin;

final class GetPollBatchResponseV1 extends AbstractMessage implements
    GetPollBatchResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeBatchResponseV1,
    TrinitiApolloGetPollBatchResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:request:get-poll-batch-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeBatchResponseV1Mixin::create(),
                TrinitiApolloGetPollBatchResponseV1Mixin::create(),
            ]
        );
    }
}
