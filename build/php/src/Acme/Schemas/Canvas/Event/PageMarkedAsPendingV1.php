<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/event/page-marked-as-pending/1-0-0.json#
namespace Acme\Schemas\Canvas\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1 as GdbotsNcrNodeMarkedAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1Mixin as GdbotsNcrNodeMarkedAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Canvas\Mixin\PageMarkedAsPending\PageMarkedAsPendingV1 as TrinitiCanvasPageMarkedAsPendingV1;
use Triniti\Schemas\Canvas\Mixin\PageMarkedAsPending\PageMarkedAsPendingV1Mixin as TrinitiCanvasPageMarkedAsPendingV1Mixin;

final class PageMarkedAsPendingV1 extends AbstractMessage implements
    PageMarkedAsPending,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeMarkedAsPendingV1,
    TrinitiCanvasPageMarkedAsPendingV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:event:page-marked-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeMarkedAsPendingV1Mixin::create(),
                TrinitiCanvasPageMarkedAsPendingV1Mixin::create(),
            ]
        );
    }
}
