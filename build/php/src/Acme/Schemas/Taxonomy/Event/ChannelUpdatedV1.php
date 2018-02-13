<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/channel-updated/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1 as GdbotsNcrNodeUpdatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1Mixin as GdbotsNcrNodeUpdatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\ChannelUpdated\ChannelUpdatedV1 as TrinitiTaxonomyChannelUpdatedV1;
use Triniti\Schemas\Taxonomy\Mixin\ChannelUpdated\ChannelUpdatedV1Mixin as TrinitiTaxonomyChannelUpdatedV1Mixin;

final class ChannelUpdatedV1 extends AbstractMessage implements
    ChannelUpdated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeUpdatedV1,
    TrinitiTaxonomyChannelUpdatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:event:channel-updated:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeUpdatedV1Mixin::create(),
                TrinitiTaxonomyChannelUpdatedV1Mixin::create(),
            ]
        );
    }
}
