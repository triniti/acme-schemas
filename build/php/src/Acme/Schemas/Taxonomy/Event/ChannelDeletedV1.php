<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/channel-deleted/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1 as GdbotsNcrNodeDeletedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1Mixin as GdbotsNcrNodeDeletedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\ChannelDeleted\ChannelDeletedV1 as TrinitiTaxonomyChannelDeletedV1;
use Triniti\Schemas\Taxonomy\Mixin\ChannelDeleted\ChannelDeletedV1Mixin as TrinitiTaxonomyChannelDeletedV1Mixin;

final class ChannelDeletedV1 extends AbstractMessage implements
    ChannelDeleted,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeDeletedV1,
    TrinitiTaxonomyChannelDeletedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:event:channel-deleted:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeDeletedV1Mixin::create(),
                TrinitiTaxonomyChannelDeletedV1Mixin::create(),
            ]
        );
    }
}
