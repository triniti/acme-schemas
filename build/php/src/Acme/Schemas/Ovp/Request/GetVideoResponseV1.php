<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/request/get-video-response/1-0-0.json#
namespace Acme\Schemas\Ovp\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Ovp\Mixin\GetVideoResponse\GetVideoResponseV1 as TrinitiOvpGetVideoResponseV1;
use Triniti\Schemas\Ovp\Mixin\GetVideoResponse\GetVideoResponseV1Mixin as TrinitiOvpGetVideoResponseV1Mixin;

final class GetVideoResponseV1 extends AbstractMessage implements
    GetVideoResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiOvpGetVideoResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:request:get-video-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiOvpGetVideoResponseV1Mixin::create(),
            ]
        );
    }
}
