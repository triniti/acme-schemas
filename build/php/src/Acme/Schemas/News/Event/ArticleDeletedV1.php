<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/event/article-deleted/1-0-0.json#
namespace Acme\Schemas\News\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1 as GdbotsNcrNodeDeletedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1Mixin as GdbotsNcrNodeDeletedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\News\Mixin\ArticleDeleted\ArticleDeletedV1 as TrinitiNewsArticleDeletedV1;
use Triniti\Schemas\News\Mixin\ArticleDeleted\ArticleDeletedV1Mixin as TrinitiNewsArticleDeletedV1Mixin;

final class ArticleDeletedV1 extends AbstractMessage implements
    ArticleDeleted,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeDeletedV1,
    TrinitiNewsArticleDeletedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:event:article-deleted:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeDeletedV1Mixin::create(),
                TrinitiNewsArticleDeletedV1Mixin::create(),
            ]
        );
    }
}
