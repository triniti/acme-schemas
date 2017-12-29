<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/event/poll-deleted/1-0-0.json#
namespace Acme\Schemas\Apollo\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1 as GdbotsNcrNodeDeletedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1Mixin as GdbotsNcrNodeDeletedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Apollo\Mixin\PollDeleted\PollDeletedV1 as TrinitiApolloPollDeletedV1;
use Triniti\Schemas\Apollo\Mixin\PollDeleted\PollDeletedV1Mixin as TrinitiApolloPollDeletedV1Mixin;

final class PollDeletedV1 extends AbstractMessage implements
    PollDeleted,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeDeletedV1,
    TrinitiApolloPollDeletedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:event:poll-deleted:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeDeletedV1Mixin::create(),
                TrinitiApolloPollDeletedV1Mixin::create(),
            ]
        );
    }
}
