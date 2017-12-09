<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/request/get-page-history-response/1-0-0.json#
namespace Acme\Schemas\Canvas\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1 as GdbotsPbjxGetEventsResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1Mixin as GdbotsPbjxGetEventsResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Canvas\Mixin\GetPageHistoryResponse\GetPageHistoryResponseV1 as TrinitiCanvasGetPageHistoryResponseV1;
use Triniti\Schemas\Canvas\Mixin\GetPageHistoryResponse\GetPageHistoryResponseV1Mixin as TrinitiCanvasGetPageHistoryResponseV1Mixin;

final class GetPageHistoryResponseV1 extends AbstractMessage implements
    GetPageHistoryResponse,
    GdbotsPbjxResponseV1,
    GdbotsPbjxGetEventsResponseV1,
    TrinitiCanvasGetPageHistoryResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:request:get-page-history-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsPbjxGetEventsResponseV1Mixin::create(),
                TrinitiCanvasGetPageHistoryResponseV1Mixin::create(),
            ]
        );
    }
}
