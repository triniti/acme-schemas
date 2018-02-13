<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/command/delete-person/1-0-0.json#
namespace Acme\Schemas\People\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1 as GdbotsNcrDeleteNodeV1;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1Mixin as GdbotsNcrDeleteNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\People\Mixin\DeletePerson\DeletePersonV1 as TrinitiPeopleDeletePersonV1;
use Triniti\Schemas\People\Mixin\DeletePerson\DeletePersonV1Mixin as TrinitiPeopleDeletePersonV1Mixin;

final class DeletePersonV1 extends AbstractMessage implements
    DeletePerson,
    GdbotsPbjxCommandV1,
    GdbotsNcrDeleteNodeV1,
    TrinitiPeopleDeletePersonV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:command:delete-person:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrDeleteNodeV1Mixin::create(),
                TrinitiPeopleDeletePersonV1Mixin::create(),
            ]
        );
    }
}
