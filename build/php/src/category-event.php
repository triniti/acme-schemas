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
    'acme:apollo:event:poll-created' => 'Acme\Schemas\Apollo\Event\PollCreatedV1',
    'acme:apollo:event:poll-deleted' => 'Acme\Schemas\Apollo\Event\PollDeletedV1',
    'acme:apollo:event:poll-expired' => 'Acme\Schemas\Apollo\Event\PollExpiredV1',
    'acme:apollo:event:poll-marked-as-draft' => 'Acme\Schemas\Apollo\Event\PollMarkedAsDraftV1',
    'acme:apollo:event:poll-marked-as-pending' => 'Acme\Schemas\Apollo\Event\PollMarkedAsPendingV1',
    'acme:apollo:event:poll-published' => 'Acme\Schemas\Apollo\Event\PollPublishedV1',
    'acme:apollo:event:poll-scheduled' => 'Acme\Schemas\Apollo\Event\PollScheduledV1',
    'acme:apollo:event:poll-unpublished' => 'Acme\Schemas\Apollo\Event\PollUnpublishedV1',
    'acme:apollo:event:poll-updated' => 'Acme\Schemas\Apollo\Event\PollUpdatedV1',
    'acme:apollo:event:vote-casted' => 'Acme\Schemas\Apollo\Event\VoteCastedV1',
    'acme:boost:event:sponsor-created' => 'Acme\Schemas\Boost\Event\SponsorCreatedV1',
    'acme:boost:event:sponsor-deleted' => 'Acme\Schemas\Boost\Event\SponsorDeletedV1',
    'acme:boost:event:sponsor-expired' => 'Acme\Schemas\Boost\Event\SponsorExpiredV1',
    'acme:boost:event:sponsor-marked-as-draft' => 'Acme\Schemas\Boost\Event\SponsorMarkedAsDraftV1',
    'acme:boost:event:sponsor-marked-as-pending' => 'Acme\Schemas\Boost\Event\SponsorMarkedAsPendingV1',
    'acme:boost:event:sponsor-published' => 'Acme\Schemas\Boost\Event\SponsorPublishedV1',
    'acme:boost:event:sponsor-renamed' => 'Acme\Schemas\Boost\Event\SponsorRenamedV1',
    'acme:boost:event:sponsor-scheduled' => 'Acme\Schemas\Boost\Event\SponsorScheduledV1',
    'acme:boost:event:sponsor-unpublished' => 'Acme\Schemas\Boost\Event\SponsorUnpublishedV1',
    'acme:boost:event:sponsor-updated' => 'Acme\Schemas\Boost\Event\SponsorUpdatedV1',
    'acme:canvas:event:page-created' => 'Acme\Schemas\Canvas\Event\PageCreatedV1',
    'acme:canvas:event:page-deleted' => 'Acme\Schemas\Canvas\Event\PageDeletedV1',
    'acme:canvas:event:page-expired' => 'Acme\Schemas\Canvas\Event\PageExpiredV1',
    'acme:canvas:event:page-marked-as-draft' => 'Acme\Schemas\Canvas\Event\PageMarkedAsDraftV1',
    'acme:canvas:event:page-marked-as-pending' => 'Acme\Schemas\Canvas\Event\PageMarkedAsPendingV1',
    'acme:canvas:event:page-published' => 'Acme\Schemas\Canvas\Event\PagePublishedV1',
    'acme:canvas:event:page-renamed' => 'Acme\Schemas\Canvas\Event\PageRenamedV1',
    'acme:canvas:event:page-scheduled' => 'Acme\Schemas\Canvas\Event\PageScheduledV1',
    'acme:canvas:event:page-unpublished' => 'Acme\Schemas\Canvas\Event\PageUnpublishedV1',
    'acme:canvas:event:page-updated' => 'Acme\Schemas\Canvas\Event\PageUpdatedV1',
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
    'acme:dam:event:asset-created' => 'Acme\Schemas\Dam\Event\AssetCreatedV1',
    'acme:dam:event:asset-deleted' => 'Acme\Schemas\Dam\Event\AssetDeletedV1',
    'acme:dam:event:asset-expired' => 'Acme\Schemas\Dam\Event\AssetExpiredV1',
    'acme:dam:event:asset-linked' => 'Acme\Schemas\Dam\Event\AssetLinkedV1',
    'acme:dam:event:asset-patched' => 'Acme\Schemas\Dam\Event\AssetPatchedV1',
    'acme:dam:event:asset-unlinked' => 'Acme\Schemas\Dam\Event\AssetUnlinkedV1',
    'acme:dam:event:asset-updated' => 'Acme\Schemas\Dam\Event\AssetUpdatedV1',
    'acme:dam:event:gallery-asset-reordered' => 'Acme\Schemas\Dam\Event\GalleryAssetReorderedV1',
    'acme:iam:event:app-created' => 'Acme\Schemas\Iam\Event\AppCreatedV1',
    'acme:iam:event:app-deleted' => 'Acme\Schemas\Iam\Event\AppDeletedV1',
    'acme:iam:event:app-roles-granted' => 'Acme\Schemas\Iam\Event\AppRolesGrantedV1',
    'acme:iam:event:app-roles-revoked' => 'Acme\Schemas\Iam\Event\AppRolesRevokedV1',
    'acme:iam:event:app-updated' => 'Acme\Schemas\Iam\Event\AppUpdatedV1',
    'acme:iam:event:role-created' => 'Acme\Schemas\Iam\Event\RoleCreatedV1',
    'acme:iam:event:role-deleted' => 'Acme\Schemas\Iam\Event\RoleDeletedV1',
    'acme:iam:event:role-updated' => 'Acme\Schemas\Iam\Event\RoleUpdatedV1',
    'acme:iam:event:user-created' => 'Acme\Schemas\Iam\Event\UserCreatedV1',
    'acme:iam:event:user-deleted' => 'Acme\Schemas\Iam\Event\UserDeletedV1',
    'acme:iam:event:user-patched' => 'Acme\Schemas\Iam\Event\UserPatchedV1',
    'acme:iam:event:user-roles-granted' => 'Acme\Schemas\Iam\Event\UserRolesGrantedV1',
    'acme:iam:event:user-roles-revoked' => 'Acme\Schemas\Iam\Event\UserRolesRevokedV1',
    'acme:iam:event:user-updated' => 'Acme\Schemas\Iam\Event\UserUpdatedV1',
    'acme:news:event:article-created' => 'Acme\Schemas\News\Event\ArticleCreatedV1',
    'acme:news:event:article-deleted' => 'Acme\Schemas\News\Event\ArticleDeletedV1',
    'acme:news:event:article-expired' => 'Acme\Schemas\News\Event\ArticleExpiredV1',
    'acme:news:event:article-locked' => 'Acme\Schemas\News\Event\ArticleLockedV1',
    'acme:news:event:article-marked-as-draft' => 'Acme\Schemas\News\Event\ArticleMarkedAsDraftV1',
    'acme:news:event:article-marked-as-pending' => 'Acme\Schemas\News\Event\ArticleMarkedAsPendingV1',
    'acme:news:event:article-published' => 'Acme\Schemas\News\Event\ArticlePublishedV1',
    'acme:news:event:article-renamed' => 'Acme\Schemas\News\Event\ArticleRenamedV1',
    'acme:news:event:article-scheduled' => 'Acme\Schemas\News\Event\ArticleScheduledV1',
    'acme:news:event:article-unlocked' => 'Acme\Schemas\News\Event\ArticleUnlockedV1',
    'acme:news:event:article-unpublished' => 'Acme\Schemas\News\Event\ArticleUnpublishedV1',
    'acme:news:event:article-updated' => 'Acme\Schemas\News\Event\ArticleUpdatedV1',
    'acme:notify:event:notification-created' => 'Acme\Schemas\Notify\Event\NotificationCreatedV1',
    'acme:notify:event:notification-deleted' => 'Acme\Schemas\Notify\Event\NotificationDeletedV1',
    'acme:notify:event:notification-failed' => 'Acme\Schemas\Notify\Event\NotificationFailedV1',
    'acme:notify:event:notification-sent' => 'Acme\Schemas\Notify\Event\NotificationSentV1',
    'acme:notify:event:notification-updated' => 'Acme\Schemas\Notify\Event\NotificationUpdatedV1',
    'acme:ovp:event:video-created' => 'Acme\Schemas\Ovp\Event\VideoCreatedV1',
    'acme:ovp:event:video-deleted' => 'Acme\Schemas\Ovp\Event\VideoDeletedV1',
    'acme:ovp:event:video-expired' => 'Acme\Schemas\Ovp\Event\VideoExpiredV1',
    'acme:ovp:event:video-marked-as-draft' => 'Acme\Schemas\Ovp\Event\VideoMarkedAsDraftV1',
    'acme:ovp:event:video-marked-as-pending' => 'Acme\Schemas\Ovp\Event\VideoMarkedAsPendingV1',
    'acme:ovp:event:video-published' => 'Acme\Schemas\Ovp\Event\VideoPublishedV1',
    'acme:ovp:event:video-renamed' => 'Acme\Schemas\Ovp\Event\VideoRenamedV1',
    'acme:ovp:event:video-scheduled' => 'Acme\Schemas\Ovp\Event\VideoScheduledV1',
    'acme:ovp:event:video-unpublished' => 'Acme\Schemas\Ovp\Event\VideoUnpublishedV1',
    'acme:ovp:event:video-updated' => 'Acme\Schemas\Ovp\Event\VideoUpdatedV1',
    'acme:people:event:person-created' => 'Acme\Schemas\People\Event\PersonCreatedV1',
    'acme:people:event:person-deleted' => 'Acme\Schemas\People\Event\PersonDeletedV1',
    'acme:people:event:person-renamed' => 'Acme\Schemas\People\Event\PersonRenamedV1',
    'acme:people:event:person-updated' => 'Acme\Schemas\People\Event\PersonUpdatedV1',
    'acme:sys:event:picklist-created' => 'Acme\Schemas\Sys\Event\PicklistCreatedV1',
    'acme:sys:event:picklist-deleted' => 'Acme\Schemas\Sys\Event\PicklistDeletedV1',
    'acme:sys:event:picklist-updated' => 'Acme\Schemas\Sys\Event\PicklistUpdatedV1',
    'acme:taxonomy:event:category-created' => 'Acme\Schemas\Taxonomy\Event\CategoryCreatedV1',
    'acme:taxonomy:event:category-deleted' => 'Acme\Schemas\Taxonomy\Event\CategoryDeletedV1',
    'acme:taxonomy:event:category-renamed' => 'Acme\Schemas\Taxonomy\Event\CategoryRenamedV1',
    'acme:taxonomy:event:category-updated' => 'Acme\Schemas\Taxonomy\Event\CategoryUpdatedV1',
    'acme:taxonomy:event:channel-created' => 'Acme\Schemas\Taxonomy\Event\ChannelCreatedV1',
    'acme:taxonomy:event:channel-deleted' => 'Acme\Schemas\Taxonomy\Event\ChannelDeletedV1',
    'acme:taxonomy:event:channel-renamed' => 'Acme\Schemas\Taxonomy\Event\ChannelRenamedV1',
    'acme:taxonomy:event:channel-updated' => 'Acme\Schemas\Taxonomy\Event\ChannelUpdatedV1',
    'gdbots:ncr:event:edge-created' => 'Gdbots\Schemas\Ncr\Event\EdgeCreatedV1',
    'gdbots:ncr:event:edge-deleted' => 'Gdbots\Schemas\Ncr\Event\EdgeDeletedV1',
    'gdbots:pbjx:event:event-execution-failed' => 'Gdbots\Schemas\Pbjx\Event\EventExecutionFailedV1',
    'gdbots:pbjx:event:health-checked' => 'Gdbots\Schemas\Pbjx\Event\HealthCheckedV1',
]);