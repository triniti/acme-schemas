<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/get-video-request/1-0-0.json#
namespace Acme\Schemas\Videos\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1 as GdbotsNcrGetNodeRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Mixin as GdbotsNcrGetNodeRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Videos\Mixin\GetVideoRequest\GetVideoRequestV1 as TrinitiVideosGetVideoRequestV1;
use Triniti\Schemas\Videos\Mixin\GetVideoRequest\GetVideoRequestV1Mixin as TrinitiVideosGetVideoRequestV1Mixin;

final class GetVideoRequestV1 extends AbstractMessage implements
    GetVideoRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeRequestV1,
    TrinitiVideosGetVideoRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:request:get-video-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeRequestV1Mixin::create(),
                TrinitiVideosGetVideoRequestV1Mixin::create(),
            ]
        );
    }
}
