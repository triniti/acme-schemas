<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/news/event/article-expired/1-0-0.json#
namespace Acme\Schemas\News\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeExpired\NodeExpiredV1 as GdbotsNcrNodeExpiredV1;
use Gdbots\Schemas\Ncr\Mixin\NodeExpired\NodeExpiredV1Mixin as GdbotsNcrNodeExpiredV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\News\Mixin\ArticleExpired\ArticleExpiredV1 as TrinitiNewsArticleExpiredV1;
use Triniti\Schemas\News\Mixin\ArticleExpired\ArticleExpiredV1Mixin as TrinitiNewsArticleExpiredV1Mixin;

final class ArticleExpiredV1 extends AbstractMessage implements
    ArticleExpired,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeExpiredV1,
    TrinitiNewsArticleExpiredV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:event:article-expired:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeExpiredV1Mixin::create(),
                TrinitiNewsArticleExpiredV1Mixin::create(),
            ]
        );
    }
}
