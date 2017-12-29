<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/publish-poll/1-0-0.json#
namespace Acme\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1 as GdbotsNcrPublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1Mixin as GdbotsNcrPublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Apollo\Mixin\PublishPoll\PublishPollV1 as TrinitiApolloPublishPollV1;
use Triniti\Schemas\Apollo\Mixin\PublishPoll\PublishPollV1Mixin as TrinitiApolloPublishPollV1Mixin;

final class PublishPollV1 extends AbstractMessage implements
    PublishPoll,
    GdbotsPbjxCommandV1,
    GdbotsNcrPublishNodeV1,
    TrinitiApolloPublishPollV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:command:publish-poll:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrPublishNodeV1Mixin::create(),
                TrinitiApolloPublishPollV1Mixin::create(),
            ]
        );
    }
}
