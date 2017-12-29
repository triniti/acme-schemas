<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/delete-poll/1-0-0.json#
namespace Acme\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1 as GdbotsNcrDeleteNodeV1;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1Mixin as GdbotsNcrDeleteNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Apollo\Mixin\DeletePoll\DeletePollV1 as TrinitiApolloDeletePollV1;
use Triniti\Schemas\Apollo\Mixin\DeletePoll\DeletePollV1Mixin as TrinitiApolloDeletePollV1Mixin;

final class DeletePollV1 extends AbstractMessage implements
    DeletePoll,
    GdbotsPbjxCommandV1,
    GdbotsNcrDeleteNodeV1,
    TrinitiApolloDeletePollV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:command:delete-poll:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrDeleteNodeV1Mixin::create(),
                TrinitiApolloDeletePollV1Mixin::create(),
            ]
        );
    }
}