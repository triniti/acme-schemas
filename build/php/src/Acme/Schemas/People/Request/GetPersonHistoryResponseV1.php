<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/request/get-person-history-response/1-0-0.json#
namespace Acme\Schemas\People\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1 as GdbotsPbjxGetEventsResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1Mixin as GdbotsPbjxGetEventsResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\People\Mixin\GetPersonHistoryResponse\GetPersonHistoryResponseV1 as TrinitiPeopleGetPersonHistoryResponseV1;
use Triniti\Schemas\People\Mixin\GetPersonHistoryResponse\GetPersonHistoryResponseV1Mixin as TrinitiPeopleGetPersonHistoryResponseV1Mixin;

final class GetPersonHistoryResponseV1 extends AbstractMessage implements
    GetPersonHistoryResponse,
    GdbotsPbjxResponseV1,
    GdbotsPbjxGetEventsResponseV1,
    TrinitiPeopleGetPersonHistoryResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:request:get-person-history-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsPbjxGetEventsResponseV1Mixin::create(),
                TrinitiPeopleGetPersonHistoryResponseV1Mixin::create(),
            ]
        );
    }
}
