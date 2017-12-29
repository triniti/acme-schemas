<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/event/poll-unpublished/1-0-0.json#
namespace Acme\Schemas\Apollo\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1 as GdbotsAnalyticsTrackedMessageV1;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1Mixin as GdbotsAnalyticsTrackedMessageV1Mixin;
use Gdbots\Schemas\Enrichments\Mixin\TimeParting\TimePartingV1 as GdbotsEnrichmentsTimePartingV1;
use Gdbots\Schemas\Enrichments\Mixin\TimeParting\TimePartingV1Mixin as GdbotsEnrichmentsTimePartingV1Mixin;
use Gdbots\Schemas\Enrichments\Mixin\TimeSampling\TimeSamplingV1 as GdbotsEnrichmentsTimeSamplingV1;
use Gdbots\Schemas\Enrichments\Mixin\TimeSampling\TimeSamplingV1Mixin as GdbotsEnrichmentsTimeSamplingV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\NodeUnpublished\NodeUnpublishedV1 as GdbotsNcrNodeUnpublishedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeUnpublished\NodeUnpublishedV1Mixin as GdbotsNcrNodeUnpublishedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Apollo\Mixin\PollUnpublished\PollUnpublishedV1 as TrinitiApolloPollUnpublishedV1;
use Triniti\Schemas\Apollo\Mixin\PollUnpublished\PollUnpublishedV1Mixin as TrinitiApolloPollUnpublishedV1Mixin;

final class PollUnpublishedV1 extends AbstractMessage implements
    PollUnpublished,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeUnpublishedV1,
    TrinitiApolloPollUnpublishedV1,
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
        return new Schema('pbj:acme:apollo:event:poll-unpublished:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeUnpublishedV1Mixin::create(),
                TrinitiApolloPollUnpublishedV1Mixin::create(),
                GdbotsAnalyticsTrackedMessageV1Mixin::create(),
                GdbotsEnrichmentsTimePartingV1Mixin::create(),
                GdbotsEnrichmentsTimeSamplingV1Mixin::create(),
            ]
        );
    }
}
