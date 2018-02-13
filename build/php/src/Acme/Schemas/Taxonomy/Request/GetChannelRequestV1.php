<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-channel-request/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1 as GdbotsNcrGetNodeRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Mixin as GdbotsNcrGetNodeRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\GetChannelRequest\GetChannelRequestV1 as TrinitiTaxonomyGetChannelRequestV1;
use Triniti\Schemas\Taxonomy\Mixin\GetChannelRequest\GetChannelRequestV1Mixin as TrinitiTaxonomyGetChannelRequestV1Mixin;

final class GetChannelRequestV1 extends AbstractMessage implements
    GetChannelRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeRequestV1,
    TrinitiTaxonomyGetChannelRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:request:get-channel-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeRequestV1Mixin::create(),
                TrinitiTaxonomyGetChannelRequestV1Mixin::create(),
            ]
        );
    }
}
