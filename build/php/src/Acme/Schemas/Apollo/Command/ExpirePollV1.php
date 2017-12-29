<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/expire-poll/1-0-0.json#
namespace Acme\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1 as GdbotsNcrExpireNodeV1;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1Mixin as GdbotsNcrExpireNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Apollo\Mixin\ExpirePoll\ExpirePollV1 as TrinitiApolloExpirePollV1;
use Triniti\Schemas\Apollo\Mixin\ExpirePoll\ExpirePollV1Mixin as TrinitiApolloExpirePollV1Mixin;

final class ExpirePollV1 extends AbstractMessage implements
    ExpirePoll,
    GdbotsPbjxCommandV1,
    GdbotsNcrExpireNodeV1,
    TrinitiApolloExpirePollV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:command:expire-poll:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrExpireNodeV1Mixin::create(),
                TrinitiApolloExpirePollV1Mixin::create(),
            ]
        );
    }
}
