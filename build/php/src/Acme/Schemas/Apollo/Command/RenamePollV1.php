<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/rename-poll/1-0-0.json#
namespace Acme\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1 as GdbotsNcrRenameNodeV1;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1Mixin as GdbotsNcrRenameNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Apollo\Mixin\RenamePoll\RenamePollV1 as TrinitiApolloRenamePollV1;
use Triniti\Schemas\Apollo\Mixin\RenamePoll\RenamePollV1Mixin as TrinitiApolloRenamePollV1Mixin;

final class RenamePollV1 extends AbstractMessage implements
    RenamePoll,
    GdbotsPbjxCommandV1,
    GdbotsNcrRenameNodeV1,
    TrinitiApolloRenamePollV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:command:rename-poll:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrRenameNodeV1Mixin::create(),
                TrinitiApolloRenamePollV1Mixin::create(),
            ]
        );
    }
}
