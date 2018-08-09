<?php
/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

\Gdbots\Pbj\MessageResolver::registerMap([
    'acme:curator:command:create-gallery' => 'Acme\Schemas\Curator\Command\CreateGalleryV1',
    'acme:curator:command:create-promotion' => 'Acme\Schemas\Curator\Command\CreatePromotionV1',
    'acme:curator:command:create-teaser' => 'Acme\Schemas\Curator\Command\CreateTeaserV1',
    'acme:curator:command:create-timeline' => 'Acme\Schemas\Curator\Command\CreateTimelineV1',
    'acme:curator:command:create-widget' => 'Acme\Schemas\Curator\Command\CreateWidgetV1',
    'acme:curator:command:delete-gallery' => 'Acme\Schemas\Curator\Command\DeleteGalleryV1',
    'acme:curator:command:delete-promotion' => 'Acme\Schemas\Curator\Command\DeletePromotionV1',
    'acme:curator:command:delete-teaser' => 'Acme\Schemas\Curator\Command\DeleteTeaserV1',
    'acme:curator:command:delete-timeline' => 'Acme\Schemas\Curator\Command\DeleteTimelineV1',
    'acme:curator:command:delete-widget' => 'Acme\Schemas\Curator\Command\DeleteWidgetV1',
    'acme:curator:command:expire-gallery' => 'Acme\Schemas\Curator\Command\ExpireGalleryV1',
    'acme:curator:command:expire-promotion' => 'Acme\Schemas\Curator\Command\ExpirePromotionV1',
    'acme:curator:command:expire-teaser' => 'Acme\Schemas\Curator\Command\ExpireTeaserV1',
    'acme:curator:command:expire-timeline' => 'Acme\Schemas\Curator\Command\ExpireTimelineV1',
    'acme:curator:command:mark-gallery-as-draft' => 'Acme\Schemas\Curator\Command\MarkGalleryAsDraftV1',
    'acme:curator:command:mark-gallery-as-pending' => 'Acme\Schemas\Curator\Command\MarkGalleryAsPendingV1',
    'acme:curator:command:mark-promotion-as-draft' => 'Acme\Schemas\Curator\Command\MarkPromotionAsDraftV1',
    'acme:curator:command:mark-promotion-as-pending' => 'Acme\Schemas\Curator\Command\MarkPromotionAsPendingV1',
    'acme:curator:command:mark-teaser-as-draft' => 'Acme\Schemas\Curator\Command\MarkTeaserAsDraftV1',
    'acme:curator:command:mark-teaser-as-pending' => 'Acme\Schemas\Curator\Command\MarkTeaserAsPendingV1',
    'acme:curator:command:mark-timeline-as-draft' => 'Acme\Schemas\Curator\Command\MarkTimelineAsDraftV1',
    'acme:curator:command:mark-timeline-as-pending' => 'Acme\Schemas\Curator\Command\MarkTimelineAsPendingV1',
    'acme:curator:command:publish-gallery' => 'Acme\Schemas\Curator\Command\PublishGalleryV1',
    'acme:curator:command:publish-promotion' => 'Acme\Schemas\Curator\Command\PublishPromotionV1',
    'acme:curator:command:publish-teaser' => 'Acme\Schemas\Curator\Command\PublishTeaserV1',
    'acme:curator:command:publish-timeline' => 'Acme\Schemas\Curator\Command\PublishTimelineV1',
    'acme:curator:command:rename-gallery' => 'Acme\Schemas\Curator\Command\RenameGalleryV1',
    'acme:curator:command:rename-timeline' => 'Acme\Schemas\Curator\Command\RenameTimelineV1',
    'acme:curator:command:sync-teaser' => 'Acme\Schemas\Curator\Command\SyncTeaserV1',
    'acme:curator:command:unpublish-gallery' => 'Acme\Schemas\Curator\Command\UnpublishGalleryV1',
    'acme:curator:command:unpublish-promotion' => 'Acme\Schemas\Curator\Command\UnpublishPromotionV1',
    'acme:curator:command:unpublish-teaser' => 'Acme\Schemas\Curator\Command\UnpublishTeaserV1',
    'acme:curator:command:unpublish-timeline' => 'Acme\Schemas\Curator\Command\UnpublishTimelineV1',
    'acme:curator:command:update-gallery' => 'Acme\Schemas\Curator\Command\UpdateGalleryV1',
    'acme:curator:command:update-promotion' => 'Acme\Schemas\Curator\Command\UpdatePromotionV1',
    'acme:curator:command:update-teaser' => 'Acme\Schemas\Curator\Command\UpdateTeaserV1',
    'acme:curator:command:update-timeline' => 'Acme\Schemas\Curator\Command\UpdateTimelineV1',
    'acme:curator:command:update-widget' => 'Acme\Schemas\Curator\Command\UpdateWidgetV1',
    'acme:curator:event:gallery-created' => 'Acme\Schemas\Curator\Event\GalleryCreatedV1',
    'acme:curator:event:gallery-deleted' => 'Acme\Schemas\Curator\Event\GalleryDeletedV1',
    'acme:curator:event:gallery-expired' => 'Acme\Schemas\Curator\Event\GalleryExpiredV1',
    'acme:curator:event:gallery-marked-as-draft' => 'Acme\Schemas\Curator\Event\GalleryMarkedAsDraftV1',
    'acme:curator:event:gallery-marked-as-pending' => 'Acme\Schemas\Curator\Event\GalleryMarkedAsPendingV1',
    'acme:curator:event:gallery-published' => 'Acme\Schemas\Curator\Event\GalleryPublishedV1',
    'acme:curator:event:gallery-renamed' => 'Acme\Schemas\Curator\Event\GalleryRenamedV1',
    'acme:curator:event:gallery-scheduled' => 'Acme\Schemas\Curator\Event\GalleryScheduledV1',
    'acme:curator:event:gallery-unpublished' => 'Acme\Schemas\Curator\Event\GalleryUnpublishedV1',
    'acme:curator:event:gallery-updated' => 'Acme\Schemas\Curator\Event\GalleryUpdatedV1',
    'acme:curator:event:promotion-created' => 'Acme\Schemas\Curator\Event\PromotionCreatedV1',
    'acme:curator:event:promotion-deleted' => 'Acme\Schemas\Curator\Event\PromotionDeletedV1',
    'acme:curator:event:promotion-expired' => 'Acme\Schemas\Curator\Event\PromotionExpiredV1',
    'acme:curator:event:promotion-marked-as-draft' => 'Acme\Schemas\Curator\Event\PromotionMarkedAsDraftV1',
    'acme:curator:event:promotion-marked-as-pending' => 'Acme\Schemas\Curator\Event\PromotionMarkedAsPendingV1',
    'acme:curator:event:promotion-published' => 'Acme\Schemas\Curator\Event\PromotionPublishedV1',
    'acme:curator:event:promotion-scheduled' => 'Acme\Schemas\Curator\Event\PromotionScheduledV1',
    'acme:curator:event:promotion-unpublished' => 'Acme\Schemas\Curator\Event\PromotionUnpublishedV1',
    'acme:curator:event:promotion-updated' => 'Acme\Schemas\Curator\Event\PromotionUpdatedV1',
    'acme:curator:event:teaser-created' => 'Acme\Schemas\Curator\Event\TeaserCreatedV1',
    'acme:curator:event:teaser-deleted' => 'Acme\Schemas\Curator\Event\TeaserDeletedV1',
    'acme:curator:event:teaser-expired' => 'Acme\Schemas\Curator\Event\TeaserExpiredV1',
    'acme:curator:event:teaser-marked-as-draft' => 'Acme\Schemas\Curator\Event\TeaserMarkedAsDraftV1',
    'acme:curator:event:teaser-marked-as-pending' => 'Acme\Schemas\Curator\Event\TeaserMarkedAsPendingV1',
    'acme:curator:event:teaser-published' => 'Acme\Schemas\Curator\Event\TeaserPublishedV1',
    'acme:curator:event:teaser-scheduled' => 'Acme\Schemas\Curator\Event\TeaserScheduledV1',
    'acme:curator:event:teaser-unpublished' => 'Acme\Schemas\Curator\Event\TeaserUnpublishedV1',
    'acme:curator:event:teaser-updated' => 'Acme\Schemas\Curator\Event\TeaserUpdatedV1',
    'acme:curator:event:timeline-created' => 'Acme\Schemas\Curator\Event\TimelineCreatedV1',
    'acme:curator:event:timeline-deleted' => 'Acme\Schemas\Curator\Event\TimelineDeletedV1',
    'acme:curator:event:timeline-expired' => 'Acme\Schemas\Curator\Event\TimelineExpiredV1',
    'acme:curator:event:timeline-marked-as-draft' => 'Acme\Schemas\Curator\Event\TimelineMarkedAsDraftV1',
    'acme:curator:event:timeline-marked-as-pending' => 'Acme\Schemas\Curator\Event\TimelineMarkedAsPendingV1',
    'acme:curator:event:timeline-published' => 'Acme\Schemas\Curator\Event\TimelinePublishedV1',
    'acme:curator:event:timeline-renamed' => 'Acme\Schemas\Curator\Event\TimelineRenamedV1',
    'acme:curator:event:timeline-scheduled' => 'Acme\Schemas\Curator\Event\TimelineScheduledV1',
    'acme:curator:event:timeline-unpublished' => 'Acme\Schemas\Curator\Event\TimelineUnpublishedV1',
    'acme:curator:event:timeline-updated' => 'Acme\Schemas\Curator\Event\TimelineUpdatedV1',
    'acme:curator:event:widget-created' => 'Acme\Schemas\Curator\Event\WidgetCreatedV1',
    'acme:curator:event:widget-deleted' => 'Acme\Schemas\Curator\Event\WidgetDeletedV1',
    'acme:curator:event:widget-updated' => 'Acme\Schemas\Curator\Event\WidgetUpdatedV1',
    'acme:curator:node:article-teaser' => 'Acme\Schemas\Curator\Node\ArticleTeaserV1',
    'acme:curator:node:blogroll-widget' => 'Acme\Schemas\Curator\Node\BlogrollWidgetV1',
    'acme:curator:node:card-deck-widget' => 'Acme\Schemas\Curator\Node\CardDeckWidgetV1',
    'acme:curator:node:carousel-widget' => 'Acme\Schemas\Curator\Node\CarouselWidgetV1',
    'acme:curator:node:category-teaser' => 'Acme\Schemas\Curator\Node\CategoryTeaserV1',
    'acme:curator:node:channel-teaser' => 'Acme\Schemas\Curator\Node\ChannelTeaserV1',
    'acme:curator:node:gallery' => 'Acme\Schemas\Curator\Node\GalleryV1',
    'acme:curator:node:gallery-teaser' => 'Acme\Schemas\Curator\Node\GalleryTeaserV1',
    'acme:curator:node:link-teaser' => 'Acme\Schemas\Curator\Node\LinkTeaserV1',
    'acme:curator:node:page-teaser' => 'Acme\Schemas\Curator\Node\PageTeaserV1',
    'acme:curator:node:person-teaser' => 'Acme\Schemas\Curator\Node\PersonTeaserV1',
    'acme:curator:node:poll-teaser' => 'Acme\Schemas\Curator\Node\PollTeaserV1',
    'acme:curator:node:promotion' => 'Acme\Schemas\Curator\Node\PromotionV1',
    'acme:curator:node:timeline' => 'Acme\Schemas\Curator\Node\TimelineV1',
    'acme:curator:node:timeline-teaser' => 'Acme\Schemas\Curator\Node\TimelineTeaserV1',
    'acme:curator:node:video-teaser' => 'Acme\Schemas\Curator\Node\VideoTeaserV1',
    'acme:curator:node:youtube-video-teaser' => 'Acme\Schemas\Curator\Node\YoutubeVideoTeaserV1',
    'acme:curator:request:get-gallery-history-request' => 'Acme\Schemas\Curator\Request\GetGalleryHistoryRequestV1',
    'acme:curator:request:get-gallery-history-response' => 'Acme\Schemas\Curator\Request\GetGalleryHistoryResponseV1',
    'acme:curator:request:get-gallery-request' => 'Acme\Schemas\Curator\Request\GetGalleryRequestV1',
    'acme:curator:request:get-gallery-response' => 'Acme\Schemas\Curator\Request\GetGalleryResponseV1',
    'acme:curator:request:get-promotion-history-request' => 'Acme\Schemas\Curator\Request\GetPromotionHistoryRequestV1',
    'acme:curator:request:get-promotion-history-response' => 'Acme\Schemas\Curator\Request\GetPromotionHistoryResponseV1',
    'acme:curator:request:get-promotion-request' => 'Acme\Schemas\Curator\Request\GetPromotionRequestV1',
    'acme:curator:request:get-promotion-response' => 'Acme\Schemas\Curator\Request\GetPromotionResponseV1',
    'acme:curator:request:get-teaser-history-request' => 'Acme\Schemas\Curator\Request\GetTeaserHistoryRequestV1',
    'acme:curator:request:get-teaser-history-response' => 'Acme\Schemas\Curator\Request\GetTeaserHistoryResponseV1',
    'acme:curator:request:get-teaser-request' => 'Acme\Schemas\Curator\Request\GetTeaserRequestV1',
    'acme:curator:request:get-teaser-response' => 'Acme\Schemas\Curator\Request\GetTeaserResponseV1',
    'acme:curator:request:get-timeline-history-request' => 'Acme\Schemas\Curator\Request\GetTimelineHistoryRequestV1',
    'acme:curator:request:get-timeline-history-response' => 'Acme\Schemas\Curator\Request\GetTimelineHistoryResponseV1',
    'acme:curator:request:get-timeline-request' => 'Acme\Schemas\Curator\Request\GetTimelineRequestV1',
    'acme:curator:request:get-timeline-response' => 'Acme\Schemas\Curator\Request\GetTimelineResponseV1',
    'acme:curator:request:get-widget-history-request' => 'Acme\Schemas\Curator\Request\GetWidgetHistoryRequestV1',
    'acme:curator:request:get-widget-history-response' => 'Acme\Schemas\Curator\Request\GetWidgetHistoryResponseV1',
    'acme:curator:request:get-widget-request' => 'Acme\Schemas\Curator\Request\GetWidgetRequestV1',
    'acme:curator:request:get-widget-response' => 'Acme\Schemas\Curator\Request\GetWidgetResponseV1',
    'acme:curator:request:search-galleries-request' => 'Acme\Schemas\Curator\Request\SearchGalleriesRequestV1',
    'acme:curator:request:search-galleries-response' => 'Acme\Schemas\Curator\Request\SearchGalleriesResponseV1',
    'acme:curator:request:search-promotions-request' => 'Acme\Schemas\Curator\Request\SearchPromotionsRequestV1',
    'acme:curator:request:search-promotions-response' => 'Acme\Schemas\Curator\Request\SearchPromotionsResponseV1',
    'acme:curator:request:search-teasers-request' => 'Acme\Schemas\Curator\Request\SearchTeasersRequestV1',
    'acme:curator:request:search-teasers-response' => 'Acme\Schemas\Curator\Request\SearchTeasersResponseV1',
    'acme:curator:request:search-timelines-request' => 'Acme\Schemas\Curator\Request\SearchTimelinesRequestV1',
    'acme:curator:request:search-timelines-response' => 'Acme\Schemas\Curator\Request\SearchTimelinesResponseV1',
    'acme:curator:request:search-widgets-request' => 'Acme\Schemas\Curator\Request\SearchWidgetsRequestV1',
    'acme:curator:request:search-widgets-response' => 'Acme\Schemas\Curator\Request\SearchWidgetsResponseV1',
]);
