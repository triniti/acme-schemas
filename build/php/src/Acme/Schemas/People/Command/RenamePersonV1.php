<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/command/rename-person/1-0-0.json#
namespace Acme\Schemas\People\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1 as GdbotsNcrRenameNodeV1;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1Mixin as GdbotsNcrRenameNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\People\Mixin\RenamePerson\RenamePersonV1 as TrinitiPeopleRenamePersonV1;
use Triniti\Schemas\People\Mixin\RenamePerson\RenamePersonV1Mixin as TrinitiPeopleRenamePersonV1Mixin;

final class RenamePersonV1 extends AbstractMessage implements
    RenamePerson,
    GdbotsPbjxCommandV1,
    GdbotsNcrRenameNodeV1,
    TrinitiPeopleRenamePersonV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:command:rename-person:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrRenameNodeV1Mixin::create(),
                TrinitiPeopleRenamePersonV1Mixin::create(),
            ]
        );
    }
}
