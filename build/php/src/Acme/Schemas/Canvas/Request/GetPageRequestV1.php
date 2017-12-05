<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/request/get-page-request/1-0-0.json#
namespace Acme\Schemas\Canvas\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1 as GdbotsNcrGetNodeRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Mixin as GdbotsNcrGetNodeRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Canvas\Mixin\GetPageRequest\GetPageRequestV1 as TrinitiCanvasGetPageRequestV1;
use Triniti\Schemas\Canvas\Mixin\GetPageRequest\GetPageRequestV1Mixin as TrinitiCanvasGetPageRequestV1Mixin;

final class GetPageRequestV1 extends AbstractMessage implements
    GetPageRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeRequestV1,
    TrinitiCanvasGetPageRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:request:get-page-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeRequestV1Mixin::create(),
                TrinitiCanvasGetPageRequestV1Mixin::create(),
            ]
        );
    }
}
