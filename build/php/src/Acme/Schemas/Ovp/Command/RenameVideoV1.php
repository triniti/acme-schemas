<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/command/rename-video/1-0-0.json#
namespace Acme\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1 as GdbotsNcrRenameNodeV1;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1Mixin as GdbotsNcrRenameNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Mixin\RenameVideo\RenameVideoV1 as TrinitiOvpRenameVideoV1;
use Triniti\Schemas\Ovp\Mixin\RenameVideo\RenameVideoV1Mixin as TrinitiOvpRenameVideoV1Mixin;

final class RenameVideoV1 extends AbstractMessage implements
    RenameVideo,
    GdbotsPbjxCommandV1,
    GdbotsNcrRenameNodeV1,
    TrinitiOvpRenameVideoV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:command:rename-video:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrRenameNodeV1Mixin::create(),
                TrinitiOvpRenameVideoV1Mixin::create(),
            ]
        );
    }
}
