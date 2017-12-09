<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/request/get-video-request/1-0-0.json#
namespace Acme\Schemas\Ovp\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1 as GdbotsNcrGetNodeRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Mixin as GdbotsNcrGetNodeRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Ovp\Mixin\GetVideoRequest\GetVideoRequestV1 as TrinitiOvpGetVideoRequestV1;
use Triniti\Schemas\Ovp\Mixin\GetVideoRequest\GetVideoRequestV1Mixin as TrinitiOvpGetVideoRequestV1Mixin;

final class GetVideoRequestV1 extends AbstractMessage implements
    GetVideoRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeRequestV1,
    TrinitiOvpGetVideoRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:request:get-video-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeRequestV1Mixin::create(),
                TrinitiOvpGetVideoRequestV1Mixin::create(),
            ]
        );
    }
}
