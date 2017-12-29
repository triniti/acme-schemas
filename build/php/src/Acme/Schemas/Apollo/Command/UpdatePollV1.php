<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/update-poll/1-0-0.json#
namespace Acme\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1 as GdbotsNcrUpdateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Mixin as GdbotsNcrUpdateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Apollo\Mixin\UpdatePoll\UpdatePollV1 as TrinitiApolloUpdatePollV1;
use Triniti\Schemas\Apollo\Mixin\UpdatePoll\UpdatePollV1Mixin as TrinitiApolloUpdatePollV1Mixin;

final class UpdatePollV1 extends AbstractMessage implements
    UpdatePoll,
    GdbotsPbjxCommandV1,
    GdbotsNcrUpdateNodeV1,
    TrinitiApolloUpdatePollV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:command:update-poll:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUpdateNodeV1Mixin::create(),
                TrinitiApolloUpdatePollV1Mixin::create(),
            ]
        );
    }
}
