<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/mark-poll-as-draft/1-0-0.json#
namespace Acme\Schemas\Apollo\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1 as GdbotsNcrMarkNodeAsDraftV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1Mixin as GdbotsNcrMarkNodeAsDraftV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Apollo\Mixin\MarkPollAsDraft\MarkPollAsDraftV1 as TrinitiApolloMarkPollAsDraftV1;
use Triniti\Schemas\Apollo\Mixin\MarkPollAsDraft\MarkPollAsDraftV1Mixin as TrinitiApolloMarkPollAsDraftV1Mixin;

final class MarkPollAsDraftV1 extends AbstractMessage implements
    MarkPollAsDraft,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsDraftV1,
    TrinitiApolloMarkPollAsDraftV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:apollo:command:mark-poll-as-draft:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsDraftV1Mixin::create(),
                TrinitiApolloMarkPollAsDraftV1Mixin::create(),
            ]
        );
    }
}
