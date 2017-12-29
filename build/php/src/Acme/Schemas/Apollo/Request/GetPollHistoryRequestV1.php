<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-history-request/1-0-0.json#
namespace Acme\Schemas\Apollo\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1 as GdbotsPbjxGetEventsRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1Mixin as GdbotsPbjxGetEventsRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Apollo\Mixin\GetPollHistoryRequest\GetPollHistoryRequestV1 as TrinitiApolloGetPollHistoryRequestV1;
use Triniti\Schemas\Apollo\Mixin\GetPollHistoryRequest\GetPollHistoryRequestV1Mixin as TrinitiApolloGetPollHistoryRequestV1Mixin;

final class GetPollHistoryRequestV1 extends AbstractMessage implements
    GetPollHistoryRequest,
    GdbotsPbjxRequestV1,
    GdbotsPbjxGetEventsRequestV1,
    TrinitiApolloGetPollHistoryRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:request:get-poll-history-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsPbjxGetEventsRequestV1Mixin::create(),
                TrinitiApolloGetPollHistoryRequestV1Mixin::create(),
            ]
        );
    }
}