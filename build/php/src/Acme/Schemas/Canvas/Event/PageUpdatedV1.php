<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/event/page-updated/1-0-0.json#
namespace Acme\Schemas\Canvas\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1 as GdbotsNcrNodeUpdatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1Mixin as GdbotsNcrNodeUpdatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Canvas\Mixin\PageUpdated\PageUpdatedV1 as TrinitiCanvasPageUpdatedV1;
use Triniti\Schemas\Canvas\Mixin\PageUpdated\PageUpdatedV1Mixin as TrinitiCanvasPageUpdatedV1Mixin;

final class PageUpdatedV1 extends AbstractMessage implements
    PageUpdated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeUpdatedV1,
    TrinitiCanvasPageUpdatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:event:page-updated:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeUpdatedV1Mixin::create(),
                TrinitiCanvasPageUpdatedV1Mixin::create(),
            ]
        );
    }
}
