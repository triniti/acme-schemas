/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
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

export default MessageResolver;
