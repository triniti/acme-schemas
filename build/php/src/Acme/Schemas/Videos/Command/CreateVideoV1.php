<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/command/create-video/1-0-0.json#
namespace Acme\Schemas\Videos\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Videos\Mixin\CreateVideo\CreateVideoV1 as TrinitiVideosCreateVideoV1;
use Triniti\Schemas\Videos\Mixin\CreateVideo\CreateVideoV1Mixin as TrinitiVideosCreateVideoV1Mixin;

final class CreateVideoV1 extends AbstractMessage implements
    CreateVideo,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1,
    TrinitiVideosCreateVideoV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:command:create-video:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
                TrinitiVideosCreateVideoV1Mixin::create(),
            ]
        );
    }
}
