<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/command/create-person/1-0-0.json#
namespace Acme\Schemas\People\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\People\Mixin\CreatePerson\CreatePersonV1 as TrinitiPeopleCreatePersonV1;
use Triniti\Schemas\People\Mixin\CreatePerson\CreatePersonV1Mixin as TrinitiPeopleCreatePersonV1Mixin;

final class CreatePersonV1 extends AbstractMessage implements
    CreatePerson,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1,
    TrinitiPeopleCreatePersonV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:command:create-person:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
                TrinitiPeopleCreatePersonV1Mixin::create(),
            ]
        );
    }
}
