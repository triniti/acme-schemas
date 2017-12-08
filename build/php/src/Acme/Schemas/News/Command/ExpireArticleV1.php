<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/news/command/expire-article/1-0-0.json#
namespace Acme\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1 as GdbotsNcrExpireNodeV1;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1Mixin as GdbotsNcrExpireNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\News\Mixin\ExpireArticle\ExpireArticleV1 as TrinitiNewsExpireArticleV1;
use Triniti\Schemas\News\Mixin\ExpireArticle\ExpireArticleV1Mixin as TrinitiNewsExpireArticleV1Mixin;

final class ExpireArticleV1 extends AbstractMessage implements
    ExpireArticle,
    GdbotsPbjxCommandV1,
    GdbotsNcrExpireNodeV1,
    TrinitiNewsExpireArticleV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:command:expire-article:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrExpireNodeV1Mixin::create(),
                TrinitiNewsExpireArticleV1Mixin::create(),
            ]
        );
    }
}
