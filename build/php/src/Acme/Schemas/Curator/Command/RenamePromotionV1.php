<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/curator/command/rename-promotion/1-0-0.json#
namespace Acme\Schemas\Curator\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1 as GdbotsNcrRenameNodeV1;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1Mixin as GdbotsNcrRenameNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class RenamePromotionV1 extends AbstractMessage implements
    RenamePromotion,
    GdbotsPbjxCommandV1,
    GdbotsNcrRenameNodeV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:curator:command:rename-promotion:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrRenameNodeV1Mixin::create(),
            ]
        );
    }
}
