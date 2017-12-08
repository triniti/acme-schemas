<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/command/mark-page-as-pending/1-0-0.json#
namespace Acme\Schemas\Canvas\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1 as GdbotsNcrMarkNodeAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1Mixin as GdbotsNcrMarkNodeAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Canvas\Mixin\MarkPageAsPending\MarkPageAsPendingV1 as TrinitiCanvasMarkPageAsPendingV1;
use Triniti\Schemas\Canvas\Mixin\MarkPageAsPending\MarkPageAsPendingV1Mixin as TrinitiCanvasMarkPageAsPendingV1Mixin;

final class MarkPageAsPendingV1 extends AbstractMessage implements
    MarkPageAsPending,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsPendingV1,
    TrinitiCanvasMarkPageAsPendingV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:command:mark-page-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsPendingV1Mixin::create(),
                TrinitiCanvasMarkPageAsPendingV1Mixin::create(),
            ]
        );
    }
}
