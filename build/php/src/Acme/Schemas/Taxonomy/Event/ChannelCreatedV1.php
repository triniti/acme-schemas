<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/channel-created/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1 as GdbotsNcrNodeCreatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1Mixin as GdbotsNcrNodeCreatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\ChannelCreated\ChannelCreatedV1 as TrinitiTaxonomyChannelCreatedV1;
use Triniti\Schemas\Taxonomy\Mixin\ChannelCreated\ChannelCreatedV1Mixin as TrinitiTaxonomyChannelCreatedV1Mixin;

final class ChannelCreatedV1 extends AbstractMessage implements
    ChannelCreated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeCreatedV1,
    TrinitiTaxonomyChannelCreatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:event:channel-created:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeCreatedV1Mixin::create(),
                TrinitiTaxonomyChannelCreatedV1Mixin::create(),
            ]
        );
    }
}
