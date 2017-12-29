<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/event/poll-marked-as-pending/1-0-0.json#
namespace Acme\Schemas\Apollo\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1 as GdbotsNcrNodeMarkedAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1Mixin as GdbotsNcrNodeMarkedAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Apollo\Mixin\PollMarkedAsPending\PollMarkedAsPendingV1 as TrinitiApolloPollMarkedAsPendingV1;
use Triniti\Schemas\Apollo\Mixin\PollMarkedAsPending\PollMarkedAsPendingV1Mixin as TrinitiApolloPollMarkedAsPendingV1Mixin;

final class PollMarkedAsPendingV1 extends AbstractMessage implements
    PollMarkedAsPending,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeMarkedAsPendingV1,
    TrinitiApolloPollMarkedAsPendingV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:event:poll-marked-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeMarkedAsPendingV1Mixin::create(),
                TrinitiApolloPollMarkedAsPendingV1Mixin::create(),
            ]
        );
    }
}
