<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/get-video-history-response/1-0-0.json#
namespace Acme\Schemas\Videos\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1 as GdbotsPbjxGetEventsResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1Mixin as GdbotsPbjxGetEventsResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Videos\Mixin\GetVideoHistoryResponse\GetVideoHistoryResponseV1 as TrinitiVideosGetVideoHistoryResponseV1;
use Triniti\Schemas\Videos\Mixin\GetVideoHistoryResponse\GetVideoHistoryResponseV1Mixin as TrinitiVideosGetVideoHistoryResponseV1Mixin;

final class GetVideoHistoryResponseV1 extends AbstractMessage implements
    GetVideoHistoryResponse,
    GdbotsPbjxResponseV1,
    GdbotsPbjxGetEventsResponseV1,
    TrinitiVideosGetVideoHistoryResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:request:get-video-history-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsPbjxGetEventsResponseV1Mixin::create(),
                TrinitiVideosGetVideoHistoryResponseV1Mixin::create(),
            ]
        );
    }
}
