<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/get-video-response/1-0-0.json#
namespace Acme\Schemas\Videos\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Videos\Mixin\GetVideoResponse\GetVideoResponseV1 as TrinitiVideosGetVideoResponseV1;
use Triniti\Schemas\Videos\Mixin\GetVideoResponse\GetVideoResponseV1Mixin as TrinitiVideosGetVideoResponseV1Mixin;

final class GetVideoResponseV1 extends AbstractMessage implements
    GetVideoResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiVideosGetVideoResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:request:get-video-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiVideosGetVideoResponseV1Mixin::create(),
            ]
        );
    }
}
