<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/get-page-history-request/1-0-0.json#
namespace Acme\Schemas\Pages\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1 as GdbotsPbjxGetEventsRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1Mixin as GdbotsPbjxGetEventsRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Pages\Mixin\GetPageHistoryRequest\GetPageHistoryRequestV1 as TrinitiPagesGetPageHistoryRequestV1;
use Triniti\Schemas\Pages\Mixin\GetPageHistoryRequest\GetPageHistoryRequestV1Mixin as TrinitiPagesGetPageHistoryRequestV1Mixin;

final class GetPageHistoryRequestV1 extends AbstractMessage implements
    GetPageHistoryRequest,
    GdbotsPbjxRequestV1,
    GdbotsPbjxGetEventsRequestV1,
    TrinitiPagesGetPageHistoryRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:request:get-page-history-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsPbjxGetEventsRequestV1Mixin::create(),
                TrinitiPagesGetPageHistoryRequestV1Mixin::create(),
            ]
        );
    }
}
