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
import '@triniti/acme-schemas/acme/apollo/request/GetPollHistoryRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollHistoryResponseV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollResponseV1';
import '@triniti/acme-schemas/acme/apollo/request/SearchPollsRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/SearchPollsResponseV1';
import '@triniti/acme-schemas/acme/boost/command/CreateSponsorV1';
import '@triniti/acme-schemas/acme/boost/command/DeleteSponsorV1';
import '@triniti/acme-schemas/acme/boost/command/ExpireSponsorV1';
import '@triniti/acme-schemas/acme/boost/command/MarkSponsorAsDraftV1';
import '@triniti/acme-schemas/acme/boost/command/MarkSponsorAsPendingV1';
import '@triniti/acme-schemas/acme/boost/command/PublishSponsorV1';
import '@triniti/acme-schemas/acme/boost/command/RenameSponsorV1';
import '@triniti/acme-schemas/acme/boost/command/UnpublishSponsorV1';
import '@triniti/acme-schemas/acme/boost/command/UpdateSponsorV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorCreatedV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorDeletedV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorExpiredV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorPublishedV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorRenamedV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorScheduledV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorUnpublishedV1';
import '@triniti/acme-schemas/acme/boost/event/SponsorUpdatedV1';
import '@triniti/acme-schemas/acme/boost/node/SponsorV1';
import '@triniti/acme-schemas/acme/boost/request/GetSponsorHistoryRequestV1';
import '@triniti/acme-schemas/acme/boost/request/GetSponsorHistoryResponseV1';
import '@triniti/acme-schemas/acme/boost/request/GetSponsorRequestV1';
import '@triniti/acme-schemas/acme/boost/request/GetSponsorResponseV1';
import '@triniti/acme-schemas/acme/boost/request/SearchSponsorsRequestV1';
import '@triniti/acme-schemas/acme/boost/request/SearchSponsorsResponseV1';
import '@triniti/acme-schemas/acme/canvas/block/ArticleBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/AudioBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/CodeBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/DocumentBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/FacebookPostBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/FacebookVideoBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/GalleryBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/GoogleMapBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/HeadingBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/IframeBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/ImageBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/ImgurPostBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/InstagramMediaBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PageBreakBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PinterestBoardBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PinterestPinBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PinterestProfileBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PollBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/PollGridBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/QuoteBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/SoundcloudAudioBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TextBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterCollectionTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterFollowButtonBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterHashtagButtonBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterLikesTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterListTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterMentionButtonBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterMomentBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterSearchTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterTweetBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterUserTimelineBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/TwitterVideoBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/VevoVideoBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/VideoBlockV1';
import '@triniti/acme-schemas/acme/canvas/block/VimeoVideoBlockV1';
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
import '@triniti/acme-schemas/acme/canvas/request/GetPageHistoryRequestV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageHistoryResponseV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageRequestV1';
import '@triniti/acme-schemas/acme/canvas/request/GetPageResponseV1';
import '@triniti/acme-schemas/acme/canvas/request/SearchPagesRequestV1';
import '@triniti/acme-schemas/acme/canvas/request/SearchPagesResponseV1';
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
import '@triniti/acme-schemas/acme/curator/node/CardDeckWidgetV1';
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
import '@triniti/acme-schemas/acme/dam/command/CreateAssetV1';
import '@triniti/acme-schemas/acme/dam/command/DeleteAssetV1';
import '@triniti/acme-schemas/acme/dam/command/ExpireAssetV1';
import '@triniti/acme-schemas/acme/dam/command/LinkAssetsV1';
import '@triniti/acme-schemas/acme/dam/command/PatchAssetsV1';
import '@triniti/acme-schemas/acme/dam/command/ReorderGalleryAssetsV1';
import '@triniti/acme-schemas/acme/dam/command/UnlinkAssetsV1';
import '@triniti/acme-schemas/acme/dam/command/UpdateAssetV1';
import '@triniti/acme-schemas/acme/dam/event/AssetCreatedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetDeletedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetExpiredV1';
import '@triniti/acme-schemas/acme/dam/event/AssetLinkedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetPatchedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetUnlinkedV1';
import '@triniti/acme-schemas/acme/dam/event/AssetUpdatedV1';
import '@triniti/acme-schemas/acme/dam/event/GalleryAssetReorderedV1';
import '@triniti/acme-schemas/acme/dam/node/ArchiveAssetV1';
import '@triniti/acme-schemas/acme/dam/node/AudioAssetV1';
import '@triniti/acme-schemas/acme/dam/node/CodeAssetV1';
import '@triniti/acme-schemas/acme/dam/node/DocumentAssetV1';
import '@triniti/acme-schemas/acme/dam/node/ImageAssetV1';
import '@triniti/acme-schemas/acme/dam/node/UnknownAssetV1';
import '@triniti/acme-schemas/acme/dam/node/VideoAssetV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetHistoryRequestV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetHistoryResponseV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetRequestV1';
import '@triniti/acme-schemas/acme/dam/request/GetAssetResponseV1';
import '@triniti/acme-schemas/acme/dam/request/GetUploadUrlsRequestV1';
import '@triniti/acme-schemas/acme/dam/request/GetUploadUrlsResponseV1';
import '@triniti/acme-schemas/acme/dam/request/SearchAssetsRequestV1';
import '@triniti/acme-schemas/acme/dam/request/SearchAssetsResponseV1';
import '@triniti/acme-schemas/acme/iam/command/CreateAppV1';
import '@triniti/acme-schemas/acme/iam/command/CreateRoleV1';
import '@triniti/acme-schemas/acme/iam/command/CreateUserV1';
import '@triniti/acme-schemas/acme/iam/command/DeleteAppV1';
import '@triniti/acme-schemas/acme/iam/command/DeleteRoleV1';
import '@triniti/acme-schemas/acme/iam/command/DeleteUserV1';
import '@triniti/acme-schemas/acme/iam/command/GrantRolesToAppV1';
import '@triniti/acme-schemas/acme/iam/command/GrantRolesToUserV1';
import '@triniti/acme-schemas/acme/iam/command/PatchUserV1';
import '@triniti/acme-schemas/acme/iam/command/PatchUsersV1';
import '@triniti/acme-schemas/acme/iam/command/RevokeRolesFromAppV1';
import '@triniti/acme-schemas/acme/iam/command/RevokeRolesFromUserV1';
import '@triniti/acme-schemas/acme/iam/command/UpdateAppV1';
import '@triniti/acme-schemas/acme/iam/command/UpdateRoleV1';
import '@triniti/acme-schemas/acme/iam/command/UpdateUserV1';
import '@triniti/acme-schemas/acme/iam/event/AppCreatedV1';
import '@triniti/acme-schemas/acme/iam/event/AppDeletedV1';
import '@triniti/acme-schemas/acme/iam/event/AppRolesGrantedV1';
import '@triniti/acme-schemas/acme/iam/event/AppRolesRevokedV1';
import '@triniti/acme-schemas/acme/iam/event/AppUpdatedV1';
import '@triniti/acme-schemas/acme/iam/event/RoleCreatedV1';
import '@triniti/acme-schemas/acme/iam/event/RoleDeletedV1';
import '@triniti/acme-schemas/acme/iam/event/RoleUpdatedV1';
import '@triniti/acme-schemas/acme/iam/event/UserCreatedV1';
import '@triniti/acme-schemas/acme/iam/event/UserDeletedV1';
import '@triniti/acme-schemas/acme/iam/event/UserPatchedV1';
import '@triniti/acme-schemas/acme/iam/event/UserRolesGrantedV1';
import '@triniti/acme-schemas/acme/iam/event/UserRolesRevokedV1';
import '@triniti/acme-schemas/acme/iam/event/UserUpdatedV1';
import '@triniti/acme-schemas/acme/iam/node/AlexaAppV1';
import '@triniti/acme-schemas/acme/iam/node/AndroidAppV1';
import '@triniti/acme-schemas/acme/iam/node/AppleNewsAppV1';
import '@triniti/acme-schemas/acme/iam/node/BrowserAppV1';
import '@triniti/acme-schemas/acme/iam/node/EmailAppV1';
import '@triniti/acme-schemas/acme/iam/node/IosAppV1';
import '@triniti/acme-schemas/acme/iam/node/RoleV1';
import '@triniti/acme-schemas/acme/iam/node/SlackAppV1';
import '@triniti/acme-schemas/acme/iam/node/SmsAppV1';
import '@triniti/acme-schemas/acme/iam/node/UserV1';
import '@triniti/acme-schemas/acme/iam/request/GetAllAppsRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetAllAppsResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetAppHistoryRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetAppHistoryResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetAppRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetAppResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleHistoryRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleHistoryResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleResponseV1';
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
import '@triniti/acme-schemas/acme/news/command/LockArticleV1';
import '@triniti/acme-schemas/acme/news/command/MarkArticleAsDraftV1';
import '@triniti/acme-schemas/acme/news/command/MarkArticleAsPendingV1';
import '@triniti/acme-schemas/acme/news/command/PublishArticleV1';
import '@triniti/acme-schemas/acme/news/command/RenameArticleV1';
import '@triniti/acme-schemas/acme/news/command/UnlockArticleV1';
import '@triniti/acme-schemas/acme/news/command/UnpublishArticleV1';
import '@triniti/acme-schemas/acme/news/command/UpdateArticleV1';
import '@triniti/acme-schemas/acme/news/event/ArticleCreatedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleDeletedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleExpiredV1';
import '@triniti/acme-schemas/acme/news/event/ArticleLockedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/news/event/ArticleMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/news/event/ArticlePublishedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleRenamedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleScheduledV1';
import '@triniti/acme-schemas/acme/news/event/ArticleUnlockedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleUnpublishedV1';
import '@triniti/acme-schemas/acme/news/event/ArticleUpdatedV1';
import '@triniti/acme-schemas/acme/news/node/ArticleV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleHistoryRequestV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleHistoryResponseV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleRequestV1';
import '@triniti/acme-schemas/acme/news/request/GetArticleResponseV1';
import '@triniti/acme-schemas/acme/news/request/SearchArticlesRequestV1';
import '@triniti/acme-schemas/acme/news/request/SearchArticlesResponseV1';
import '@triniti/acme-schemas/acme/notify/command/CreateNotificationV1';
import '@triniti/acme-schemas/acme/notify/command/DeleteNotificationV1';
import '@triniti/acme-schemas/acme/notify/command/SendNotificationV1';
import '@triniti/acme-schemas/acme/notify/command/UpdateNotificationV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationCreatedV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationDeletedV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationFailedV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationSentV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationUpdatedV1';
import '@triniti/acme-schemas/acme/notify/node/AlexaNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/AndroidNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/AppleNewsNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/BrowserNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/EmailNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/IosNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/SlackNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/SmsNotificationV1';
import '@triniti/acme-schemas/acme/notify/request/GetNotificationHistoryRequestV1';
import '@triniti/acme-schemas/acme/notify/request/GetNotificationHistoryResponseV1';
import '@triniti/acme-schemas/acme/notify/request/GetNotificationRequestV1';
import '@triniti/acme-schemas/acme/notify/request/GetNotificationResponseV1';
import '@triniti/acme-schemas/acme/notify/request/SearchNotificationsRequestV1';
import '@triniti/acme-schemas/acme/notify/request/SearchNotificationsResponseV1';
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
import '@triniti/acme-schemas/acme/ovp/request/GetVideoHistoryRequestV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoHistoryResponseV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoRequestV1';
import '@triniti/acme-schemas/acme/ovp/request/GetVideoResponseV1';
import '@triniti/acme-schemas/acme/ovp/request/SearchVideosRequestV1';
import '@triniti/acme-schemas/acme/ovp/request/SearchVideosResponseV1';
import '@triniti/acme-schemas/acme/people/command/CreatePersonV1';
import '@triniti/acme-schemas/acme/people/command/DeletePersonV1';
import '@triniti/acme-schemas/acme/people/command/RenamePersonV1';
import '@triniti/acme-schemas/acme/people/command/UpdatePersonV1';
import '@triniti/acme-schemas/acme/people/event/PersonCreatedV1';
import '@triniti/acme-schemas/acme/people/event/PersonDeletedV1';
import '@triniti/acme-schemas/acme/people/event/PersonRenamedV1';
import '@triniti/acme-schemas/acme/people/event/PersonUpdatedV1';
import '@triniti/acme-schemas/acme/people/node/PersonV1';
import '@triniti/acme-schemas/acme/people/request/GetPersonHistoryRequestV1';
import '@triniti/acme-schemas/acme/people/request/GetPersonHistoryResponseV1';
import '@triniti/acme-schemas/acme/people/request/GetPersonRequestV1';
import '@triniti/acme-schemas/acme/people/request/GetPersonResponseV1';
import '@triniti/acme-schemas/acme/people/request/SearchPeopleRequestV1';
import '@triniti/acme-schemas/acme/people/request/SearchPeopleResponseV1';
import '@triniti/acme-schemas/acme/sys/command/CreatePicklistV1';
import '@triniti/acme-schemas/acme/sys/command/CreateRedirectV1';
import '@triniti/acme-schemas/acme/sys/command/DeletePicklistV1';
import '@triniti/acme-schemas/acme/sys/command/DeleteRedirectV1';
import '@triniti/acme-schemas/acme/sys/command/UpdatePicklistV1';
import '@triniti/acme-schemas/acme/sys/command/UpdateRedirectV1';
import '@triniti/acme-schemas/acme/sys/event/PicklistCreatedV1';
import '@triniti/acme-schemas/acme/sys/event/PicklistDeletedV1';
import '@triniti/acme-schemas/acme/sys/event/PicklistUpdatedV1';
import '@triniti/acme-schemas/acme/sys/event/RedirectCreatedV1';
import '@triniti/acme-schemas/acme/sys/event/RedirectDeletedV1';
import '@triniti/acme-schemas/acme/sys/event/RedirectUpdatedV1';
import '@triniti/acme-schemas/acme/sys/node/PicklistV1';
import '@triniti/acme-schemas/acme/sys/node/RedirectV1';
import '@triniti/acme-schemas/acme/sys/request/GetPicklistHistoryRequestV1';
import '@triniti/acme-schemas/acme/sys/request/GetPicklistHistoryResponseV1';
import '@triniti/acme-schemas/acme/sys/request/GetPicklistRequestV1';
import '@triniti/acme-schemas/acme/sys/request/GetPicklistResponseV1';
import '@triniti/acme-schemas/acme/sys/request/GetRedirectHistoryRequestV1';
import '@triniti/acme-schemas/acme/sys/request/GetRedirectHistoryResponseV1';
import '@triniti/acme-schemas/acme/sys/request/GetRedirectRequestV1';
import '@triniti/acme-schemas/acme/sys/request/GetRedirectResponseV1';
import '@triniti/acme-schemas/acme/sys/request/ListAllPicklistsRequestV1';
import '@triniti/acme-schemas/acme/sys/request/ListAllPicklistsResponseV1';
import '@triniti/acme-schemas/acme/sys/request/SearchRedirectsRequestV1';
import '@triniti/acme-schemas/acme/sys/request/SearchRedirectsResponseV1';
import '@triniti/acme-schemas/acme/taxonomy/command/CreateCategoryV1';
import '@triniti/acme-schemas/acme/taxonomy/command/CreateChannelV1';
import '@triniti/acme-schemas/acme/taxonomy/command/DeleteCategoryV1';
import '@triniti/acme-schemas/acme/taxonomy/command/DeleteChannelV1';
import '@triniti/acme-schemas/acme/taxonomy/command/RenameCategoryV1';
import '@triniti/acme-schemas/acme/taxonomy/command/RenameChannelV1';
import '@triniti/acme-schemas/acme/taxonomy/command/UpdateCategoryV1';
import '@triniti/acme-schemas/acme/taxonomy/command/UpdateChannelV1';
import '@triniti/acme-schemas/acme/taxonomy/event/CategoryCreatedV1';
import '@triniti/acme-schemas/acme/taxonomy/event/CategoryDeletedV1';
import '@triniti/acme-schemas/acme/taxonomy/event/CategoryRenamedV1';
import '@triniti/acme-schemas/acme/taxonomy/event/CategoryUpdatedV1';
import '@triniti/acme-schemas/acme/taxonomy/event/ChannelCreatedV1';
import '@triniti/acme-schemas/acme/taxonomy/event/ChannelDeletedV1';
import '@triniti/acme-schemas/acme/taxonomy/event/ChannelRenamedV1';
import '@triniti/acme-schemas/acme/taxonomy/event/ChannelUpdatedV1';
import '@triniti/acme-schemas/acme/taxonomy/node/CategoryV1';
import '@triniti/acme-schemas/acme/taxonomy/node/ChannelV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetAllChannelsRequestV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetAllChannelsResponseV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetCategoryHistoryRequestV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetCategoryHistoryResponseV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetCategoryRequestV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetCategoryResponseV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetChannelHistoryRequestV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetChannelHistoryResponseV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetChannelRequestV1';
import '@triniti/acme-schemas/acme/taxonomy/request/GetChannelResponseV1';
import '@triniti/acme-schemas/acme/taxonomy/request/SearchCategoriesRequestV1';
import '@triniti/acme-schemas/acme/taxonomy/request/SearchCategoriesResponseV1';
import '@triniti/acme-schemas/acme/taxonomy/request/SuggestHashtagsRequestV1';
import '@triniti/acme-schemas/acme/taxonomy/request/SuggestHashtagsResponseV1';
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
import '@gdbots/schemas/gdbots/forms/field/SexualOrientationFieldV1';
import '@gdbots/schemas/gdbots/forms/field/ShortTextFieldV1';
import '@gdbots/schemas/gdbots/forms/field/SkypeUserFieldV1';
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
import '@triniti/schemas/triniti/curator/WidgetRenderContextV1';
import '@triniti/schemas/triniti/notify/NotifierResultV1';
import '@triniti/schemas/triniti/ovp.kaltura/CaptionV1';
import '@triniti/schemas/triniti/ovp.kaltura/EntryV1';
import '@triniti/schemas/triniti/ovp.kaltura/FlavorV1';
import '@triniti/schemas/triniti/ovp.kaltura/command/SyncEntryV1';

export default MessageResolver;
