<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/get-page-request/1-0-0.json#
namespace Acme\Schemas\Pages\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1 as GdbotsNcrGetNodeRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Mixin as GdbotsNcrGetNodeRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Pages\Mixin\GetPageRequest\GetPageRequestV1 as TrinitiPagesGetPageRequestV1;
use Triniti\Schemas\Pages\Mixin\GetPageRequest\GetPageRequestV1Mixin as TrinitiPagesGetPageRequestV1Mixin;

final class GetPageRequestV1 extends AbstractMessage implements
    GetPageRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeRequestV1,
    TrinitiPagesGetPageRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:request:get-page-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeRequestV1Mixin::create(),
                TrinitiPagesGetPageRequestV1Mixin::create(),
            ]
        );
    }
}
