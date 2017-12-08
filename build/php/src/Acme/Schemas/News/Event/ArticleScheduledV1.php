<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/news/event/article-scheduled/1-0-0.json#
namespace Acme\Schemas\News\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1 as GdbotsAnalyticsTrackedMessageV1;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1Mixin as GdbotsAnalyticsTrackedMessageV1Mixin;
use Gdbots\Schemas\Enrichments\Mixin\TimeParting\TimePartingV1 as GdbotsEnrichmentsTimePartingV1;
use Gdbots\Schemas\Enrichments\Mixin\TimeParting\TimePartingV1Mixin as GdbotsEnrichmentsTimePartingV1Mixin;
use Gdbots\Schemas\Enrichments\Mixin\TimeSampling\TimeSamplingV1 as GdbotsEnrichmentsTimeSamplingV1;
use Gdbots\Schemas\Enrichments\Mixin\TimeSampling\TimeSamplingV1Mixin as GdbotsEnrichmentsTimeSamplingV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\NodeScheduled\NodeScheduledV1 as GdbotsNcrNodeScheduledV1;
use Gdbots\Schemas\Ncr\Mixin\NodeScheduled\NodeScheduledV1Mixin as GdbotsNcrNodeScheduledV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\News\Mixin\ArticleScheduled\ArticleScheduledV1 as TrinitiNewsArticleScheduledV1;
use Triniti\Schemas\News\Mixin\ArticleScheduled\ArticleScheduledV1Mixin as TrinitiNewsArticleScheduledV1Mixin;

final class ArticleScheduledV1 extends AbstractMessage implements
    ArticleScheduled,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeScheduledV1,
    TrinitiNewsArticleScheduledV1,
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
        return new Schema('pbj:acme:news:event:article-scheduled:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeScheduledV1Mixin::create(),
                TrinitiNewsArticleScheduledV1Mixin::create(),
                GdbotsAnalyticsTrackedMessageV1Mixin::create(),
                GdbotsEnrichmentsTimePartingV1Mixin::create(),
                GdbotsEnrichmentsTimeSamplingV1Mixin::create(),
            ]
        );
    }
}
