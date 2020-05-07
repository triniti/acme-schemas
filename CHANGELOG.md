# CHANGELOG


## v1.1.7
* Use `triniti/schemas` v1.1.10.
* __Modify Schemas:__
  * `acme:dam:node:video-asset` patch revision `1-0-1`
    * Add mixin `triniti:ovp:mixin:transcodeable:v1`
    * Add mixin `triniti:ovp:mixin:transcribable:v1`


## v1.1.6
* Use `gdbots/schemas` v1.6.5.
* Use `triniti/schemas` v1.1.8.
* __Add Schemas:__
  * `acme:canvas:block:tumblr-post-block`


## v1.1.5
* Use `triniti/schemas` v1.1.6.
* __Modify Schemas:__
  * `acme:ovp:node:video` patch revision `1-0-2`
    * Add mixin `triniti:ovp.jwplayer:mixin:has-media:v1`


## v1.1.4
* Use `triniti/schemas` v1.1.5.


## v1.1.3
* Use `gdbots/schemas` v1.6.3.
* Use `triniti/schemas` v1.1.4.


## v1.1.2
* Use `gdbots/schemas` v1.6.2.
* Use `triniti/schemas` v1.1.3.
* __Modify Schemas:__
  * `acme:ovp:node:video` patch revision `1-0-1`
    * Add mixin `triniti:ovp.medialive:mixin:has-channel:v1`


## v1.1.1
* Use `triniti/schemas` v1.1.2.
* __Add Schemas:__
  * `acme:canvas:block:spotify-embed-block`
  * `acme:canvas:block:tiktok-embed-block`


## v1.1.0
* Use `gdbots/schemas` v1.6.0.
* Use `triniti/schemas` v1.1.0.
* __Add Schemas:__
  * `acme:curator:node:asset-teaser`


## v1.0.6
* Use `triniti/schemas` v1.0.7.
* __Add Schemas:__
  * `acme:canvas:block:divider-block`
  * `acme:curator:command:remove-teaser-slotting`
  * `acme:curator:event:teaser-slotting-removed`
* __Modify Schemas:__
  * `acme:news:node:article` patch revision `1-0-1`
    * Add mixin `triniti:curator:mixin:has-related-teasers:v1`


## v1.0.5
* Use `triniti/schemas` v1.0.5.


## v1.0.4
* Use `triniti/schemas` v1.0.4.


## v1.0.3
* Use `gdbots/schemas` v1.5.13.
* Use `triniti/schemas` v1.0.3.


## v1.0.2
* Use `triniti/schemas` v1.0.2.
* __Add Schemas:__
  * `acme:curator:command:update-gallery-image-count`
  * `acme:curator:event:gallery-image-count-updated`


## v1.0.1
* Use `triniti/schemas` v1.0.1.


## v1.0.0
* Peg stable version.


## v0.10.8
* Use `triniti/schemas` v0.15.7.


## v0.10.7
* Use `gdbots/schemas` v1.5.12.
* Use `triniti/schemas` v0.15.6.


## v0.10.6
* Use `gdbots/schemas` v1.5.11.
* Use `triniti/schemas` v0.15.5.


## v0.10.5
* Use `triniti/schemas` v0.15.4.


## v0.10.4
* Use `triniti/schemas` v0.15.3.


## v0.10.3
* Use `gdbots/schemas` v1.5.10.
* Use `triniti/schemas` v0.15.2.


## v0.10.2
* Use `gdbots/pbjc` v0.4.0 with optimized manifest for php.
* Use `gdbots/schemas` v1.5.9.


## v0.10.1
* Use `gdbots/schemas` v1.5.8.
* Use `triniti/schemas` v0.15.1.


## v0.10.0
* Use `triniti/schemas` v0.15.0.


## v0.9.0
* Use `triniti/schemas` v0.14.0.


## v0.8.2
* Use `triniti/schemas` v0.13.2.


## v0.8.1
* Use `triniti/schemas` v0.13.1.


## v0.8.0
__BREAKING CHANGES__

* Use `triniti/schemas` v0.13.0.


## v0.7.2
* Use `triniti/schemas` v0.12.3.
* __Add Schemas:__
  * `acme:news:command:collect-article-stats`
  * `acme:news:event:article-stats-collected`


## v0.7.1
* Use `triniti/schemas` v0.12.2.


## v0.7.0
__BREAKING CHANGES__

* Use `triniti/schemas` v0.12.1.
* __Add Schemas:__
  * `acme:apollo:node:poll-stats`
  * `acme:curator:node:alert-widget`
  * `acme:curator:node:gallery-widget`
  * `acme:curator:node:playlist-widget`
  * `acme:news:command:remove-article-slotting`
  * `acme:news:event:apple-news-article-synced`
  * `acme:news:event:article-slotting-removed`
  * `acme:news:node:article-stats`


## v0.6.1
* Use `triniti/schemas` v0.11.1.
* __Add Schemas:__
  * `acme:canvas:block:spotify-track-block`


## v0.6.0
__BREAKING CHANGES__

* Use `triniti/schemas` v0.11.0.
* __Add Schemas:__
  * `acme:curator:node:ad-widget`
  * `acme:curator:node:media-list-widget`


## v0.5.0
__BREAKING CHANGES__

* Use `triniti/schemas` v0.10.0.
* __Add Schemas:__
  * `acme:curator:node:showtimes-widget`
  * `acme:curator:node:spotlight-widget`
* __Delete Schemas:__
  * `acme:curator:node:card-widget`


## v0.4.0
__BREAKING CHANGES__

* Use `triniti/schemas` v0.9.0.
* __Add Schemas:__
  * `acme:curator:node:card-widget`
  * `acme:curator:node:code-widget`
  * `acme:curator:node:hero-bar-widget`
  * `acme:curator:node:slider-widget`
  * `acme:curator:node:tag-cloud-widget`
  * `acme:curator:request:render-promotion-request`
  * `acme:curator:request:render-promotion-response`
  * `acme:curator:request:render-widget-request`
  * `acme:curator:request:render-widget-response`
* __Modify Schemas:__
  * `acme:curator:node:blogroll-widget`
    * Add mixin `triniti:curator:mixin:widget-has-search-request:v1`
  * `acme:curator:node:carousel-widget`
    * Add mixin `triniti:curator:mixin:widget-has-search-request:v1`
  * `acme:curator:node:gridler-widget`
    * Add mixin `triniti:curator:mixin:widget-has-search-request:v1`
  * `acme:curator:node:tetris-widget`
    * Add mixin `triniti:curator:mixin:widget-has-search-request:v1`
  * `acme:curator:request:search-galleries-request`
    * Add mixin `triniti:curator:mixin:widget-search-request:v1`
  * `acme:curator:request:search-galleries-response`
    * Add mixin `triniti:curator:mixin:widget-search-response:v1`
  * `acme:curator:request:search-teasers-response`
    * Add mixin `triniti:curator:mixin:widget-search-response:v1`
  * `acme:news:request:search-articles-response`
    * Add mixin `triniti:curator:mixin:widget-search-response:v1`
  * `acme:ovp:request:search-video-request`
    * Add mixin `triniti:curator:mixin:widget-search-request:v1`
  * `acme:ovp:request:search-video-response`
    * Add mixin `triniti:curator:mixin:widget-search-response:v1`
* __Delete Schemas:__
  * `acme:curator:node:card-deck-widget`


## v0.3.0
__BREAKING CHANGES__

* Use `triniti/schemas` v0.8.0.
* __Modify Schemas:__
  * `acme:curator:request:search-teasers-request`
    * Add mixin `triniti:curator:mixin:widget-search-request:v1`
  * `acme:dam:node:image-asset`
    * Add mixin `triniti:apollo:mixin:has-poll:v1`
  * `acme:news:request:search-articles-request`
    * Add mixin `triniti:curator:mixin:widget-search-request:v1`


## v0.2.0
__BREAKING CHANGES__

* Use `gdbots/schemas` v1.5.7 and `triniti/schemas` v0.7.0.
* __Delete Schemas:__
  * `acme:canvas:block:pinterest-board-block`
  * `acme:canvas:block:pinterest-profile-block`
  * `acme:canvas:block:twitter-collection-timeline-block`
  * `acme:canvas:block:twitter-follow-button-block`
  * `acme:canvas:block:twitter-hashtag-button-block`
  * `acme:canvas:block:twitter-likes-timeline-block`
  * `acme:canvas:block:twitter-list-timeline-block`
  * `acme:canvas:block:twitter-mention-button-block`
  * `acme:canvas:block:twitter-moment-block`
  * `acme:canvas:block:twitter-search-timeline-block`
  * `acme:canvas:block:twitter-user-timeline-block`
  * `acme:canvas:block:twitter-video-block`
  * `acme:canvas:block:vevo-video-block`


## v0.1.20
* Use `gdbots/schemas` v1.5.6 and `triniti/schemas` v0.6.5.
* __Add Schemas:__
  * `acme:curator:node:gridler-widget`
  * `acme:curator:node:tetris-widget`


## v0.1.19
* Use `gdbots/schemas` v1.5.5 and `triniti/schemas` v0.6.4.


## v0.1.18
* Use `triniti/schemas` v0.6.3.
* __Add Schemas:__
  * `acme:curator:command:sync-teaser`
* __Modify Schemas:__
  * `acme:curator:node:*-widget`
    * Add mixin `triniti:common:mixin:themeable:v1`
  * `acme:people:node:person`
    * Add mixin `triniti:canvas:mixin:has-blocks:v1`


## v0.1.17
* Use `triniti/schemas` v0.6.2.
* __Add Schemas:__
  * `acme:sys:commmand:create-flagset`
  * `acme:sys:commmand:delete-flagset`
  * `acme:sys:commmand:update-flagset`
  * `acme:sys:event:flagset-created`
  * `acme:sys:event:flagset-deleted`
  * `acme:sys:event:flagset-updated`
  * `acme:sys:node:flagset`
  * `acme:sys:request:get-flagset-history-request`
  * `acme:sys:request:get-flagset-history-response`
  * `acme:sys:request:get-flagset-request`
  * `acme:sys:request:get-flagset-response`
  * `acme:sys:request:list-all-flagsets-request`
  * `acme:sys:request:list-all-flagsets-response`
* __Modify Schemas:__
  * `acme:canvas:node:page`
    * Add mixin `triniti:sys:mixin:vanity-urlable:v1`
  * `acme:sys:request:get-redirect-response`
    * Add mixin `triniti:sys:mixin:get-redirect-response:v1`


## v0.1.16
* Use `triniti/schemas` v0.6.1.
* __Add Schemas:__
  * `acme:sys:commmand:create-redirect`
  * `acme:sys:commmand:delete-redirect`
  * `acme:sys:commmand:update-redirect`
  * `acme:sys:event:redirect-created`
  * `acme:sys:event:redirect-deleted`
  * `acme:sys:event:redirect-updated`
  * `acme:sys:node:redirect`
  * `acme:sys:request:get-redirect-history-request`
  * `acme:sys:request:get-redirect-history-response`
  * `acme:sys:request:get-redirect-request`
  * `acme:sys:request:get-redirect-response`
  * `acme:sys:request:search-redirects-request`
  * `acme:sys:request:search-redirects-response`


## v0.1.15
* Use `triniti/schemas` v0.6.0.
* __Modify Schemas:__
  * `acme:canvas:node:page`
    * Add mixin `triniti:common:mixin:swipeable:v1`
  * `acme:curator:node:*-teaser`
    * Add mixin `triniti:common:mixin:swipeable:v1`
  * `acme:news:node:article`
    * Add mixin `triniti:common:mixin:swipeable:v1`
  * `acme:ovp:node:video`
    * Add mixin `triniti:common:mixin:swipeable:v1`


## v0.1.14
* Use `triniti/schemas` v0.5.0.
* __Add Schemas:__
  * `acme:canvas:block:page-break-block`
* __Delete Schemas:__
  * `acme:canvas:block:pull-quote-block`


## v0.1.13
* __Add Schemas:__
  * `acme:curator:node:card-deck-widget`
  * `acme:iam:node:email-app`
  * `acme:notify:node:email-notification`
* __Modify Schemas:__
  * `acme:curator:node:*-teaser`
    * Add mixin `triniti:common:mixin:advertising:v1`
    * Add mixin `triniti:common:mixin:seo:v1`
    * Add mixin `triniti:common:mixin:themeable:v1`
* __Delete Schemas:__
  * `acme:canvas:block:update-block`


## v0.1.12
* __Add Schemas:__
  * `acme:curator:node:blogroll-widget`
  * `acme:dam:command:reorder-gallery-assets`
  * `acme:dam:event:gallery-asset-reordered`
* __Modify Schemas:__
  * `acme:canvas:node:page`
    * Add mixin `triniti:common:mixin:advertising:v1`
  * `acme:curator:node:gallery`
    * Add mixin `triniti:common:mixin:advertising:v1`
  * `acme:curator:node:timeline`
    * Add mixin `triniti:common:mixin:advertising:v1`
  * `acme:news:node:article`
    * Add mixin `triniti:common:mixin:advertising:v1`
  * `acme:ovp:node:video`
    * Add mixin `triniti:common:mixin:advertising:v1`
  * `acme:people:node:person`
    * Add mixin `triniti:common:mixin:advertising:v1`
  * `acme:taxonomy:node:category`
    * Add mixin `triniti:common:mixin:advertising:v1`
  * `acme:taxonomy:node:channel`
    * Add mixin `triniti:common:mixin:advertising:v1`


## v0.1.11
* __Add Schemas:__
  * `acme:boost:command:create-sponsor`
  * `acme:boost:command:delete-sponsor`
  * `acme:boost:command:expire-sponsor`
  * `acme:boost:command:mark-sponsor-as-draft`
  * `acme:boost:command:mark-sponsor-as-pending`
  * `acme:boost:command:publish-sponsor`
  * `acme:boost:command:rename-sponsor`
  * `acme:boost:command:unpublish-sponsor`
  * `acme:boost:command:update-sponsor`
  * `acme:boost:event:sponsor-created`
  * `acme:boost:event:sponsor-deleted`
  * `acme:boost:event:sponsor-expired`
  * `acme:boost:event:sponsor-marked-as-draft`
  * `acme:boost:event:sponsor-marked-as-pending`
  * `acme:boost:event:sponsor-published`
  * `acme:boost:event:sponsor-renamed`
  * `acme:boost:event:sponsor-scheduled`
  * `acme:boost:event:sponsor-unpublished`
  * `acme:boost:event:sponsor-updated`
  * `acme:boost:node:sponsor`
  * `acme:boost:request:get-sponsor-history-request`
  * `acme:boost:request:get-sponsor-history-response`
  * `acme:boost:request:get-sponsor-request`
  * `acme:boost:request:get-sponsor-response`
  * `acme:boost:request:search-sponsors-request`
  * `acme:boost:request:search-sponsors-response`
  * `acme:canvas:block:poll-grid-block`
  * `acme:iam:command:create-app`
  * `acme:iam:command:delete-app`
  * `acme:iam:command:grant-roles-to-app`
  * `acme:iam:command:patch-user`
  * `acme:iam:command:patch-users`
  * `acme:iam:command:revoke-roles-from-app`
  * `acme:iam:command:update-app`
  * `acme:iam:event:app-created`
  * `acme:iam:event:app-deleted`
  * `acme:iam:event:app-roles-granted`
  * `acme:iam:event:app-roles-revoked`
  * `acme:iam:event:app-updated`
  * `acme:iam:event:user-patched`
  * `acme:iam:node:alexa-app`
  * `acme:iam:node:android-app`
  * `acme:iam:node:apple-news-app`
  * `acme:iam:node:browser-app`
  * `acme:iam:node:ios-app`
  * `acme:iam:node:slack-app`
  * `acme:iam:node:sms-app`
  * `acme:iam:request:get-all-apps-request`
  * `acme:iam:request:get-all-apps-response`
  * `acme:iam:request:get-app-history-request`
  * `acme:iam:request:get-app-history-response`
  * `acme:iam:request:get-app-request`
  * `acme:iam:request:get-app-response`
  * `acme:notify:command:create-notification`
  * `acme:notify:command:delete-notification`
  * `acme:notify:command:update-notification`
  * `acme:notify:event:notification-created`
  * `acme:notify:event:notification-deleted`
  * `acme:notify:event:notification-failed`
  * `acme:notify:event:notification-sent`
  * `acme:notify:event:notification-updated`
  * `acme:notify:node:alexa-notification`
  * `acme:notify:node:android-notification`
  * `acme:notify:node:apple-news-notification`
  * `acme:notify:node:browser-notification`
  * `acme:notify:node:ios-notification`
  * `acme:notify:node:slack-notification`
  * `acme:notify:node:sms-notification`
  * `acme:notify:request:get-notification-history-request`
  * `acme:notify:request:get-notification-history-response`
  * `acme:notify:request:get-notification-request`
  * `acme:notify:request:get-notification-response`
  * `acme:notify:request:search-notifications-request`
  * `acme:notify:request:search-notifications-response`
* __Modify Schemas:__
  * `acme:apollo:node:poll`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
    * Add mixin `triniti:curator:mixin:teaserable:v1`
  * `acme:canvas:node:page`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
    * Add mixin `triniti:common:mixin:themeable:v1`
  * `acme:curator:node:gallery`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
    * Add mixin `triniti:common:mixin:custom-code:v1`
    * Add mixin `triniti:common:mixin:themeable:v1`
  * `acme:curator:node:*-teaser`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
  * `acme:curator:node:timeline`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
  * `acme:news:node:article`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
    * Add mixin `triniti:common:mixin:themeable:v1`
    * Add mixin `triniti:notify:mixin:has-notifications:v1`
  * `acme:ovp:node:video`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
  * `acme:people:node:person`
    * Add mixin `triniti:common:mixin:themeable:v1`
  * `acme:taxonomy:node:category`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
    * Add mixin `triniti:common:mixin:themeable:v1`
    * Add mixin `triniti:curator:mixin:teaserable:v1`
  * `acme:taxonomy:node:channel`
    * Add mixin `triniti:boost:mixin:sponsorable:v1`
    * Add mixin `triniti:common:mixin:themeable:v1`
    * Add mixin `triniti:curator:mixin:teaserable:v1`


## v0.1.10
* __Modify Schemas:__
  * `acme:dam:command:patch-assets`
    * Add mixin `gdbots:ncr:mixin:patch-nodes:v1`
  * `acme:dam:event:asset-patched`
    * Add mixin `gdbots:ncr:mixin:node-patched:v1`


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
* __Delete Schemas:__ _(not used)_
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
* __Delete Schemas:__ _(not used and probably won't be needed due to lazy loading and derefs)_
  * `acme:apollo:request:get-poll-batch-request`
  * `acme:apollo:request:get-poll-batch-response`
  * `acme:canvas:request:get-page-batch-request`
  * `acme:canvas:request:get-page-batch-response`
  * `acme:news:request:get-article-batch-request`
  * `acme:news:request:get-article-batch-response`
  * `acme:ovp:request:get-video-batch-request`
  * `acme:ovp:request:get-video-batch-response`


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
