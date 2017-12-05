<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/get-video-history-request/1-0-0.json#
namespace Acme\Schemas\Videos\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1 as GdbotsPbjxGetEventsRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1Mixin as GdbotsPbjxGetEventsRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Ovp\Mixin\GetVideoHistoryRequest\GetVideoHistoryRequestV1 as TrinitiOvpGetVideoHistoryRequestV1;
use Triniti\Schemas\Ovp\Mixin\GetVideoHistoryRequest\GetVideoHistoryRequestV1Mixin as TrinitiOvpGetVideoHistoryRequestV1Mixin;

final class GetVideoHistoryRequestV1 extends AbstractMessage implements
    GetVideoHistoryRequest,
    GdbotsPbjxRequestV1,
    GdbotsPbjxGetEventsRequestV1,
    TrinitiOvpGetVideoHistoryRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:request:get-video-history-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsPbjxGetEventsRequestV1Mixin::create(),
                TrinitiOvpGetVideoHistoryRequestV1Mixin::create(),
            ]
        );
    }
}
