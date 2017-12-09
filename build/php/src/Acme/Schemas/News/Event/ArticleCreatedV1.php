<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/event/article-created/1-0-0.json#
namespace Acme\Schemas\News\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1 as GdbotsNcrNodeCreatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1Mixin as GdbotsNcrNodeCreatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\News\Mixin\ArticleCreated\ArticleCreatedV1 as TrinitiNewsArticleCreatedV1;
use Triniti\Schemas\News\Mixin\ArticleCreated\ArticleCreatedV1Mixin as TrinitiNewsArticleCreatedV1Mixin;

final class ArticleCreatedV1 extends AbstractMessage implements
    ArticleCreated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeCreatedV1,
    TrinitiNewsArticleCreatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:event:article-created:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeCreatedV1Mixin::create(),
                TrinitiNewsArticleCreatedV1Mixin::create(),
            ]
        );
    }
}
