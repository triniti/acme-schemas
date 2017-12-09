<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/create-article/1-0-0.json#
namespace Acme\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\News\Mixin\CreateArticle\CreateArticleV1 as TrinitiNewsCreateArticleV1;
use Triniti\Schemas\News\Mixin\CreateArticle\CreateArticleV1Mixin as TrinitiNewsCreateArticleV1Mixin;

final class CreateArticleV1 extends AbstractMessage implements
    CreateArticle,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1,
    TrinitiNewsCreateArticleV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:command:create-article:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
                TrinitiNewsCreateArticleV1Mixin::create(),
            ]
        );
    }
}
