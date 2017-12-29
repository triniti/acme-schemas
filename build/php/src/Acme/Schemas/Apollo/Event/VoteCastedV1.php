<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/event/vote-casted/1-0-0.json#
namespace Acme\Schemas\Apollo\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Apollo\Mixin\VoteCasted\VoteCastedV1 as TrinitiApolloVoteCastedV1;
use Triniti\Schemas\Apollo\Mixin\VoteCasted\VoteCastedV1Mixin as TrinitiApolloVoteCastedV1Mixin;

final class VoteCastedV1 extends AbstractMessage implements
    VoteCasted,
    GdbotsPbjxEventV1,
    TrinitiApolloVoteCastedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:event:vote-casted:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                TrinitiApolloVoteCastedV1Mixin::create(),
            ]
        );
    }
}
