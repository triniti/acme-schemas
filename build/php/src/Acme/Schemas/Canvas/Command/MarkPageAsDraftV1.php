<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/command/mark-page-as-draft/1-0-0.json#
namespace Acme\Schemas\Canvas\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1 as GdbotsNcrMarkNodeAsDraftV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1Mixin as GdbotsNcrMarkNodeAsDraftV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Canvas\Mixin\MarkPageAsDraft\MarkPageAsDraftV1 as TrinitiCanvasMarkPageAsDraftV1;
use Triniti\Schemas\Canvas\Mixin\MarkPageAsDraft\MarkPageAsDraftV1Mixin as TrinitiCanvasMarkPageAsDraftV1Mixin;

final class MarkPageAsDraftV1 extends AbstractMessage implements
    MarkPageAsDraft,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsDraftV1,
    TrinitiCanvasMarkPageAsDraftV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:command:mark-page-as-draft:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsDraftV1Mixin::create(),
                TrinitiCanvasMarkPageAsDraftV1Mixin::create(),
            ]
        );
    }
}