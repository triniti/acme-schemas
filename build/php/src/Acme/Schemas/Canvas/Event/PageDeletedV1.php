<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/event/page-deleted/1-0-0.json#
namespace Acme\Schemas\Canvas\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1 as GdbotsNcrNodeDeletedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1Mixin as GdbotsNcrNodeDeletedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Canvas\Mixin\PageDeleted\PageDeletedV1 as TrinitiCanvasPageDeletedV1;
use Triniti\Schemas\Canvas\Mixin\PageDeleted\PageDeletedV1Mixin as TrinitiCanvasPageDeletedV1Mixin;

final class PageDeletedV1 extends AbstractMessage implements
    PageDeleted,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeDeletedV1,
    TrinitiCanvasPageDeletedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:event:page-deleted:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeDeletedV1Mixin::create(),
                TrinitiCanvasPageDeletedV1Mixin::create(),
            ]
        );
    }
}
