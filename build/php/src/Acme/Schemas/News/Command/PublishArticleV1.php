<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/publish-article/1-0-0.json#
namespace Acme\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1 as GdbotsNcrPublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1Mixin as GdbotsNcrPublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\News\Mixin\PublishArticle\PublishArticleV1 as TrinitiNewsPublishArticleV1;
use Triniti\Schemas\News\Mixin\PublishArticle\PublishArticleV1Mixin as TrinitiNewsPublishArticleV1Mixin;

final class PublishArticleV1 extends AbstractMessage implements
    PublishArticle,
    GdbotsPbjxCommandV1,
    GdbotsNcrPublishNodeV1,
    TrinitiNewsPublishArticleV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:command:publish-article:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrPublishNodeV1Mixin::create(),
                TrinitiNewsPublishArticleV1Mixin::create(),
            ]
        );
    }
}