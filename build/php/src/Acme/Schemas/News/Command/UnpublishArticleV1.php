<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/unpublish-article/1-0-0.json#
namespace Acme\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UnpublishNode\UnpublishNodeV1 as GdbotsNcrUnpublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UnpublishNode\UnpublishNodeV1Mixin as GdbotsNcrUnpublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\News\Mixin\UnpublishArticle\UnpublishArticleV1 as TrinitiNewsUnpublishArticleV1;
use Triniti\Schemas\News\Mixin\UnpublishArticle\UnpublishArticleV1Mixin as TrinitiNewsUnpublishArticleV1Mixin;

final class UnpublishArticleV1 extends AbstractMessage implements
    UnpublishArticle,
    GdbotsPbjxCommandV1,
    GdbotsNcrUnpublishNodeV1,
    TrinitiNewsUnpublishArticleV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:command:unpublish-article:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUnpublishNodeV1Mixin::create(),
                TrinitiNewsUnpublishArticleV1Mixin::create(),
            ]
        );
    }
}
