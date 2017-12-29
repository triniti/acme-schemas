<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/mark-poll-as-pending/1-0-0.json#
namespace Acme\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1 as GdbotsNcrMarkNodeAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1Mixin as GdbotsNcrMarkNodeAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Apollo\Mixin\MarkPollAsPending\MarkPollAsPendingV1 as TrinitiApolloMarkPollAsPendingV1;
use Triniti\Schemas\Apollo\Mixin\MarkPollAsPending\MarkPollAsPendingV1Mixin as TrinitiApolloMarkPollAsPendingV1Mixin;

final class MarkPollAsPendingV1 extends AbstractMessage implements
    MarkPollAsPending,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsPendingV1,
    TrinitiApolloMarkPollAsPendingV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:command:mark-poll-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsPendingV1Mixin::create(),
                TrinitiApolloMarkPollAsPendingV1Mixin::create(),
            ]
        );
    }
}
