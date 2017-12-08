<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/event/page-expired/1-0-0.json#
namespace Acme\Schemas\Canvas\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeExpired\NodeExpiredV1 as GdbotsNcrNodeExpiredV1;
use Gdbots\Schemas\Ncr\Mixin\NodeExpired\NodeExpiredV1Mixin as GdbotsNcrNodeExpiredV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Canvas\Mixin\PageExpired\PageExpiredV1 as TrinitiCanvasPageExpiredV1;
use Triniti\Schemas\Canvas\Mixin\PageExpired\PageExpiredV1Mixin as TrinitiCanvasPageExpiredV1Mixin;

final class PageExpiredV1 extends AbstractMessage implements
    PageExpired,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeExpiredV1,
    TrinitiCanvasPageExpiredV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:event:page-expired:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeExpiredV1Mixin::create(),
                TrinitiCanvasPageExpiredV1Mixin::create(),
            ]
        );
    }
}
