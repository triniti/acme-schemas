<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/event/page-created/1-0-0.json#
namespace Acme\Schemas\Canvas\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1 as GdbotsNcrNodeCreatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1Mixin as GdbotsNcrNodeCreatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Canvas\Mixin\PageCreated\PageCreatedV1 as TrinitiCanvasPageCreatedV1;
use Triniti\Schemas\Canvas\Mixin\PageCreated\PageCreatedV1Mixin as TrinitiCanvasPageCreatedV1Mixin;

final class PageCreatedV1 extends AbstractMessage implements
    PageCreated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeCreatedV1,
    TrinitiCanvasPageCreatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:event:page-created:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeCreatedV1Mixin::create(),
                TrinitiCanvasPageCreatedV1Mixin::create(),
            ]
        );
    }
}
