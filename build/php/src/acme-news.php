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
    'acme:news:command:collect-article-stats' => 'Acme\Schemas\News\Command\CollectArticleStatsV1',
    'acme:news:command:create-article' => 'Acme\Schemas\News\Command\CreateArticleV1',
    'acme:news:command:delete-article' => 'Acme\Schemas\News\Command\DeleteArticleV1',
    'acme:news:command:expire-article' => 'Acme\Schemas\News\Command\ExpireArticleV1',
    'acme:news:command:lock-article' => 'Acme\Schemas\News\Command\LockArticleV1',
    'acme:news:command:mark-article-as-draft' => 'Acme\Schemas\News\Command\MarkArticleAsDraftV1',
    'acme:news:command:mark-article-as-pending' => 'Acme\Schemas\News\Command\MarkArticleAsPendingV1',
    'acme:news:command:publish-article' => 'Acme\Schemas\News\Command\PublishArticleV1',
    'acme:news:command:remove-article-slotting' => 'Acme\Schemas\News\Command\RemoveArticleSlottingV1',
    'acme:news:command:rename-article' => 'Acme\Schemas\News\Command\RenameArticleV1',
    'acme:news:command:unlock-article' => 'Acme\Schemas\News\Command\UnlockArticleV1',
    'acme:news:command:unpublish-article' => 'Acme\Schemas\News\Command\UnpublishArticleV1',
    'acme:news:command:update-article' => 'Acme\Schemas\News\Command\UpdateArticleV1',
    'acme:news:event:apple-news-article-synced' => 'Acme\Schemas\News\Event\AppleNewsArticleSyncedV1',
    'acme:news:event:article-created' => 'Acme\Schemas\News\Event\ArticleCreatedV1',
    'acme:news:event:article-deleted' => 'Acme\Schemas\News\Event\ArticleDeletedV1',
    'acme:news:event:article-expired' => 'Acme\Schemas\News\Event\ArticleExpiredV1',
    'acme:news:event:article-locked' => 'Acme\Schemas\News\Event\ArticleLockedV1',
    'acme:news:event:article-marked-as-draft' => 'Acme\Schemas\News\Event\ArticleMarkedAsDraftV1',
    'acme:news:event:article-marked-as-pending' => 'Acme\Schemas\News\Event\ArticleMarkedAsPendingV1',
    'acme:news:event:article-published' => 'Acme\Schemas\News\Event\ArticlePublishedV1',
    'acme:news:event:article-renamed' => 'Acme\Schemas\News\Event\ArticleRenamedV1',
    'acme:news:event:article-scheduled' => 'Acme\Schemas\News\Event\ArticleScheduledV1',
    'acme:news:event:article-slotting-removed' => 'Acme\Schemas\News\Event\ArticleSlottingRemovedV1',
    'acme:news:event:article-stats-collected' => 'Acme\Schemas\News\Event\ArticleStatsCollectedV1',
    'acme:news:event:article-unlocked' => 'Acme\Schemas\News\Event\ArticleUnlockedV1',
    'acme:news:event:article-unpublished' => 'Acme\Schemas\News\Event\ArticleUnpublishedV1',
    'acme:news:event:article-updated' => 'Acme\Schemas\News\Event\ArticleUpdatedV1',
    'acme:news:node:article' => 'Acme\Schemas\News\Node\ArticleV1',
    'acme:news:node:article-stats' => 'Acme\Schemas\News\Node\ArticleStatsV1',
    'acme:news:request:get-article-history-request' => 'Acme\Schemas\News\Request\GetArticleHistoryRequestV1',
    'acme:news:request:get-article-history-response' => 'Acme\Schemas\News\Request\GetArticleHistoryResponseV1',
    'acme:news:request:get-article-request' => 'Acme\Schemas\News\Request\GetArticleRequestV1',
    'acme:news:request:get-article-response' => 'Acme\Schemas\News\Request\GetArticleResponseV1',
    'acme:news:request:search-articles-request' => 'Acme\Schemas\News\Request\SearchArticlesRequestV1',
    'acme:news:request:search-articles-response' => 'Acme\Schemas\News\Request\SearchArticlesResponseV1',
]);