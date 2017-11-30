<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/command/delete-video/1-0-0.json#
namespace Acme\Schemas\Videos\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1 as GdbotsNcrDeleteNodeV1;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1Mixin as GdbotsNcrDeleteNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Videos\Mixin\DeleteVideo\DeleteVideoV1 as TrinitiVideosDeleteVideoV1;
use Triniti\Schemas\Videos\Mixin\DeleteVideo\DeleteVideoV1Mixin as TrinitiVideosDeleteVideoV1Mixin;

final class DeleteVideoV1 extends AbstractMessage implements
    DeleteVideo,
    GdbotsPbjxCommandV1,
    GdbotsNcrDeleteNodeV1,
    TrinitiVideosDeleteVideoV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:command:delete-video:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrDeleteNodeV1Mixin::create(),
                TrinitiVideosDeleteVideoV1Mixin::create(),
            ]
        );
    }
}
