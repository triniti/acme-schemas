<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/request/get-person-history-request/1-0-0.json#
namespace Acme\Schemas\People\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1 as GdbotsPbjxGetEventsRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1Mixin as GdbotsPbjxGetEventsRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\People\Mixin\GetPersonHistoryRequest\GetPersonHistoryRequestV1 as TrinitiPeopleGetPersonHistoryRequestV1;
use Triniti\Schemas\People\Mixin\GetPersonHistoryRequest\GetPersonHistoryRequestV1Mixin as TrinitiPeopleGetPersonHistoryRequestV1Mixin;

final class GetPersonHistoryRequestV1 extends AbstractMessage implements
    GetPersonHistoryRequest,
    GdbotsPbjxRequestV1,
    GdbotsPbjxGetEventsRequestV1,
    TrinitiPeopleGetPersonHistoryRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:request:get-person-history-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsPbjxGetEventsRequestV1Mixin::create(),
                TrinitiPeopleGetPersonHistoryRequestV1Mixin::create(),
            ]
        );
    }
}
