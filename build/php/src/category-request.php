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
    'acme:apollo:request:get-poll-history-request' => 'Acme\Schemas\Apollo\Request\GetPollHistoryRequestV1',
    'acme:apollo:request:get-poll-history-response' => 'Acme\Schemas\Apollo\Request\GetPollHistoryResponseV1',
    'acme:apollo:request:get-poll-request' => 'Acme\Schemas\Apollo\Request\GetPollRequestV1',
    'acme:apollo:request:get-poll-response' => 'Acme\Schemas\Apollo\Request\GetPollResponseV1',
    'acme:apollo:request:search-polls-request' => 'Acme\Schemas\Apollo\Request\SearchPollsRequestV1',
    'acme:apollo:request:search-polls-response' => 'Acme\Schemas\Apollo\Request\SearchPollsResponseV1',
    'acme:boost:request:get-sponsor-history-request' => 'Acme\Schemas\Boost\Request\GetSponsorHistoryRequestV1',
    'acme:boost:request:get-sponsor-history-response' => 'Acme\Schemas\Boost\Request\GetSponsorHistoryResponseV1',
    'acme:boost:request:get-sponsor-request' => 'Acme\Schemas\Boost\Request\GetSponsorRequestV1',
    'acme:boost:request:get-sponsor-response' => 'Acme\Schemas\Boost\Request\GetSponsorResponseV1',
    'acme:boost:request:search-sponsors-request' => 'Acme\Schemas\Boost\Request\SearchSponsorsRequestV1',
    'acme:boost:request:search-sponsors-response' => 'Acme\Schemas\Boost\Request\SearchSponsorsResponseV1',
    'acme:canvas:request:get-page-history-request' => 'Acme\Schemas\Canvas\Request\GetPageHistoryRequestV1',
    'acme:canvas:request:get-page-history-response' => 'Acme\Schemas\Canvas\Request\GetPageHistoryResponseV1',
    'acme:canvas:request:get-page-request' => 'Acme\Schemas\Canvas\Request\GetPageRequestV1',
    'acme:canvas:request:get-page-response' => 'Acme\Schemas\Canvas\Request\GetPageResponseV1',
    'acme:canvas:request:search-pages-request' => 'Acme\Schemas\Canvas\Request\SearchPagesRequestV1',
    'acme:canvas:request:search-pages-response' => 'Acme\Schemas\Canvas\Request\SearchPagesResponseV1',
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
    'acme:curator:request:render-promotion-request' => 'Acme\Schemas\Curator\Request\RenderPromotionRequestV1',
    'acme:curator:request:render-promotion-response' => 'Acme\Schemas\Curator\Request\RenderPromotionResponseV1',
    'acme:curator:request:render-widget-request' => 'Acme\Schemas\Curator\Request\RenderWidgetRequestV1',
    'acme:curator:request:render-widget-response' => 'Acme\Schemas\Curator\Request\RenderWidgetResponseV1',
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
    'acme:dam:request:get-asset-history-request' => 'Acme\Schemas\Dam\Request\GetAssetHistoryRequestV1',
    'acme:dam:request:get-asset-history-response' => 'Acme\Schemas\Dam\Request\GetAssetHistoryResponseV1',
    'acme:dam:request:get-asset-request' => 'Acme\Schemas\Dam\Request\GetAssetRequestV1',
    'acme:dam:request:get-asset-response' => 'Acme\Schemas\Dam\Request\GetAssetResponseV1',
    'acme:dam:request:get-upload-urls-request' => 'Acme\Schemas\Dam\Request\GetUploadUrlsRequestV1',
    'acme:dam:request:get-upload-urls-response' => 'Acme\Schemas\Dam\Request\GetUploadUrlsResponseV1',
    'acme:dam:request:search-assets-request' => 'Acme\Schemas\Dam\Request\SearchAssetsRequestV1',
    'acme:dam:request:search-assets-response' => 'Acme\Schemas\Dam\Request\SearchAssetsResponseV1',
    'acme:iam:request:get-all-apps-request' => 'Acme\Schemas\Iam\Request\GetAllAppsRequestV1',
    'acme:iam:request:get-all-apps-response' => 'Acme\Schemas\Iam\Request\GetAllAppsResponseV1',
    'acme:iam:request:get-app-history-request' => 'Acme\Schemas\Iam\Request\GetAppHistoryRequestV1',
    'acme:iam:request:get-app-history-response' => 'Acme\Schemas\Iam\Request\GetAppHistoryResponseV1',
    'acme:iam:request:get-app-request' => 'Acme\Schemas\Iam\Request\GetAppRequestV1',
    'acme:iam:request:get-app-response' => 'Acme\Schemas\Iam\Request\GetAppResponseV1',
    'acme:iam:request:get-role-history-request' => 'Acme\Schemas\Iam\Request\GetRoleHistoryRequestV1',
    'acme:iam:request:get-role-history-response' => 'Acme\Schemas\Iam\Request\GetRoleHistoryResponseV1',
    'acme:iam:request:get-role-request' => 'Acme\Schemas\Iam\Request\GetRoleRequestV1',
    'acme:iam:request:get-role-response' => 'Acme\Schemas\Iam\Request\GetRoleResponseV1',
    'acme:iam:request:get-user-history-request' => 'Acme\Schemas\Iam\Request\GetUserHistoryRequestV1',
    'acme:iam:request:get-user-history-response' => 'Acme\Schemas\Iam\Request\GetUserHistoryResponseV1',
    'acme:iam:request:get-user-request' => 'Acme\Schemas\Iam\Request\GetUserRequestV1',
    'acme:iam:request:get-user-response' => 'Acme\Schemas\Iam\Request\GetUserResponseV1',
    'acme:iam:request:list-all-roles-request' => 'Acme\Schemas\Iam\Request\ListAllRolesRequestV1',
    'acme:iam:request:list-all-roles-response' => 'Acme\Schemas\Iam\Request\ListAllRolesResponseV1',
    'acme:iam:request:search-users-request' => 'Acme\Schemas\Iam\Request\SearchUsersRequestV1',
    'acme:iam:request:search-users-response' => 'Acme\Schemas\Iam\Request\SearchUsersResponseV1',
    'acme:news:request:get-article-history-request' => 'Acme\Schemas\News\Request\GetArticleHistoryRequestV1',
    'acme:news:request:get-article-history-response' => 'Acme\Schemas\News\Request\GetArticleHistoryResponseV1',
    'acme:news:request:get-article-request' => 'Acme\Schemas\News\Request\GetArticleRequestV1',
    'acme:news:request:get-article-response' => 'Acme\Schemas\News\Request\GetArticleResponseV1',
    'acme:news:request:search-articles-request' => 'Acme\Schemas\News\Request\SearchArticlesRequestV1',
    'acme:news:request:search-articles-response' => 'Acme\Schemas\News\Request\SearchArticlesResponseV1',
    'acme:notify:request:get-notification-history-request' => 'Acme\Schemas\Notify\Request\GetNotificationHistoryRequestV1',
    'acme:notify:request:get-notification-history-response' => 'Acme\Schemas\Notify\Request\GetNotificationHistoryResponseV1',
    'acme:notify:request:get-notification-request' => 'Acme\Schemas\Notify\Request\GetNotificationRequestV1',
    'acme:notify:request:get-notification-response' => 'Acme\Schemas\Notify\Request\GetNotificationResponseV1',
    'acme:notify:request:search-notifications-request' => 'Acme\Schemas\Notify\Request\SearchNotificationsRequestV1',
    'acme:notify:request:search-notifications-response' => 'Acme\Schemas\Notify\Request\SearchNotificationsResponseV1',
    'acme:ovp:request:get-video-history-request' => 'Acme\Schemas\Ovp\Request\GetVideoHistoryRequestV1',
    'acme:ovp:request:get-video-history-response' => 'Acme\Schemas\Ovp\Request\GetVideoHistoryResponseV1',
    'acme:ovp:request:get-video-request' => 'Acme\Schemas\Ovp\Request\GetVideoRequestV1',
    'acme:ovp:request:get-video-response' => 'Acme\Schemas\Ovp\Request\GetVideoResponseV1',
    'acme:ovp:request:search-videos-request' => 'Acme\Schemas\Ovp\Request\SearchVideosRequestV1',
    'acme:ovp:request:search-videos-response' => 'Acme\Schemas\Ovp\Request\SearchVideosResponseV1',
    'acme:people:request:get-person-history-request' => 'Acme\Schemas\People\Request\GetPersonHistoryRequestV1',
    'acme:people:request:get-person-history-response' => 'Acme\Schemas\People\Request\GetPersonHistoryResponseV1',
    'acme:people:request:get-person-request' => 'Acme\Schemas\People\Request\GetPersonRequestV1',
    'acme:people:request:get-person-response' => 'Acme\Schemas\People\Request\GetPersonResponseV1',
    'acme:people:request:search-people-request' => 'Acme\Schemas\People\Request\SearchPeopleRequestV1',
    'acme:people:request:search-people-response' => 'Acme\Schemas\People\Request\SearchPeopleResponseV1',
    'acme:sys:request:get-flagset-history-request' => 'Acme\Schemas\Sys\Request\GetFlagsetHistoryRequestV1',
    'acme:sys:request:get-flagset-history-response' => 'Acme\Schemas\Sys\Request\GetFlagsetHistoryResponseV1',
    'acme:sys:request:get-flagset-request' => 'Acme\Schemas\Sys\Request\GetFlagsetRequestV1',
    'acme:sys:request:get-flagset-response' => 'Acme\Schemas\Sys\Request\GetFlagsetResponseV1',
    'acme:sys:request:get-picklist-history-request' => 'Acme\Schemas\Sys\Request\GetPicklistHistoryRequestV1',
    'acme:sys:request:get-picklist-history-response' => 'Acme\Schemas\Sys\Request\GetPicklistHistoryResponseV1',
    'acme:sys:request:get-picklist-request' => 'Acme\Schemas\Sys\Request\GetPicklistRequestV1',
    'acme:sys:request:get-picklist-response' => 'Acme\Schemas\Sys\Request\GetPicklistResponseV1',
    'acme:sys:request:get-redirect-history-request' => 'Acme\Schemas\Sys\Request\GetRedirectHistoryRequestV1',
    'acme:sys:request:get-redirect-history-response' => 'Acme\Schemas\Sys\Request\GetRedirectHistoryResponseV1',
    'acme:sys:request:get-redirect-request' => 'Acme\Schemas\Sys\Request\GetRedirectRequestV1',
    'acme:sys:request:get-redirect-response' => 'Acme\Schemas\Sys\Request\GetRedirectResponseV1',
    'acme:sys:request:list-all-flagsets-request' => 'Acme\Schemas\Sys\Request\ListAllFlagsetsRequestV1',
    'acme:sys:request:list-all-flagsets-response' => 'Acme\Schemas\Sys\Request\ListAllFlagsetsResponseV1',
    'acme:sys:request:list-all-picklists-request' => 'Acme\Schemas\Sys\Request\ListAllPicklistsRequestV1',
    'acme:sys:request:list-all-picklists-response' => 'Acme\Schemas\Sys\Request\ListAllPicklistsResponseV1',
    'acme:sys:request:search-redirects-request' => 'Acme\Schemas\Sys\Request\SearchRedirectsRequestV1',
    'acme:sys:request:search-redirects-response' => 'Acme\Schemas\Sys\Request\SearchRedirectsResponseV1',
    'acme:taxonomy:request:get-all-channels-request' => 'Acme\Schemas\Taxonomy\Request\GetAllChannelsRequestV1',
    'acme:taxonomy:request:get-all-channels-response' => 'Acme\Schemas\Taxonomy\Request\GetAllChannelsResponseV1',
    'acme:taxonomy:request:get-category-history-request' => 'Acme\Schemas\Taxonomy\Request\GetCategoryHistoryRequestV1',
    'acme:taxonomy:request:get-category-history-response' => 'Acme\Schemas\Taxonomy\Request\GetCategoryHistoryResponseV1',
    'acme:taxonomy:request:get-category-request' => 'Acme\Schemas\Taxonomy\Request\GetCategoryRequestV1',
    'acme:taxonomy:request:get-category-response' => 'Acme\Schemas\Taxonomy\Request\GetCategoryResponseV1',
    'acme:taxonomy:request:get-channel-history-request' => 'Acme\Schemas\Taxonomy\Request\GetChannelHistoryRequestV1',
    'acme:taxonomy:request:get-channel-history-response' => 'Acme\Schemas\Taxonomy\Request\GetChannelHistoryResponseV1',
    'acme:taxonomy:request:get-channel-request' => 'Acme\Schemas\Taxonomy\Request\GetChannelRequestV1',
    'acme:taxonomy:request:get-channel-response' => 'Acme\Schemas\Taxonomy\Request\GetChannelResponseV1',
    'acme:taxonomy:request:search-categories-request' => 'Acme\Schemas\Taxonomy\Request\SearchCategoriesRequestV1',
    'acme:taxonomy:request:search-categories-response' => 'Acme\Schemas\Taxonomy\Request\SearchCategoriesResponseV1',
    'acme:taxonomy:request:suggest-hashtags-request' => 'Acme\Schemas\Taxonomy\Request\SuggestHashtagsRequestV1',
    'acme:taxonomy:request:suggest-hashtags-response' => 'Acme\Schemas\Taxonomy\Request\SuggestHashtagsResponseV1',
    'gdbots:ncr:request:get-node-batch-request' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchRequestV1',
    'gdbots:ncr:request:get-node-batch-response' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchResponseV1',
    'gdbots:pbjx:request:echo-request' => 'Gdbots\Schemas\Pbjx\Request\EchoRequestV1',
    'gdbots:pbjx:request:echo-response' => 'Gdbots\Schemas\Pbjx\Request\EchoResponseV1',
    'gdbots:pbjx:request:request-failed-response' => 'Gdbots\Schemas\Pbjx\Request\RequestFailedResponseV1',
]);
