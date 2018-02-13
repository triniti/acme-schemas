<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/delete-channel/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1 as GdbotsNcrDeleteNodeV1;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1Mixin as GdbotsNcrDeleteNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\DeleteChannel\DeleteChannelV1 as TrinitiTaxonomyDeleteChannelV1;
use Triniti\Schemas\Taxonomy\Mixin\DeleteChannel\DeleteChannelV1Mixin as TrinitiTaxonomyDeleteChannelV1Mixin;

final class DeleteChannelV1 extends AbstractMessage implements
    DeleteChannel,
    GdbotsPbjxCommandV1,
    GdbotsNcrDeleteNodeV1,
    TrinitiTaxonomyDeleteChannelV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:command:delete-channel:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrDeleteNodeV1Mixin::create(),
                TrinitiTaxonomyDeleteChannelV1Mixin::create(),
            ]
        );
    }
}
