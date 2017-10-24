<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/get-page-history-response/1-0-0.json#
namespace Acme\Schemas\Pages\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1 as GdbotsPbjxGetEventsResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1Mixin as GdbotsPbjxGetEventsResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Pages\Mixin\GetPageHistoryResponse\GetPageHistoryResponseV1 as TrinitiPagesGetPageHistoryResponseV1;
use Triniti\Schemas\Pages\Mixin\GetPageHistoryResponse\GetPageHistoryResponseV1Mixin as TrinitiPagesGetPageHistoryResponseV1Mixin;

final class GetPageHistoryResponseV1 extends AbstractMessage implements
    GetPageHistoryResponse,
    GdbotsPbjxResponseV1,
    GdbotsPbjxGetEventsResponseV1,
    TrinitiPagesGetPageHistoryResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:request:get-page-history-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsPbjxGetEventsResponseV1Mixin::create(),
                TrinitiPagesGetPageHistoryResponseV1Mixin::create(),
            ]
        );
    }
}
