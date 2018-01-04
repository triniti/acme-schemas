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
    'acme:apollo::poll-answer' => 'Acme\Schemas\Apollo\PollAnswerV1',
    'acme:apollo:command:cast-vote' => 'Acme\Schemas\Apollo\Command\CastVoteV1',
    'acme:apollo:command:create-poll' => 'Acme\Schemas\Apollo\Command\CreatePollV1',
    'acme:apollo:command:delete-poll' => 'Acme\Schemas\Apollo\Command\DeletePollV1',
    'acme:apollo:command:expire-poll' => 'Acme\Schemas\Apollo\Command\ExpirePollV1',
    'acme:apollo:command:mark-poll-as-draft' => 'Acme\Schemas\Apollo\Command\MarkPollAsDraftV1',
    'acme:apollo:command:mark-poll-as-pending' => 'Acme\Schemas\Apollo\Command\MarkPollAsPendingV1',
    'acme:apollo:command:publish-poll' => 'Acme\Schemas\Apollo\Command\PublishPollV1',
    'acme:apollo:command:unpublish-poll' => 'Acme\Schemas\Apollo\Command\UnpublishPollV1',
    'acme:apollo:command:update-poll' => 'Acme\Schemas\Apollo\Command\UpdatePollV1',
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
    'acme:apollo:node:poll' => 'Acme\Schemas\Apollo\Node\PollV1',
    'acme:apollo:request:get-poll-batch-request' => 'Acme\Schemas\Apollo\Request\GetPollBatchRequestV1',
    'acme:apollo:request:get-poll-batch-response' => 'Acme\Schemas\Apollo\Request\GetPollBatchResponseV1',
    'acme:apollo:request:get-poll-history-request' => 'Acme\Schemas\Apollo\Request\GetPollHistoryRequestV1',
    'acme:apollo:request:get-poll-history-response' => 'Acme\Schemas\Apollo\Request\GetPollHistoryResponseV1',
    'acme:apollo:request:get-poll-request' => 'Acme\Schemas\Apollo\Request\GetPollRequestV1',
    'acme:apollo:request:get-poll-response' => 'Acme\Schemas\Apollo\Request\GetPollResponseV1',
    'acme:apollo:request:search-polls-request' => 'Acme\Schemas\Apollo\Request\SearchPollsRequestV1',
    'acme:apollo:request:search-polls-response' => 'Acme\Schemas\Apollo\Request\SearchPollsResponseV1',
    'acme:canvas:block:code-block' => 'Acme\Schemas\Canvas\Block\CodeBlockV1',
    'acme:canvas:block:facebook-post-block' => 'Acme\Schemas\Canvas\Block\FacebookPostBlockV1',
    'acme:canvas:block:facebook-video-block' => 'Acme\Schemas\Canvas\Block\FacebookVideoBlockV1',
    'acme:canvas:block:iframe-block' => 'Acme\Schemas\Canvas\Block\IframeBlockV1',
    'acme:canvas:block:imgur-post-block' => 'Acme\Schemas\Canvas\Block\ImgurPostBlockV1',
    'acme:canvas:block:instagram-media-block' => 'Acme\Schemas\Canvas\Block\InstagramMediaBlockV1',
    'acme:canvas:block:pinterest-board-block' => 'Acme\Schemas\Canvas\Block\PinterestBoardBlockV1',
    'acme:canvas:block:pinterest-pin-block' => 'Acme\Schemas\Canvas\Block\PinterestPinBlockV1',
    'acme:canvas:block:pinterest-profile-block' => 'Acme\Schemas\Canvas\Block\PinterestProfileBlockV1',
    'acme:canvas:block:twitter-collection-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterCollectionTimelineBlockV1',
    'acme:canvas:block:twitter-list-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterListTimelineBlockV1',
    'acme:canvas:block:twitter-moment-block' => 'Acme\Schemas\Canvas\Block\TwitterMomentBlockV1',
    'acme:canvas:block:twitter-search-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterSearchTimelineBlockV1',
    'acme:canvas:block:twitter-tweet-block' => 'Acme\Schemas\Canvas\Block\TwitterTweetBlockV1',
    'acme:canvas:block:twitter-user-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterUserTimelineBlockV1',
    'acme:canvas:block:twitter-video-block' => 'Acme\Schemas\Canvas\Block\TwitterVideoBlockV1',
    'acme:canvas:block:vevo-video-block' => 'Acme\Schemas\Canvas\Block\VevoVideoBlockV1',
    'acme:canvas:block:youtube-playlist-block' => 'Acme\Schemas\Canvas\Block\YoutubePlaylistBlockV1',
    'acme:canvas:block:youtube-video-block' => 'Acme\Schemas\Canvas\Block\YoutubeVideoBlockV1',
    'acme:canvas:command:create-page' => 'Acme\Schemas\Canvas\Command\CreatePageV1',
    'acme:canvas:command:delete-page' => 'Acme\Schemas\Canvas\Command\DeletePageV1',
    'acme:canvas:command:expire-page' => 'Acme\Schemas\Canvas\Command\ExpirePageV1',
    'acme:canvas:command:mark-page-as-draft' => 'Acme\Schemas\Canvas\Command\MarkPageAsDraftV1',
    'acme:canvas:command:mark-page-as-pending' => 'Acme\Schemas\Canvas\Command\MarkPageAsPendingV1',
    'acme:canvas:command:publish-page' => 'Acme\Schemas\Canvas\Command\PublishPageV1',
    'acme:canvas:command:rename-page' => 'Acme\Schemas\Canvas\Command\RenamePageV1',
    'acme:canvas:command:unpublish-page' => 'Acme\Schemas\Canvas\Command\UnpublishPageV1',
    'acme:canvas:command:update-page' => 'Acme\Schemas\Canvas\Command\UpdatePageV1',
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
    'acme:canvas:node:page' => 'Acme\Schemas\Canvas\Node\PageV1',
    'acme:canvas:request:get-page-batch-request' => 'Acme\Schemas\Canvas\Request\GetPageBatchRequestV1',
    'acme:canvas:request:get-page-batch-response' => 'Acme\Schemas\Canvas\Request\GetPageBatchResponseV1',
    'acme:canvas:request:get-page-history-request' => 'Acme\Schemas\Canvas\Request\GetPageHistoryRequestV1',
    'acme:canvas:request:get-page-history-response' => 'Acme\Schemas\Canvas\Request\GetPageHistoryResponseV1',
    'acme:canvas:request:get-page-request' => 'Acme\Schemas\Canvas\Request\GetPageRequestV1',
    'acme:canvas:request:get-page-response' => 'Acme\Schemas\Canvas\Request\GetPageResponseV1',
    'acme:canvas:request:search-pages-request' => 'Acme\Schemas\Canvas\Request\SearchPagesRequestV1',
    'acme:canvas:request:search-pages-response' => 'Acme\Schemas\Canvas\Request\SearchPagesResponseV1',
    'acme:dam:command:create-asset' => 'Acme\Schemas\Dam\Command\CreateAssetV1',
    'acme:dam:command:delete-asset' => 'Acme\Schemas\Dam\Command\DeleteAssetV1',
    'acme:dam:command:expire-asset' => 'Acme\Schemas\Dam\Command\ExpireAssetV1',
    'acme:dam:command:publish-asset' => 'Acme\Schemas\Dam\Command\PublishAssetV1',
    'acme:dam:command:unpublish-asset' => 'Acme\Schemas\Dam\Command\UnpublishAssetV1',
    'acme:dam:command:update-asset' => 'Acme\Schemas\Dam\Command\UpdateAssetV1',
    'acme:dam:event:asset-created' => 'Acme\Schemas\Dam\Event\AssetCreatedV1',
    'acme:dam:event:asset-deleted' => 'Acme\Schemas\Dam\Event\AssetDeletedV1',
    'acme:dam:event:asset-expired' => 'Acme\Schemas\Dam\Event\AssetExpiredV1',
    'acme:dam:event:asset-published' => 'Acme\Schemas\Dam\Event\AssetPublishedV1',
    'acme:dam:event:asset-scheduled' => 'Acme\Schemas\Dam\Event\AssetScheduledV1',
    'acme:dam:event:asset-unpublished' => 'Acme\Schemas\Dam\Event\AssetUnpublishedV1',
    'acme:dam:event:asset-updated' => 'Acme\Schemas\Dam\Event\AssetUpdatedV1',
    'acme:dam:node:audio-asset' => 'Acme\Schemas\Dam\Node\AudioAssetV1',
    'acme:dam:node:document-asset' => 'Acme\Schemas\Dam\Node\DocumentAssetV1',
    'acme:dam:node:image-asset' => 'Acme\Schemas\Dam\Node\ImageAssetV1',
    'acme:dam:node:video-asset' => 'Acme\Schemas\Dam\Node\VideoAssetV1',
    'acme:dam:request:get-asset-batch-request' => 'Acme\Schemas\Dam\Request\GetAssetBatchRequestV1',
    'acme:dam:request:get-asset-batch-response' => 'Acme\Schemas\Dam\Request\GetAssetBatchResponseV1',
    'acme:dam:request:get-asset-history-request' => 'Acme\Schemas\Dam\Request\GetAssetHistoryRequestV1',
    'acme:dam:request:get-asset-history-response' => 'Acme\Schemas\Dam\Request\GetAssetHistoryResponseV1',
    'acme:dam:request:get-asset-request' => 'Acme\Schemas\Dam\Request\GetAssetRequestV1',
    'acme:dam:request:get-asset-response' => 'Acme\Schemas\Dam\Request\GetAssetResponseV1',
    'acme:dam:request:get-upload-urls-request' => 'Acme\Schemas\Dam\Request\GetUploadUrlsRequestV1',
    'acme:dam:request:get-upload-urls-response' => 'Acme\Schemas\Dam\Request\GetUploadUrlsResponseV1',
    'acme:dam:request:search-assets-request' => 'Acme\Schemas\Dam\Request\SearchAssetsRequestV1',
    'acme:dam:request:search-assets-response' => 'Acme\Schemas\Dam\Request\SearchAssetsResponseV1',
    'acme:iam:command:create-role' => 'Acme\Schemas\Iam\Command\CreateRoleV1',
    'acme:iam:command:create-user' => 'Acme\Schemas\Iam\Command\CreateUserV1',
    'acme:iam:command:delete-role' => 'Acme\Schemas\Iam\Command\DeleteRoleV1',
    'acme:iam:command:delete-user' => 'Acme\Schemas\Iam\Command\DeleteUserV1',
    'acme:iam:command:grant-roles-to-user' => 'Acme\Schemas\Iam\Command\GrantRolesToUserV1',
    'acme:iam:command:revoke-roles-from-user' => 'Acme\Schemas\Iam\Command\RevokeRolesFromUserV1',
    'acme:iam:command:update-role' => 'Acme\Schemas\Iam\Command\UpdateRoleV1',
    'acme:iam:command:update-user' => 'Acme\Schemas\Iam\Command\UpdateUserV1',
    'acme:iam:event:role-created' => 'Acme\Schemas\Iam\Event\RoleCreatedV1',
    'acme:iam:event:role-deleted' => 'Acme\Schemas\Iam\Event\RoleDeletedV1',
    'acme:iam:event:role-updated' => 'Acme\Schemas\Iam\Event\RoleUpdatedV1',
    'acme:iam:event:user-created' => 'Acme\Schemas\Iam\Event\UserCreatedV1',
    'acme:iam:event:user-deleted' => 'Acme\Schemas\Iam\Event\UserDeletedV1',
    'acme:iam:event:user-roles-granted' => 'Acme\Schemas\Iam\Event\UserRolesGrantedV1',
    'acme:iam:event:user-roles-revoked' => 'Acme\Schemas\Iam\Event\UserRolesRevokedV1',
    'acme:iam:event:user-updated' => 'Acme\Schemas\Iam\Event\UserUpdatedV1',
    'acme:iam:node:role' => 'Acme\Schemas\Iam\Node\RoleV1',
    'acme:iam:node:user' => 'Acme\Schemas\Iam\Node\UserV1',
    'acme:iam:request:get-role-batch-request' => 'Acme\Schemas\Iam\Request\GetRoleBatchRequestV1',
    'acme:iam:request:get-role-batch-response' => 'Acme\Schemas\Iam\Request\GetRoleBatchResponseV1',
    'acme:iam:request:get-role-history-request' => 'Acme\Schemas\Iam\Request\GetRoleHistoryRequestV1',
    'acme:iam:request:get-role-history-response' => 'Acme\Schemas\Iam\Request\GetRoleHistoryResponseV1',
    'acme:iam:request:get-role-request' => 'Acme\Schemas\Iam\Request\GetRoleRequestV1',
    'acme:iam:request:get-role-response' => 'Acme\Schemas\Iam\Request\GetRoleResponseV1',
    'acme:iam:request:get-user-batch-request' => 'Acme\Schemas\Iam\Request\GetUserBatchRequestV1',
    'acme:iam:request:get-user-batch-response' => 'Acme\Schemas\Iam\Request\GetUserBatchResponseV1',
    'acme:iam:request:get-user-history-request' => 'Acme\Schemas\Iam\Request\GetUserHistoryRequestV1',
    'acme:iam:request:get-user-history-response' => 'Acme\Schemas\Iam\Request\GetUserHistoryResponseV1',
    'acme:iam:request:get-user-request' => 'Acme\Schemas\Iam\Request\GetUserRequestV1',
    'acme:iam:request:get-user-response' => 'Acme\Schemas\Iam\Request\GetUserResponseV1',
    'acme:iam:request:list-all-roles-request' => 'Acme\Schemas\Iam\Request\ListAllRolesRequestV1',
    'acme:iam:request:list-all-roles-response' => 'Acme\Schemas\Iam\Request\ListAllRolesResponseV1',
    'acme:iam:request:search-users-request' => 'Acme\Schemas\Iam\Request\SearchUsersRequestV1',
    'acme:iam:request:search-users-response' => 'Acme\Schemas\Iam\Request\SearchUsersResponseV1',
    'acme:news:command:create-article' => 'Acme\Schemas\News\Command\CreateArticleV1',
    'acme:news:command:delete-article' => 'Acme\Schemas\News\Command\DeleteArticleV1',
    'acme:news:command:expire-article' => 'Acme\Schemas\News\Command\ExpireArticleV1',
    'acme:news:command:mark-article-as-draft' => 'Acme\Schemas\News\Command\MarkArticleAsDraftV1',
    'acme:news:command:mark-article-as-pending' => 'Acme\Schemas\News\Command\MarkArticleAsPendingV1',
    'acme:news:command:publish-article' => 'Acme\Schemas\News\Command\PublishArticleV1',
    'acme:news:command:rename-article' => 'Acme\Schemas\News\Command\RenameArticleV1',
    'acme:news:command:unpublish-article' => 'Acme\Schemas\News\Command\UnpublishArticleV1',
    'acme:news:command:update-article' => 'Acme\Schemas\News\Command\UpdateArticleV1',
    'acme:news:event:article-created' => 'Acme\Schemas\News\Event\ArticleCreatedV1',
    'acme:news:event:article-deleted' => 'Acme\Schemas\News\Event\ArticleDeletedV1',
    'acme:news:event:article-expired' => 'Acme\Schemas\News\Event\ArticleExpiredV1',
    'acme:news:event:article-marked-as-draft' => 'Acme\Schemas\News\Event\ArticleMarkedAsDraftV1',
    'acme:news:event:article-marked-as-pending' => 'Acme\Schemas\News\Event\ArticleMarkedAsPendingV1',
    'acme:news:event:article-published' => 'Acme\Schemas\News\Event\ArticlePublishedV1',
    'acme:news:event:article-renamed' => 'Acme\Schemas\News\Event\ArticleRenamedV1',
    'acme:news:event:article-scheduled' => 'Acme\Schemas\News\Event\ArticleScheduledV1',
    'acme:news:event:article-unpublished' => 'Acme\Schemas\News\Event\ArticleUnpublishedV1',
    'acme:news:event:article-updated' => 'Acme\Schemas\News\Event\ArticleUpdatedV1',
    'acme:news:node:article' => 'Acme\Schemas\News\Node\ArticleV1',
    'acme:news:request:get-article-batch-request' => 'Acme\Schemas\News\Request\GetArticleBatchRequestV1',
    'acme:news:request:get-article-batch-response' => 'Acme\Schemas\News\Request\GetArticleBatchResponseV1',
    'acme:news:request:get-article-history-request' => 'Acme\Schemas\News\Request\GetArticleHistoryRequestV1',
    'acme:news:request:get-article-history-response' => 'Acme\Schemas\News\Request\GetArticleHistoryResponseV1',
    'acme:news:request:get-article-request' => 'Acme\Schemas\News\Request\GetArticleRequestV1',
    'acme:news:request:get-article-response' => 'Acme\Schemas\News\Request\GetArticleResponseV1',
    'acme:news:request:search-articles-request' => 'Acme\Schemas\News\Request\SearchArticlesRequestV1',
    'acme:news:request:search-articles-response' => 'Acme\Schemas\News\Request\SearchArticlesResponseV1',
    'acme:ovp:command:create-video' => 'Acme\Schemas\Ovp\Command\CreateVideoV1',
    'acme:ovp:command:delete-video' => 'Acme\Schemas\Ovp\Command\DeleteVideoV1',
    'acme:ovp:command:expire-video' => 'Acme\Schemas\Ovp\Command\ExpireVideoV1',
    'acme:ovp:command:mark-video-as-draft' => 'Acme\Schemas\Ovp\Command\MarkVideoAsDraftV1',
    'acme:ovp:command:mark-video-as-pending' => 'Acme\Schemas\Ovp\Command\MarkVideoAsPendingV1',
    'acme:ovp:command:publish-video' => 'Acme\Schemas\Ovp\Command\PublishVideoV1',
    'acme:ovp:command:rename-video' => 'Acme\Schemas\Ovp\Command\RenameVideoV1',
    'acme:ovp:command:unpublish-video' => 'Acme\Schemas\Ovp\Command\UnpublishVideoV1',
    'acme:ovp:command:update-video' => 'Acme\Schemas\Ovp\Command\UpdateVideoV1',
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
    'acme:ovp:node:video' => 'Acme\Schemas\Ovp\Node\VideoV1',
    'acme:ovp:request:get-video-batch-request' => 'Acme\Schemas\Ovp\Request\GetVideoBatchRequestV1',
    'acme:ovp:request:get-video-batch-response' => 'Acme\Schemas\Ovp\Request\GetVideoBatchResponseV1',
    'acme:ovp:request:get-video-history-request' => 'Acme\Schemas\Ovp\Request\GetVideoHistoryRequestV1',
    'acme:ovp:request:get-video-history-response' => 'Acme\Schemas\Ovp\Request\GetVideoHistoryResponseV1',
    'acme:ovp:request:get-video-request' => 'Acme\Schemas\Ovp\Request\GetVideoRequestV1',
    'acme:ovp:request:get-video-response' => 'Acme\Schemas\Ovp\Request\GetVideoResponseV1',
    'acme:ovp:request:search-videos-request' => 'Acme\Schemas\Ovp\Request\SearchVideosRequestV1',
    'acme:ovp:request:search-videos-response' => 'Acme\Schemas\Ovp\Request\SearchVideosResponseV1',
    'gdbots:analytics:tracker:keen' => 'Gdbots\Schemas\Analytics\Tracker\KeenV1',
    'gdbots:contexts::app' => 'Gdbots\Schemas\Contexts\AppV1',
    'gdbots:contexts::cloud' => 'Gdbots\Schemas\Contexts\CloudV1',
    'gdbots:contexts::user-agent' => 'Gdbots\Schemas\Contexts\UserAgentV1',
    'gdbots:forms:field:address-field' => 'Gdbots\Schemas\Forms\Field\AddressFieldV1',
    'gdbots:forms:field:age-field' => 'Gdbots\Schemas\Forms\Field\AgeFieldV1',
    'gdbots:forms:field:country-field' => 'Gdbots\Schemas\Forms\Field\CountryFieldV1',
    'gdbots:forms:field:date-field' => 'Gdbots\Schemas\Forms\Field\DateFieldV1',
    'gdbots:forms:field:dob-field' => 'Gdbots\Schemas\Forms\Field\DobFieldV1',
    'gdbots:forms:field:email-field' => 'Gdbots\Schemas\Forms\Field\EmailFieldV1',
    'gdbots:forms:field:facebook-user-field' => 'Gdbots\Schemas\Forms\Field\FacebookUserFieldV1',
    'gdbots:forms:field:gender-field' => 'Gdbots\Schemas\Forms\Field\GenderFieldV1',
    'gdbots:forms:field:height-field' => 'Gdbots\Schemas\Forms\Field\HeightFieldV1',
    'gdbots:forms:field:instagram-user-field' => 'Gdbots\Schemas\Forms\Field\InstagramUserFieldV1',
    'gdbots:forms:field:legal-field' => 'Gdbots\Schemas\Forms\Field\LegalFieldV1',
    'gdbots:forms:field:long-text-field' => 'Gdbots\Schemas\Forms\Field\LongTextFieldV1',
    'gdbots:forms:field:number-field' => 'Gdbots\Schemas\Forms\Field\NumberFieldV1',
    'gdbots:forms:field:phone-field' => 'Gdbots\Schemas\Forms\Field\PhoneFieldV1',
    'gdbots:forms:field:photo-field' => 'Gdbots\Schemas\Forms\Field\PhotoFieldV1',
    'gdbots:forms:field:pinterest-user-field' => 'Gdbots\Schemas\Forms\Field\PinterestUserFieldV1',
    'gdbots:forms:field:select-field' => 'Gdbots\Schemas\Forms\Field\SelectFieldV1',
    'gdbots:forms:field:short-text-field' => 'Gdbots\Schemas\Forms\Field\ShortTextFieldV1',
    'gdbots:forms:field:snapchat-user-field' => 'Gdbots\Schemas\Forms\Field\SnapchatUserFieldV1',
    'gdbots:forms:field:statement-field' => 'Gdbots\Schemas\Forms\Field\StatementFieldV1',
    'gdbots:forms:field:twitter-user-field' => 'Gdbots\Schemas\Forms\Field\TwitterUserFieldV1',
    'gdbots:forms:field:video-field' => 'Gdbots\Schemas\Forms\Field\VideoFieldV1',
    'gdbots:forms:field:website-field' => 'Gdbots\Schemas\Forms\Field\WebsiteFieldV1',
    'gdbots:forms:field:yes-no-field' => 'Gdbots\Schemas\Forms\Field\YesNoFieldV1',
    'gdbots:forms:field:youtube-user-field' => 'Gdbots\Schemas\Forms\Field\YoutubeUserFieldV1',
    'gdbots:forms:field:youtube-video-field' => 'Gdbots\Schemas\Forms\Field\YoutubeVideoFieldV1',
    'gdbots:geo::address' => 'Gdbots\Schemas\Geo\AddressV1',
    'gdbots:ncr:command:create-edge' => 'Gdbots\Schemas\Ncr\Command\CreateEdgeV1',
    'gdbots:ncr:command:delete-edge' => 'Gdbots\Schemas\Ncr\Command\DeleteEdgeV1',
    'gdbots:ncr:event:edge-created' => 'Gdbots\Schemas\Ncr\Event\EdgeCreatedV1',
    'gdbots:ncr:event:edge-deleted' => 'Gdbots\Schemas\Ncr\Event\EdgeDeletedV1',
    'gdbots:ncr:request:get-node-batch-request' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchRequestV1',
    'gdbots:ncr:request:get-node-batch-response' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchResponseV1',
    'gdbots:pbjx::envelope' => 'Gdbots\Schemas\Pbjx\EnvelopeV1',
    'gdbots:pbjx:command:check-health' => 'Gdbots\Schemas\Pbjx\Command\CheckHealthV1',
    'gdbots:pbjx:event:event-execution-failed' => 'Gdbots\Schemas\Pbjx\Event\EventExecutionFailedV1',
    'gdbots:pbjx:event:health-checked' => 'Gdbots\Schemas\Pbjx\Event\HealthCheckedV1',
    'gdbots:pbjx:request:echo-request' => 'Gdbots\Schemas\Pbjx\Request\EchoRequestV1',
    'gdbots:pbjx:request:echo-response' => 'Gdbots\Schemas\Pbjx\Request\EchoResponseV1',
    'gdbots:pbjx:request:request-failed-response' => 'Gdbots\Schemas\Pbjx\Request\RequestFailedResponseV1',
    'triniti:canvas:block:render-context' => 'Triniti\Schemas\Canvas\Block\RenderContextV1',
]);
