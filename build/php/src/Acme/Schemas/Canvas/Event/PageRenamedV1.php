<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/event/page-renamed/1-0-0.json#
namespace Acme\Schemas\Canvas\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1 as GdbotsNcrNodeRenamedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1Mixin as GdbotsNcrNodeRenamedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Canvas\Mixin\PageRenamed\PageRenamedV1 as TrinitiCanvasPageRenamedV1;
use Triniti\Schemas\Canvas\Mixin\PageRenamed\PageRenamedV1Mixin as TrinitiCanvasPageRenamedV1Mixin;

final class PageRenamedV1 extends AbstractMessage implements
    PageRenamed,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeRenamedV1,
    TrinitiCanvasPageRenamedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:event:page-renamed:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeRenamedV1Mixin::create(),
                TrinitiCanvasPageRenamedV1Mixin::create(),
            ]
        );
    }
}