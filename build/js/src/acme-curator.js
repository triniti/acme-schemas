/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@triniti/acme-schemas/acme/curator/command/CreateGalleryV1';
import '@triniti/acme-schemas/acme/curator/command/CreatePromotionV1';
import '@triniti/acme-schemas/acme/curator/command/CreateTeaserV1';
import '@triniti/acme-schemas/acme/curator/command/CreateTimelineV1';
import '@triniti/acme-schemas/acme/curator/command/CreateWidgetV1';
import '@triniti/acme-schemas/acme/curator/command/DeleteGalleryV1';
import '@triniti/acme-schemas/acme/curator/command/DeletePromotionV1';
import '@triniti/acme-schemas/acme/curator/command/DeleteTeaserV1';
import '@triniti/acme-schemas/acme/curator/command/DeleteTimelineV1';
import '@triniti/acme-schemas/acme/curator/command/DeleteWidgetV1';
import '@triniti/acme-schemas/acme/curator/command/ExpireGalleryV1';
import '@triniti/acme-schemas/acme/curator/command/ExpirePromotionV1';
import '@triniti/acme-schemas/acme/curator/command/ExpireTeaserV1';
import '@triniti/acme-schemas/acme/curator/command/ExpireTimelineV1';
import '@triniti/acme-schemas/acme/curator/command/MarkGalleryAsDraftV1';
import '@triniti/acme-schemas/acme/curator/command/MarkGalleryAsPendingV1';
import '@triniti/acme-schemas/acme/curator/command/MarkPromotionAsDraftV1';
import '@triniti/acme-schemas/acme/curator/command/MarkPromotionAsPendingV1';
import '@triniti/acme-schemas/acme/curator/command/MarkTeaserAsDraftV1';
import '@triniti/acme-schemas/acme/curator/command/MarkTeaserAsPendingV1';
import '@triniti/acme-schemas/acme/curator/command/MarkTimelineAsDraftV1';
import '@triniti/acme-schemas/acme/curator/command/MarkTimelineAsPendingV1';
import '@triniti/acme-schemas/acme/curator/command/PublishGalleryV1';
import '@triniti/acme-schemas/acme/curator/command/PublishPromotionV1';
import '@triniti/acme-schemas/acme/curator/command/PublishTeaserV1';
import '@triniti/acme-schemas/acme/curator/command/PublishTimelineV1';
import '@triniti/acme-schemas/acme/curator/command/RenameGalleryV1';
import '@triniti/acme-schemas/acme/curator/command/RenameTimelineV1';
import '@triniti/acme-schemas/acme/curator/command/UnpublishGalleryV1';
import '@triniti/acme-schemas/acme/curator/command/UnpublishPromotionV1';
import '@triniti/acme-schemas/acme/curator/command/UnpublishTeaserV1';
import '@triniti/acme-schemas/acme/curator/command/UnpublishTimelineV1';
import '@triniti/acme-schemas/acme/curator/command/UpdateGalleryV1';
import '@triniti/acme-schemas/acme/curator/command/UpdatePromotionV1';
import '@triniti/acme-schemas/acme/curator/command/UpdateTeaserV1';
import '@triniti/acme-schemas/acme/curator/command/UpdateTimelineV1';
import '@triniti/acme-schemas/acme/curator/command/UpdateWidgetV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryCreatedV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryDeletedV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryExpiredV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryPublishedV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryRenamedV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryScheduledV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryUnpublishedV1';
import '@triniti/acme-schemas/acme/curator/event/GalleryUpdatedV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionCreatedV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionDeletedV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionExpiredV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionPublishedV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionScheduledV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionUnpublishedV1';
import '@triniti/acme-schemas/acme/curator/event/PromotionUpdatedV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserCreatedV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserDeletedV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserExpiredV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserPublishedV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserScheduledV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserUnpublishedV1';
import '@triniti/acme-schemas/acme/curator/event/TeaserUpdatedV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineCreatedV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineDeletedV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineExpiredV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/curator/event/TimelinePublishedV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineRenamedV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineScheduledV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineUnpublishedV1';
import '@triniti/acme-schemas/acme/curator/event/TimelineUpdatedV1';
import '@triniti/acme-schemas/acme/curator/event/WidgetCreatedV1';
import '@triniti/acme-schemas/acme/curator/event/WidgetDeletedV1';
import '@triniti/acme-schemas/acme/curator/event/WidgetUpdatedV1';
import '@triniti/acme-schemas/acme/curator/node/ArticleTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/BlogrollWidgetV1';
import '@triniti/acme-schemas/acme/curator/node/CarouselWidgetV1';
import '@triniti/acme-schemas/acme/curator/node/CategoryTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/ChannelTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/GalleryV1';
import '@triniti/acme-schemas/acme/curator/node/GalleryTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/LinkTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/PageTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/PersonTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/PollTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/PromotionV1';
import '@triniti/acme-schemas/acme/curator/node/TimelineV1';
import '@triniti/acme-schemas/acme/curator/node/TimelineTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/VideoTeaserV1';
import '@triniti/acme-schemas/acme/curator/node/YoutubeVideoTeaserV1';
import '@triniti/acme-schemas/acme/curator/request/GetGalleryHistoryRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetGalleryHistoryResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetGalleryRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetGalleryResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetPromotionHistoryRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetPromotionHistoryResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetPromotionRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetPromotionResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetTeaserHistoryRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetTeaserHistoryResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetTeaserRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetTeaserResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetTimelineHistoryRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetTimelineHistoryResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetTimelineRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetTimelineResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetWidgetHistoryRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetWidgetHistoryResponseV1';
import '@triniti/acme-schemas/acme/curator/request/GetWidgetRequestV1';
import '@triniti/acme-schemas/acme/curator/request/GetWidgetResponseV1';
import '@triniti/acme-schemas/acme/curator/request/SearchGalleriesRequestV1';
import '@triniti/acme-schemas/acme/curator/request/SearchGalleriesResponseV1';
import '@triniti/acme-schemas/acme/curator/request/SearchPromotionsRequestV1';
import '@triniti/acme-schemas/acme/curator/request/SearchPromotionsResponseV1';
import '@triniti/acme-schemas/acme/curator/request/SearchTeasersRequestV1';
import '@triniti/acme-schemas/acme/curator/request/SearchTeasersResponseV1';
import '@triniti/acme-schemas/acme/curator/request/SearchTimelinesRequestV1';
import '@triniti/acme-schemas/acme/curator/request/SearchTimelinesResponseV1';
import '@triniti/acme-schemas/acme/curator/request/SearchWidgetsRequestV1';
import '@triniti/acme-schemas/acme/curator/request/SearchWidgetsResponseV1';

export default MessageResolver;