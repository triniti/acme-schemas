/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@triniti/acme-schemas/acme/apollo/PollAnswerV1';
import '@triniti/acme-schemas/acme/apollo/command/CastVoteV1';
import '@triniti/acme-schemas/acme/apollo/command/CreatePollV1';
import '@triniti/acme-schemas/acme/apollo/command/DeletePollV1';
import '@triniti/acme-schemas/acme/apollo/command/ExpirePollV1';
import '@triniti/acme-schemas/acme/apollo/command/MarkPollAsDraftV1';
import '@triniti/acme-schemas/acme/apollo/command/MarkPollAsPendingV1';
import '@triniti/acme-schemas/acme/apollo/command/PublishPollV1';
import '@triniti/acme-schemas/acme/apollo/command/UnpublishPollV1';
import '@triniti/acme-schemas/acme/apollo/command/UpdatePollV1';
import '@triniti/acme-schemas/acme/apollo/event/PollCreatedV1';
import '@triniti/acme-schemas/acme/apollo/event/PollDeletedV1';
import '@triniti/acme-schemas/acme/apollo/event/PollExpiredV1';
import '@triniti/acme-schemas/acme/apollo/event/PollMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/apollo/event/PollMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/apollo/event/PollPublishedV1';
import '@triniti/acme-schemas/acme/apollo/event/PollScheduledV1';
import '@triniti/acme-schemas/acme/apollo/event/PollUnpublishedV1';
import '@triniti/acme-schemas/acme/apollo/event/PollUpdatedV1';
import '@triniti/acme-schemas/acme/apollo/event/VoteCastedV1';
import '@triniti/acme-schemas/acme/apollo/node/PollV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollBatchRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollBatchResponseV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollHistoryRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollHistoryResponseV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollResponseV1';
import '@triniti/acme-schemas/acme/apollo/request/SearchPollsRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/SearchPollsResponseV1';
import '@triniti/acme-schemas/acme/canvas/block/CodeBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/FacebookPostBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/FacebookVideoBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/IframeBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/ImgurPostBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/InstagramMediaBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PinterestBoardBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PinterestPinBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PinterestProfileBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterCollectionTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterListTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterMomentBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterSearchTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterTweetBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterUserTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterVideoBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/VevoVideoBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/YoutubePlaylistBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/YoutubeVideoBlockV1';
import '@triniti/acme-schemas/acme/canvas/command/CreatePageV1';
import '@triniti/acme-schemas/acme/canvas/command/DeletePageV1';
import '@triniti/acme-schemas/acme/canvas/command/ExpirePageV1';
import '@triniti/acme-schemas/acme/canvas/command/MarkPageAsDraftV1';
import '@triniti/acme-schemas/acme/canvas/command/MarkPageAsPendingV1';
import '@triniti/acme-schemas/acme/canvas/command/PublishPageV1';
import '@triniti/acme-schemas/acme/canvas/command/RenamePageV1';
import '@triniti/acme-schemas/acme/canvas/command/UnpublishPageV1';
import '@triniti/acme-schemas/acme/canvas/command/UpdatePageV1';
import '@triniti/acme-schemas/acme/canvas/event/PageCreatedV1';
import '@triniti/acme-schemas/acme/canvas/event/PageDeletedV1';
import '@triniti/acme-schemas/acme/canvas/event/PageExpiredV1';
import '@triniti/acme-schemas/acme/canvas/event/PageMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/canvas/event/PageMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/canvas/event/PagePublishedV1';
import '@triniti/acme-schemas/acme/canvas/event/PageRenamedV1';
import '@triniti/acme-schemas/acme/canvas/event/PageScheduledV1';
import '@triniti/acme-schemas/acme/canvas/event/PageUnpublishedV1';
import '@triniti/acme-schemas/acme/canvas/event/PageUpdatedV1';
import '@triniti/acme-schemas/acme/canvas/node/PageV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageBatchRequestV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageBatchResponseV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageHistoryRequestV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageHistoryResponseV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageRequestV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageResponseV1';
import '@triniti/acme-schemas/acme/canvas/request/SearchPagesRequestV1';
import '@triniti/acme-schemas/acme/canvas/request/SearchPagesResponseV1';
import '@triniti/acme-schemas/acme/dam/command/CreateAssetV1';
import '@triniti/acme-schemas/acme/dam/command/DeleteAssetV1';
import '@triniti/acme-schemas/acme/dam/command/ExpireAssetV1';
import '@triniti/acme-schemas/acme/dam/command/PublishAssetV1';
import '@triniti/acme-schemas/acme/dam/command/UnpublishAssetV1';
import '@triniti/acme-schemas/acme/dam/command/UpdateAssetV1';
import '@triniti/acme-schemas/acme/dam/event/AssetCreatedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetDeletedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetExpiredV1';
import '@triniti/acme-schemas/acme/dam/event/AssetPublishedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetScheduledV1';
import '@triniti/acme-schemas/acme/dam/event/AssetUnpublishedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetUpdatedV1';
import '@triniti/acme-schemas/acme/dam/node/AudioAssetV1';
import '@triniti/acme-schemas/acme/dam/node/DocumentAssetV1';
import '@triniti/acme-schemas/acme/dam/node/ImageAssetV1';
import '@triniti/acme-schemas/acme/dam/node/VideoAssetV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetBatchRequestV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetBatchResponseV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetHistoryRequestV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetHistoryResponseV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetRequestV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetResponseV1';
import '@triniti/acme-schemas/acme/dam/request/GetUploadUrlsRequestV1';
import '@triniti/acme-schemas/acme/dam/request/GetUploadUrlsResponseV1';
import '@triniti/acme-schemas/acme/dam/request/SearchAssetsRequestV1';
import '@triniti/acme-schemas/acme/dam/request/SearchAssetsResponseV1';
import '@triniti/acme-schemas/acme/iam/command/CreateRoleV1';
import '@triniti/acme-schemas/acme/iam/command/CreateUserV1';
import '@triniti/acme-schemas/acme/iam/command/DeleteRoleV1';
import '@triniti/acme-schemas/acme/iam/command/DeleteUserV1';
import '@triniti/acme-schemas/acme/iam/command/GrantRolesToUserV1';
import '@triniti/acme-schemas/acme/iam/command/RevokeRolesFromUserV1';
import '@triniti/acme-schemas/acme/iam/command/UpdateRoleV1';
import '@triniti/acme-schemas/acme/iam/command/UpdateUserV1';
import '@triniti/acme-schemas/acme/iam/event/RoleCreatedV1';
import '@triniti/acme-schemas/acme/iam/event/RoleDeletedV1';
import '@triniti/acme-schemas/acme/iam/event/RoleUpdatedV1';
import '@triniti/acme-schemas/acme/iam/event/UserCreatedV1';
import '@triniti/acme-schemas/acme/iam/event/UserDeletedV1';
import '@triniti/acme-schemas/acme/iam/event/UserRolesGrantedV1';
import '@triniti/acme-schemas/acme/iam/event/UserRolesRevokedV1';
import '@triniti/acme-schemas/acme/iam/event/UserUpdatedV1';
import '@triniti/acme-schemas/acme/iam/node/RoleV1';
import '@triniti/acme-schemas/acme/iam/node/UserV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleBatchRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleBatchResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleHistoryRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleHistoryResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserBatchRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserBatchResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserHistoryRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserHistoryResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserResponseV1';
import '@triniti/acme-schemas/acme/iam/request/ListAllRolesRequestV1';
import '@triniti/acme-schemas/acme/iam/request/ListAllRolesResponseV1';
import '@triniti/acme-schemas/acme/iam/request/SearchUsersRequestV1';
import '@triniti/acme-schemas/acme/iam/request/SearchUsersResponseV1';
import '@triniti/acme-schemas/acme/news/command/CreateArticleV1';
import '@triniti/acme-schemas/acme/news/command/DeleteArticleV1';
import '@triniti/acme-schemas/acme/news/command/ExpireArticleV1';
import '@triniti/acme-schemas/acme/news/command/MarkArticleAsDraftV1';
import '@triniti/acme-schemas/acme/news/command/MarkArticleAsPendingV1';
import '@triniti/acme-schemas/acme/news/command/PublishArticleV1';
import '@triniti/acme-schemas/acme/news/command/RenameArticleV1';
import '@triniti/acme-schemas/acme/news/command/UnpublishArticleV1';
import '@triniti/acme-schemas/acme/news/command/UpdateArticleV1';
import '@triniti/acme-schemas/acme/news/event/ArticleCreatedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleDeletedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleExpiredV1';
import '@triniti/acme-schemas/acme/news/event/ArticleMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/news/event/ArticleMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/news/event/ArticlePublishedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleRenamedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleScheduledV1';
import '@triniti/acme-schemas/acme/news/event/ArticleUnpublishedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleUpdatedV1';
import '@triniti/acme-schemas/acme/news/node/ArticleV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleBatchRequestV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleBatchResponseV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleHistoryRequestV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleHistoryResponseV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleRequestV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleResponseV1';
import '@triniti/acme-schemas/acme/news/request/SearchArticlesRequestV1';
import '@triniti/acme-schemas/acme/news/request/SearchArticlesResponseV1';
import '@triniti/acme-schemas/acme/ovp/command/CreateVideoV1';
import '@triniti/acme-schemas/acme/ovp/command/DeleteVideoV1';
import '@triniti/acme-schemas/acme/ovp/command/ExpireVideoV1';
import '@triniti/acme-schemas/acme/ovp/command/MarkVideoAsDraftV1';
import '@triniti/acme-schemas/acme/ovp/command/MarkVideoAsPendingV1';
import '@triniti/acme-schemas/acme/ovp/command/PublishVideoV1';
import '@triniti/acme-schemas/acme/ovp/command/RenameVideoV1';
import '@triniti/acme-schemas/acme/ovp/command/UnpublishVideoV1';
import '@triniti/acme-schemas/acme/ovp/command/UpdateVideoV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoCreatedV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoDeletedV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoExpiredV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoPublishedV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoRenamedV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoScheduledV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoUnpublishedV1';
import '@triniti/acme-schemas/acme/ovp/event/VideoUpdatedV1';
import '@triniti/acme-schemas/acme/ovp/node/VideoV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoBatchRequestV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoBatchResponseV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoHistoryRequestV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoHistoryResponseV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoRequestV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoResponseV1';
import '@triniti/acme-schemas/acme/ovp/request/SearchVideosRequestV1';
import '@triniti/acme-schemas/acme/ovp/request/SearchVideosResponseV1';
import '@gdbots/schemas/gdbots/analytics/tracker/KeenV1';
import '@gdbots/schemas/gdbots/contexts/AppV1';
import '@gdbots/schemas/gdbots/contexts/CloudV1';
import '@gdbots/schemas/gdbots/contexts/UserAgentV1';
import '@gdbots/schemas/gdbots/forms/field/AddressFieldV1';
import '@gdbots/schemas/gdbots/forms/field/AgeFieldV1';
import '@gdbots/schemas/gdbots/forms/field/CountryFieldV1';
import '@gdbots/schemas/gdbots/forms/field/DateFieldV1';
import '@gdbots/schemas/gdbots/forms/field/DobFieldV1';
import '@gdbots/schemas/gdbots/forms/field/EmailFieldV1';
import '@gdbots/schemas/gdbots/forms/field/FacebookUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/GenderFieldV1';
import '@gdbots/schemas/gdbots/forms/field/HeightFieldV1';
import '@gdbots/schemas/gdbots/forms/field/InstagramUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/LegalFieldV1';
import '@gdbots/schemas/gdbots/forms/field/LongTextFieldV1';
import '@gdbots/schemas/gdbots/forms/field/NumberFieldV1';
import '@gdbots/schemas/gdbots/forms/field/PhoneFieldV1';
import '@gdbots/schemas/gdbots/forms/field/PhotoFieldV1';
import '@gdbots/schemas/gdbots/forms/field/PinterestUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/SelectFieldV1';
import '@gdbots/schemas/gdbots/forms/field/ShortTextFieldV1';
import '@gdbots/schemas/gdbots/forms/field/SnapchatUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/StatementFieldV1';
import '@gdbots/schemas/gdbots/forms/field/TwitterUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/VideoFieldV1';
import '@gdbots/schemas/gdbots/forms/field/WebsiteFieldV1';
import '@gdbots/schemas/gdbots/forms/field/YesNoFieldV1';
import '@gdbots/schemas/gdbots/forms/field/YoutubeUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/YoutubeVideoFieldV1';
import '@gdbots/schemas/gdbots/geo/AddressV1';
import '@gdbots/schemas/gdbots/ncr/command/CreateEdgeV1';
import '@gdbots/schemas/gdbots/ncr/command/DeleteEdgeV1';
import '@gdbots/schemas/gdbots/ncr/event/EdgeCreatedV1';
import '@gdbots/schemas/gdbots/ncr/event/EdgeDeletedV1';
import '@gdbots/schemas/gdbots/ncr/request/GetNodeBatchRequestV1';
import '@gdbots/schemas/gdbots/ncr/request/GetNodeBatchResponseV1';
import '@gdbots/schemas/gdbots/pbjx/EnvelopeV1';
import '@gdbots/schemas/gdbots/pbjx/command/CheckHealthV1';
import '@gdbots/schemas/gdbots/pbjx/event/EventExecutionFailedV1';
import '@gdbots/schemas/gdbots/pbjx/event/HealthCheckedV1';
import '@gdbots/schemas/gdbots/pbjx/request/EchoRequestV1';
import '@gdbots/schemas/gdbots/pbjx/request/EchoResponseV1';
import '@gdbots/schemas/gdbots/pbjx/request/RequestFailedResponseV1';
import '@triniti/schemas/triniti/canvas/block/RenderContextV1';

export default MessageResolver;
