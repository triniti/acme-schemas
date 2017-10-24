<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/search-pages-request/1-0-0.json#
namespace Acme\Schemas\Pages\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesRequest\SearchNodesRequestV1 as GdbotsNcrSearchNodesRequestV1;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesRequest\SearchNodesRequestV1Mixin as GdbotsNcrSearchNodesRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Pages\Mixin\SearchPagesRequest\SearchPagesRequestV1 as TrinitiPagesSearchPagesRequestV1;
use Triniti\Schemas\Pages\Mixin\SearchPagesRequest\SearchPagesRequestV1Mixin as TrinitiPagesSearchPagesRequestV1Mixin;

final class SearchPagesRequestV1 extends AbstractMessage implements
    SearchPagesRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrSearchNodesRequestV1,
    TrinitiPagesSearchPagesRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:request:search-pages-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrSearchNodesRequestV1Mixin::create(),
                TrinitiPagesSearchPagesRequestV1Mixin::create(),
            ]
        );
    }
}
