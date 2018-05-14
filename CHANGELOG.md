# CHANGELOG

## v0.1.9
* __Add Schemas:__
  * `acme:dam:mixin:patch-assets`


## v0.1.9
* __Add Schemas:__
  * `acme:canvas:block:document-block`
  * `acme:dam:command:patch-assets`
  * `acme:dam:event:asset-patched`
  * `acme:sys:command:create-picklist`
  * `acme:sys:command:delete-picklist`
  * `acme:sys:command:update-picklist`
  * `acme:sys:event:picklist-created`
  * `acme:sys:event:picklist-deleted`
  * `acme:sys:event:picklist-updated`
  * `acme:sys:node:picklist`
  * `acme:sys:request:get-picklist-history-request`
  * `acme:sys:request:get-picklist-history-response`
  * `acme:sys:request:get-picklist-request`
  * `acme:sys:request:get-picklist-response`
  * `acme:sys:request:list-all-picklists-request`
  * `acme:sys:request:list-all-picklists-response`


## v0.1.8
* __Add Schemas:__
  * `acme:canvas:block:soundcloud-audio-block`
  * `acme:canvas:block:vimeo-video-block`
  * `acme:taxonomy:request:suggest-hashtags-request`
  * `acme:taxonomy:request:suggest-hashtags-response`


## v0.1.7
* __Add Schemas:__
  * `acme:canvas:block:article-block`
  * `acme:canvas:block:audio-block`
  * `acme:canvas:block:update-block`
* __Remove Schemas:__ _(not used)_ 
  * `acme:curator:command:rename-promotion`
  * `acme:curator:command:rename-teaser`
  * `acme:iam:request:get-role-batch-request`
  * `acme:iam:request:get-role-batch-response`
  * `acme:iam:request:get-user-batch-request`
  * `acme:iam:request:get-user-batch-response`


## v0.1.6
* __Add Schemas:__
  * `acme:curator:node:category-teaser`
  * `acme:curator:node:channel-teaser`
  * `acme:curator:node:link-teaser`
  * `acme:curator:node:page-teaser`
  * `acme:curator:node:person-teaser`
  * `acme:curator:node:poll-teaser`
  * `acme:dam:command:link-assets`
  * `acme:dam:command:unlink-assets`
  * `acme:dam:event:asset-linked`
  * `acme:dam:event:asset-unlinked`


## v0.1.5
* __Add Schemas:__
  * `acme:canvas:block:gallery-block`
  * `acme:canvas:block:image-block`
  * `acme:canvas:block:twitter-follow-button-block`
  * `acme:canvas:block:twitter-hashtag-button-block`
  * `acme:canvas:block:twitter-likes-timeline-block`
  * `acme:canvas:block:twitter-mention-button-block`
  * `acme:canvas:block:video-block`
  * `acme:curator:command:create-gallery`
  * `acme:curator:command:create-promotion`
  * `acme:curator:command:create-teaser`
  * `acme:curator:command:create-timeline`
  * `acme:curator:command:create-widget`
  * `acme:curator:command:delete-gallery`
  * `acme:curator:command:delete-promotion`
  * `acme:curator:command:delete-teaser`
  * `acme:curator:command:delete-timeline`
  * `acme:curator:command:delete-widget`
  * `acme:curator:command:expire-gallery`
  * `acme:curator:command:expire-promotion`
  * `acme:curator:command:expire-teaser`
  * `acme:curator:command:expire-timeline`
  * `acme:curator:command:mark-gallery-as-draft`
  * `acme:curator:command:mark-gallery-as-pending`
  * `acme:curator:command:mark-promotion-as-draft`
  * `acme:curator:command:mark-promotion-as-pending`
  * `acme:curator:command:mark-teaser-as-draft`
  * `acme:curator:command:mark-teaser-as-pending`
  * `acme:curator:command:mark-timeline-as-draft`
  * `acme:curator:command:mark-timeline-as-pending`
  * `acme:curator:command:publish-gallery`
  * `acme:curator:command:publish-promotion`
  * `acme:curator:command:publish-teaser`
  * `acme:curator:command:publish-timeline`
  * `acme:curator:command:rename-gallery`
  * `acme:curator:command:rename-timeline`
  * `acme:curator:command:unpublish-gallery`
  * `acme:curator:command:unpublish-promotion`
  * `acme:curator:command:unpublish-teaser`
  * `acme:curator:command:unpublish-timeline`
  * `acme:curator:command:update-gallery`
  * `acme:curator:command:update-promotion`
  * `acme:curator:command:update-teaser`
  * `acme:curator:command:update-timeline`
  * `acme:curator:command:update-widget`
  * `acme:curator:event:gallery-created`
  * `acme:curator:event:gallery-deleted`
  * `acme:curator:event:gallery-expired`
  * `acme:curator:event:gallery-marked-as-draft`
  * `acme:curator:event:gallery-marked-as-pending`
  * `acme:curator:event:gallery-published`
  * `acme:curator:event:gallery-renamed`
  * `acme:curator:event:gallery-scheduled`
  * `acme:curator:event:gallery-unpublished`
  * `acme:curator:event:gallery-updated`
  * `acme:curator:event:promotion-created`
  * `acme:curator:event:promotion-deleted`
  * `acme:curator:event:promotion-expired`
  * `acme:curator:event:promotion-marked-as-draft`
  * `acme:curator:event:promotion-marked-as-pending`
  * `acme:curator:event:promotion-published`
  * `acme:curator:event:promotion-scheduled`
  * `acme:curator:event:promotion-unpublished`
  * `acme:curator:event:promotion-updated`
  * `acme:curator:event:teaser-created`
  * `acme:curator:event:teaser-deleted`
  * `acme:curator:event:teaser-expired`
  * `acme:curator:event:teaser-marked-as-draft`
  * `acme:curator:event:teaser-marked-as-pending`
  * `acme:curator:event:teaser-published`
  * `acme:curator:event:teaser-scheduled`
  * `acme:curator:event:teaser-unpublished`
  * `acme:curator:event:teaser-updated`
  * `acme:curator:event:timeline-created`
  * `acme:curator:event:timeline-deleted`
  * `acme:curator:event:timeline-expired`
  * `acme:curator:event:timeline-marked-as-draft`
  * `acme:curator:event:timeline-marked-as-pending`
  * `acme:curator:event:timeline-published`
  * `acme:curator:event:timeline-renamed`
  * `acme:curator:event:timeline-scheduled`
  * `acme:curator:event:timeline-unpublished`
  * `acme:curator:event:timeline-updated`
  * `acme:curator:event:widget-created`
  * `acme:curator:event:widget-deleted`
  * `acme:curator:event:widget-updated`
  * `acme:curator:node:article-teaser`
  * `acme:curator:node:carousel-widget`
  * `acme:curator:node:gallery-teaser`
  * `acme:curator:node:gallery`
  * `acme:curator:node:promotion`
  * `acme:curator:node:timeline-teaser`
  * `acme:curator:node:timeline`
  * `acme:curator:node:video-teaser`
  * `acme:curator:node:youtube-video-teaser`
  * `acme:curator:request:get-gallery-history-request`
  * `acme:curator:request:get-gallery-history-response`
  * `acme:curator:request:get-gallery-request`
  * `acme:curator:request:get-gallery-response`
  * `acme:curator:request:get-promotion-history-request`
  * `acme:curator:request:get-promotion-history-response`
  * `acme:curator:request:get-promotion-request`
  * `acme:curator:request:get-promotion-response`
  * `acme:curator:request:get-teaser-history-request`
  * `acme:curator:request:get-teaser-history-response`
  * `acme:curator:request:get-teaser-request`
  * `acme:curator:request:get-teaser-response`
  * `acme:curator:request:get-timeline-history-request`
  * `acme:curator:request:get-timeline-history-response`
  * `acme:curator:request:get-timeline-request`
  * `acme:curator:request:get-timeline-response`
  * `acme:curator:request:get-widget-history-request`
  * `acme:curator:request:get-widget-history-response`
  * `acme:curator:request:get-widget-request`
  * `acme:curator:request:get-widget-response`
  * `acme:curator:request:search-galleries-request`
  * `acme:curator:request:search-galleries-response`
  * `acme:curator:request:search-promotions-request`
  * `acme:curator:request:search-promotions-response`
  * `acme:curator:request:search-teasers-request`
  * `acme:curator:request:search-teasers-response`
  * `acme:curator:request:search-timelines-request`
  * `acme:curator:request:search-timelines-response`
  * `acme:curator:request:search-widgets-request`
  * `acme:curator:request:search-widgets-response`


## v0.1.4
* __Add Schemas:__
  * `acme:dam:command:create-asset`
  * `acme:dam:command:delete-asset`
  * `acme:dam:command:expire-asset`
  * `acme:dam:command:update-asset`
  * `acme:dam:event:asset-created`
  * `acme:dam:event:asset-deleted`
  * `acme:dam:event:asset-expired`
  * `acme:dam:event:asset-updated`
  * `acme:dam:node:archive-asset`
  * `acme:dam:node:audio-asset`
  * `acme:dam:node:code-asset`
  * `acme:dam:node:document-asset`
  * `acme:dam:node:image-asset`
  * `acme:dam:node:unknown-asset`
  * `acme:dam:node:video-asset`
  * `acme:dam:request:get-asset-history-request`
  * `acme:dam:request:get-asset-history-response`
  * `acme:dam:request:get-asset-request`
  * `acme:dam:request:get-asset-response`
  * `acme:dam:request:get-upload-urls-request`
  * `acme:dam:request:get-upload-urls-response`
  * `acme:dam:request:search-assets-request`
  * `acme:dam:request:search-assets-response`
  * `acme:people:command:create-person`
  * `acme:people:command:delete-person`
  * `acme:people:command:rename-person`
  * `acme:people:command:update-person`
  * `acme:people:event:person-created`
  * `acme:people:event:person-deleted`
  * `acme:people:event:person-renamed`
  * `acme:people:event:person-updated`
  * `acme:people:node:person`
  * `acme:people:request:get-person-history-request`
  * `acme:people:request:get-person-history-response`
  * `acme:people:request:get-person-request`
  * `acme:people:request:get-person-response`
  * `acme:people:request:search-people-request`
  * `acme:people:request:search-people-response`
  * `acme:taxonomy:command:create-category`
  * `acme:taxonomy:command:create-channel`
  * `acme:taxonomy:command:delete-category`
  * `acme:taxonomy:command:delete-channel`
  * `acme:taxonomy:command:rename-category`
  * `acme:taxonomy:command:rename-channel`
  * `acme:taxonomy:command:update-category`
  * `acme:taxonomy:command:update-channel`
  * `acme:taxonomy:event:category-created`
  * `acme:taxonomy:event:category-deleted`
  * `acme:taxonomy:event:category-renamed`
  * `acme:taxonomy:event:category-updated`
  * `acme:taxonomy:event:channel-created`
  * `acme:taxonomy:event:channel-deleted`
  * `acme:taxonomy:event:channel-renamed`
  * `acme:taxonomy:event:channel-updated`
  * `acme:taxonomy:node:category`
  * `acme:taxonomy:node:channel`
  * `acme:taxonomy:request:get-all-channels-request`
  * `acme:taxonomy:request:get-all-channels-response`
  * `acme:taxonomy:request:get-category-history-request`
  * `acme:taxonomy:request:get-category-history-response`
  * `acme:taxonomy:request:get-category-request`
  * `acme:taxonomy:request:get-category-response`
  * `acme:taxonomy:request:get-channel-history-request`
  * `acme:taxonomy:request:get-channel-history-response`
  * `acme:taxonomy:request:get-channel-request`
  * `acme:taxonomy:request:get-channel-response`
  * `acme:taxonomy:request:search-categories-request`
  * `acme:taxonomy:request:search-categories-response`
* __Remove Schemas:__ _(not used and probably won't be needed due to lazy loading and derefs)_
  * `acme:apollo:mixin:get-poll-batch-request`
  * `acme:apollo:mixin:get-poll-batch-response`
  * `acme:canvas:mixin:get-page-batch-request`
  * `acme:canvas:mixin:get-page-batch-response`
  * `acme:news:mixin:get-article-batch-request`
  * `acme:news:mixin:get-article-batch-response`
  * `acme:ovp:mixin:get-video-batch-request`
  * `acme:ovp:mixin:get-video-batch-response`


## v0.1.3
* __Add Schemas:__
  * `acme:apollo::poll-answer`
  * `acme:apollo:command:cast-vote`
  * `acme:apollo:command:create-poll`
  * `acme:apollo:command:delete-poll`
  * `acme:apollo:command:expire-poll`
  * `acme:apollo:command:mark-poll-as-draft`
  * `acme:apollo:command:mark-poll-as-pending`
  * `acme:apollo:command:publish-poll`
  * `acme:apollo:command:unpublish-poll`
  * `acme:apollo:command:update-poll`
  * `acme:apollo:event:poll-created`
  * `acme:apollo:event:poll-deleted`
  * `acme:apollo:event:poll-expired`
  * `acme:apollo:event:poll-marked-as-draft`
  * `acme:apollo:event:poll-marked-as-pending`
  * `acme:apollo:event:poll-published`
  * `acme:apollo:event:poll-scheduled`
  * `acme:apollo:event:poll-unpublished`
  * `acme:apollo:event:poll-updated`
  * `acme:apollo:event:vote-casted`
  * `acme:apollo:node:poll`
  * `acme:apollo:request:get-poll-batch-request`
  * `acme:apollo:request:get-poll-batch-response`
  * `acme:apollo:request:get-poll-history-request`
  * `acme:apollo:request:get-poll-history-response`
  * `acme:apollo:request:get-poll-request`
  * `acme:apollo:request:get-poll-response`
  * `acme:apollo:request:search-polls-request`
  * `acme:apollo:request:search-polls-response`


## v0.1.2
* __Add Schemas:__
  * `acme:canvas:block:code-block`
  * `acme:canvas:block:facebook-post-block`
  * `acme:canvas:block:facebook-video-block`
  * `acme:canvas:block:iframe-block`
  * `acme:canvas:block:imgur-post-block`
  * `acme:canvas:block:instagram-media-block`
  * `acme:canvas:block:pinterest-board-block`
  * `acme:canvas:block:pinterest-pin-block`
  * `acme:canvas:block:pinterest-profile-block`
  * `acme:canvas:block:twitter-collection-timeline-block`
  * `acme:canvas:block:twitter-list-timeline-block`
  * `acme:canvas:block:twitter-moment-block`
  * `acme:canvas:block:twitter-search-timeline-block`
  * `acme:canvas:block:twitter-tweet-block`
  * `acme:canvas:block:twitter-user-timeline-block`
  * `acme:canvas:block:twitter-video-block`
  * `acme:canvas:block:vevo-video-block`
  * `acme:canvas:block:youtube-playlist-block`
  * `acme:canvas:block:youtube-video-block`


## v0.1.1
* __Add Schemas:__
  * `acme:canvas:command:rename-page`
  * `acme:canvas:event:page-renamed`
  * `acme:news:command:rename-article`
  * `acme:news:event:article-renamed`
  * `acme:ovp:command:rename-video`
  * `acme:ovp:event:video-renamed`


## v0.1.0
* Initial version.
