<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-channel-response/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\GetChannelResponse\GetChannelResponseV1 as TrinitiTaxonomyGetChannelResponseV1;
use Triniti\Schemas\Taxonomy\Mixin\GetChannelResponse\GetChannelResponseV1Mixin as TrinitiTaxonomyGetChannelResponseV1Mixin;

final class GetChannelResponseV1 extends AbstractMessage implements
    GetChannelResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiTaxonomyGetChannelResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:request:get-channel-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiTaxonomyGetChannelResponseV1Mixin::create(),
            ]
        );
    }
}
