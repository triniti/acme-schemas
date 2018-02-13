<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/channel-renamed/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1 as GdbotsNcrNodeRenamedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1Mixin as GdbotsNcrNodeRenamedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\ChannelRenamed\ChannelRenamedV1 as TrinitiTaxonomyChannelRenamedV1;
use Triniti\Schemas\Taxonomy\Mixin\ChannelRenamed\ChannelRenamedV1Mixin as TrinitiTaxonomyChannelRenamedV1Mixin;

final class ChannelRenamedV1 extends AbstractMessage implements
    ChannelRenamed,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeRenamedV1,
    TrinitiTaxonomyChannelRenamedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:event:channel-renamed:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeRenamedV1Mixin::create(),
                TrinitiTaxonomyChannelRenamedV1Mixin::create(),
            ]
        );
    }
}
