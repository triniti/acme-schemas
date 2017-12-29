<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-history-response/1-0-0.json#
namespace Acme\Schemas\Apollo\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1 as GdbotsPbjxGetEventsResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1Mixin as GdbotsPbjxGetEventsResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Apollo\Mixin\GetPollHistoryResponse\GetPollHistoryResponseV1 as TrinitiApolloGetPollHistoryResponseV1;
use Triniti\Schemas\Apollo\Mixin\GetPollHistoryResponse\GetPollHistoryResponseV1Mixin as TrinitiApolloGetPollHistoryResponseV1Mixin;

final class GetPollHistoryResponseV1 extends AbstractMessage implements
    GetPollHistoryResponse,
    GdbotsPbjxResponseV1,
    GdbotsPbjxGetEventsResponseV1,
    TrinitiApolloGetPollHistoryResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:request:get-poll-history-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsPbjxGetEventsResponseV1Mixin::create(),
                TrinitiApolloGetPollHistoryResponseV1Mixin::create(),
            ]
        );
    }
}
