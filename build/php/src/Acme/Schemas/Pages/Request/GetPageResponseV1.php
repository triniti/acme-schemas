<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/get-page-response/1-0-0.json#
namespace Acme\Schemas\Pages\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Pages\Mixin\GetPageResponse\GetPageResponseV1 as TrinitiPagesGetPageResponseV1;
use Triniti\Schemas\Pages\Mixin\GetPageResponse\GetPageResponseV1Mixin as TrinitiPagesGetPageResponseV1Mixin;

final class GetPageResponseV1 extends AbstractMessage implements
    GetPageResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiPagesGetPageResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:request:get-page-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiPagesGetPageResponseV1Mixin::create(),
            ]
        );
    }
}
