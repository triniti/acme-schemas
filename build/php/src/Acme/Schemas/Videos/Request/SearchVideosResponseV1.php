<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/search-videos-response/1-0-0.json#
namespace Acme\Schemas\Videos\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesResponse\SearchNodesResponseV1 as GdbotsNcrSearchNodesResponseV1;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesResponse\SearchNodesResponseV1Mixin as GdbotsNcrSearchNodesResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Videos\Mixin\SearchVideosResponse\SearchVideosResponseV1 as TrinitiVideosSearchVideosResponseV1;
use Triniti\Schemas\Videos\Mixin\SearchVideosResponse\SearchVideosResponseV1Mixin as TrinitiVideosSearchVideosResponseV1Mixin;

final class SearchVideosResponseV1 extends AbstractMessage implements
    SearchVideosResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrSearchNodesResponseV1,
    TrinitiVideosSearchVideosResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:request:search-videos-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrSearchNodesResponseV1Mixin::create(),
                TrinitiVideosSearchVideosResponseV1Mixin::create(),
            ]
        );
    }
}
