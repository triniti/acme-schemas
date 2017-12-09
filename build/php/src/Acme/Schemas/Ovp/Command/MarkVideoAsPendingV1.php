<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/command/mark-video-as-pending/1-0-0.json#
namespace Acme\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1 as GdbotsNcrMarkNodeAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1Mixin as GdbotsNcrMarkNodeAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Mixin\MarkVideoAsPending\MarkVideoAsPendingV1 as TrinitiOvpMarkVideoAsPendingV1;
use Triniti\Schemas\Ovp\Mixin\MarkVideoAsPending\MarkVideoAsPendingV1Mixin as TrinitiOvpMarkVideoAsPendingV1Mixin;

final class MarkVideoAsPendingV1 extends AbstractMessage implements
    MarkVideoAsPending,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsPendingV1,
    TrinitiOvpMarkVideoAsPendingV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:command:mark-video-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsPendingV1Mixin::create(),
                TrinitiOvpMarkVideoAsPendingV1Mixin::create(),
            ]
        );
    }
}
