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
    'acme:canvas:block:article-block' => 'Acme\Schemas\Canvas\Block\ArticleBlockV1',
    'acme:canvas:block:audio-block' => 'Acme\Schemas\Canvas\Block\AudioBlockV1',
    'acme:canvas:block:code-block' => 'Acme\Schemas\Canvas\Block\CodeBlockV1',
    'acme:canvas:block:document-block' => 'Acme\Schemas\Canvas\Block\DocumentBlockV1',
    'acme:canvas:block:facebook-post-block' => 'Acme\Schemas\Canvas\Block\FacebookPostBlockV1',
    'acme:canvas:block:facebook-video-block' => 'Acme\Schemas\Canvas\Block\FacebookVideoBlockV1',
    'acme:canvas:block:gallery-block' => 'Acme\Schemas\Canvas\Block\GalleryBlockV1',
    'acme:canvas:block:google-map-block' => 'Acme\Schemas\Canvas\Block\GoogleMapBlockV1',
    'acme:canvas:block:heading-block' => 'Acme\Schemas\Canvas\Block\HeadingBlockV1',
    'acme:canvas:block:iframe-block' => 'Acme\Schemas\Canvas\Block\IframeBlockV1',
    'acme:canvas:block:image-block' => 'Acme\Schemas\Canvas\Block\ImageBlockV1',
    'acme:canvas:block:imgur-post-block' => 'Acme\Schemas\Canvas\Block\ImgurPostBlockV1',
    'acme:canvas:block:instagram-media-block' => 'Acme\Schemas\Canvas\Block\InstagramMediaBlockV1',
    'acme:canvas:block:pinterest-board-block' => 'Acme\Schemas\Canvas\Block\PinterestBoardBlockV1',
    'acme:canvas:block:pinterest-pin-block' => 'Acme\Schemas\Canvas\Block\PinterestPinBlockV1',
    'acme:canvas:block:pinterest-profile-block' => 'Acme\Schemas\Canvas\Block\PinterestProfileBlockV1',
    'acme:canvas:block:poll-block' => 'Acme\Schemas\Canvas\Block\PollBlockV1',
    'acme:canvas:block:poll-grid-block' => 'Acme\Schemas\Canvas\Block\PollGridBlockV1',
    'acme:canvas:block:pull-quote-block' => 'Acme\Schemas\Canvas\Block\PullQuoteBlockV1',
    'acme:canvas:block:quote-block' => 'Acme\Schemas\Canvas\Block\QuoteBlockV1',
    'acme:canvas:block:soundcloud-audio-block' => 'Acme\Schemas\Canvas\Block\SoundcloudAudioBlockV1',
    'acme:canvas:block:text-block' => 'Acme\Schemas\Canvas\Block\TextBlockV1',
    'acme:canvas:block:twitter-collection-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterCollectionTimelineBlockV1',
    'acme:canvas:block:twitter-follow-button-block' => 'Acme\Schemas\Canvas\Block\TwitterFollowButtonBlockV1',
    'acme:canvas:block:twitter-hashtag-button-block' => 'Acme\Schemas\Canvas\Block\TwitterHashtagButtonBlockV1',
    'acme:canvas:block:twitter-likes-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterLikesTimelineBlockV1',
    'acme:canvas:block:twitter-list-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterListTimelineBlockV1',
    'acme:canvas:block:twitter-mention-button-block' => 'Acme\Schemas\Canvas\Block\TwitterMentionButtonBlockV1',
    'acme:canvas:block:twitter-moment-block' => 'Acme\Schemas\Canvas\Block\TwitterMomentBlockV1',
    'acme:canvas:block:twitter-search-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterSearchTimelineBlockV1',
    'acme:canvas:block:twitter-tweet-block' => 'Acme\Schemas\Canvas\Block\TwitterTweetBlockV1',
    'acme:canvas:block:twitter-user-timeline-block' => 'Acme\Schemas\Canvas\Block\TwitterUserTimelineBlockV1',
    'acme:canvas:block:twitter-video-block' => 'Acme\Schemas\Canvas\Block\TwitterVideoBlockV1',
    'acme:canvas:block:update-block' => 'Acme\Schemas\Canvas\Block\UpdateBlockV1',
    'acme:canvas:block:vevo-video-block' => 'Acme\Schemas\Canvas\Block\VevoVideoBlockV1',
    'acme:canvas:block:video-block' => 'Acme\Schemas\Canvas\Block\VideoBlockV1',
    'acme:canvas:block:vimeo-video-block' => 'Acme\Schemas\Canvas\Block\VimeoVideoBlockV1',
    'acme:canvas:block:youtube-playlist-block' => 'Acme\Schemas\Canvas\Block\YoutubePlaylistBlockV1',
    'acme:canvas:block:youtube-video-block' => 'Acme\Schemas\Canvas\Block\YoutubeVideoBlockV1',
    'triniti:canvas:block:render-context' => 'Triniti\Schemas\Canvas\Block\RenderContextV1',
]);