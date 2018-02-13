<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/command/update-person/1-0-0.json#
namespace Acme\Schemas\People\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1 as GdbotsNcrUpdateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Mixin as GdbotsNcrUpdateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\People\Mixin\UpdatePerson\UpdatePersonV1 as TrinitiPeopleUpdatePersonV1;
use Triniti\Schemas\People\Mixin\UpdatePerson\UpdatePersonV1Mixin as TrinitiPeopleUpdatePersonV1Mixin;

final class UpdatePersonV1 extends AbstractMessage implements
    UpdatePerson,
    GdbotsPbjxCommandV1,
    GdbotsNcrUpdateNodeV1,
    TrinitiPeopleUpdatePersonV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:command:update-person:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUpdateNodeV1Mixin::create(),
                TrinitiPeopleUpdatePersonV1Mixin::create(),
            ]
        );
    }
}
