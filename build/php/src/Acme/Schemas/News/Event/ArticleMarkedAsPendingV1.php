<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/event/article-marked-as-pending/1-0-0.json#
namespace Acme\Schemas\News\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1 as GdbotsNcrNodeMarkedAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1Mixin as GdbotsNcrNodeMarkedAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\News\Mixin\ArticleMarkedAsPending\ArticleMarkedAsPendingV1 as TrinitiNewsArticleMarkedAsPendingV1;
use Triniti\Schemas\News\Mixin\ArticleMarkedAsPending\ArticleMarkedAsPendingV1Mixin as TrinitiNewsArticleMarkedAsPendingV1Mixin;

final class ArticleMarkedAsPendingV1 extends AbstractMessage implements
    ArticleMarkedAsPending,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeMarkedAsPendingV1,
    TrinitiNewsArticleMarkedAsPendingV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:event:article-marked-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeMarkedAsPendingV1Mixin::create(),
                TrinitiNewsArticleMarkedAsPendingV1Mixin::create(),
            ]
        );
    }
}