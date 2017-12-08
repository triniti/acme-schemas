<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/news/command/update-article/1-0-0.json#
namespace Acme\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1 as GdbotsNcrUpdateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Mixin as GdbotsNcrUpdateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\News\Mixin\UpdateArticle\UpdateArticleV1 as TrinitiNewsUpdateArticleV1;
use Triniti\Schemas\News\Mixin\UpdateArticle\UpdateArticleV1Mixin as TrinitiNewsUpdateArticleV1Mixin;

final class UpdateArticleV1 extends AbstractMessage implements
    UpdateArticle,
    GdbotsPbjxCommandV1,
    GdbotsNcrUpdateNodeV1,
    TrinitiNewsUpdateArticleV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:command:update-article:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUpdateNodeV1Mixin::create(),
                TrinitiNewsUpdateArticleV1Mixin::create(),
            ]
        );
    }
}
