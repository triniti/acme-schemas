<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/event/article-updated/1-0-0.json#
namespace Acme\Schemas\News\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1 as GdbotsNcrNodeUpdatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1Mixin as GdbotsNcrNodeUpdatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\News\Mixin\ArticleUpdated\ArticleUpdatedV1 as TrinitiNewsArticleUpdatedV1;
use Triniti\Schemas\News\Mixin\ArticleUpdated\ArticleUpdatedV1Mixin as TrinitiNewsArticleUpdatedV1Mixin;

final class ArticleUpdatedV1 extends AbstractMessage implements
    ArticleUpdated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeUpdatedV1,
    TrinitiNewsArticleUpdatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:event:article-updated:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeUpdatedV1Mixin::create(),
                TrinitiNewsArticleUpdatedV1Mixin::create(),
            ]
        );
    }
}
