<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/unlock-article/1-0-0.json#
namespace Acme\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UnlockNode\UnlockNodeV1 as GdbotsNcrUnlockNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UnlockNode\UnlockNodeV1Mixin as GdbotsNcrUnlockNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\News\Mixin\UnlockArticle\UnlockArticleV1 as TrinitiNewsUnlockArticleV1;
use Triniti\Schemas\News\Mixin\UnlockArticle\UnlockArticleV1Mixin as TrinitiNewsUnlockArticleV1Mixin;

final class UnlockArticleV1 extends AbstractMessage implements
    UnlockArticle,
    GdbotsPbjxCommandV1,
    GdbotsNcrUnlockNodeV1,
    TrinitiNewsUnlockArticleV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:command:unlock-article:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUnlockNodeV1Mixin::create(),
                TrinitiNewsUnlockArticleV1Mixin::create(),
            ]
        );
    }
}
