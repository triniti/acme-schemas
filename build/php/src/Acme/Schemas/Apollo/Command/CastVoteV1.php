<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/cast-vote/1-0-0.json#
namespace Acme\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Apollo\Mixin\CastVote\CastVoteV1 as TrinitiApolloCastVoteV1;
use Triniti\Schemas\Apollo\Mixin\CastVote\CastVoteV1Mixin as TrinitiApolloCastVoteV1Mixin;

final class CastVoteV1 extends AbstractMessage implements
    CastVote,
    GdbotsPbjxCommandV1,
    TrinitiApolloCastVoteV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:command:cast-vote:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                TrinitiApolloCastVoteV1Mixin::create(),
            ]
        );
    }
}
