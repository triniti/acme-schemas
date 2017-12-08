<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/news/node/article/1-0-0.json#
namespace Acme\Schemas\News\Node;

use Acme\Schemas\News\ArticleId;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Expirable\ExpirableV1 as GdbotsNcrExpirableV1;
use Gdbots\Schemas\Ncr\Mixin\Expirable\ExpirableV1Mixin as GdbotsNcrExpirableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1 as GdbotsNcrIndexedV1;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1Mixin as GdbotsNcrIndexedV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1 as GdbotsNcrNodeV1;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Trait as GdbotsNcrNodeV1Trait;
use Gdbots\Schemas\Ncr\Mixin\Publishable\PublishableV1 as GdbotsNcrPublishableV1;
use Gdbots\Schemas\Ncr\Mixin\Publishable\PublishableV1Mixin as GdbotsNcrPublishableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Sluggable\SluggableV1 as GdbotsNcrSluggableV1;
use Gdbots\Schemas\Ncr\Mixin\Sluggable\SluggableV1Mixin as GdbotsNcrSluggableV1Mixin;
use Triniti\Schemas\News\Mixin\Article\ArticleV1 as TrinitiNewsArticleV1;
use Triniti\Schemas\News\Mixin\Article\ArticleV1Mixin as TrinitiNewsArticleV1Mixin;
use Triniti\Schemas\News\Mixin\Article\ArticleV1Trait as TrinitiNewsArticleV1Trait;

final class ArticleV1 extends AbstractMessage implements
    Article,
    GdbotsNcrNodeV1,
    TrinitiNewsArticleV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrIndexedV1,
    GdbotsNcrPublishableV1,
    GdbotsNcrSluggableV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiNewsArticleV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:node:article:1-0-0', __CLASS__,
            [
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return ArticleId::generate(); })
                    ->className(ArticleId::class)
                    ->build(),
            ],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiNewsArticleV1Mixin::create(),
                GdbotsNcrExpirableV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsNcrPublishableV1Mixin::create(),
                GdbotsNcrSluggableV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
