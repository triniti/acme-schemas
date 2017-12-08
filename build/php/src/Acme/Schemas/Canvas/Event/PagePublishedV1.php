<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/event/page-published/1-0-0.json#
namespace Acme\Schemas\Canvas\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1 as GdbotsAnalyticsTrackedMessageV1;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1Mixin as GdbotsAnalyticsTrackedMessageV1Mixin;
use Gdbots\Schemas\Enrichments\Mixin\TimeParting\TimePartingV1 as GdbotsEnrichmentsTimePartingV1;
use Gdbots\Schemas\Enrichments\Mixin\TimeParting\TimePartingV1Mixin as GdbotsEnrichmentsTimePartingV1Mixin;
use Gdbots\Schemas\Enrichments\Mixin\TimeSampling\TimeSamplingV1 as GdbotsEnrichmentsTimeSamplingV1;
use Gdbots\Schemas\Enrichments\Mixin\TimeSampling\TimeSamplingV1Mixin as GdbotsEnrichmentsTimeSamplingV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\NodePublished\NodePublishedV1 as GdbotsNcrNodePublishedV1;
use Gdbots\Schemas\Ncr\Mixin\NodePublished\NodePublishedV1Mixin as GdbotsNcrNodePublishedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Canvas\Mixin\PagePublished\PagePublishedV1 as TrinitiCanvasPagePublishedV1;
use Triniti\Schemas\Canvas\Mixin\PagePublished\PagePublishedV1Mixin as TrinitiCanvasPagePublishedV1Mixin;

final class PagePublishedV1 extends AbstractMessage implements
    PagePublished,
    GdbotsPbjxEventV1,
    GdbotsNcrNodePublishedV1,
    TrinitiCanvasPagePublishedV1,
    GdbotsAnalyticsTrackedMessageV1,
    GdbotsEnrichmentsTimePartingV1,
    GdbotsEnrichmentsTimeSamplingV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:event:page-published:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodePublishedV1Mixin::create(),
                TrinitiCanvasPagePublishedV1Mixin::create(),
                GdbotsAnalyticsTrackedMessageV1Mixin::create(),
                GdbotsEnrichmentsTimePartingV1Mixin::create(),
                GdbotsEnrichmentsTimeSamplingV1Mixin::create(),
            ]
        );
    }
}
