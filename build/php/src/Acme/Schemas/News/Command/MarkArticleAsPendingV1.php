<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/mark-article-as-pending/1-0-0.json#
namespace Acme\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1 as GdbotsNcrMarkNodeAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1Mixin as GdbotsNcrMarkNodeAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\News\Mixin\MarkArticleAsPending\MarkArticleAsPendingV1 as TrinitiNewsMarkArticleAsPendingV1;
use Triniti\Schemas\News\Mixin\MarkArticleAsPending\MarkArticleAsPendingV1Mixin as TrinitiNewsMarkArticleAsPendingV1Mixin;

final class MarkArticleAsPendingV1 extends AbstractMessage implements
    MarkArticleAsPending,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsPendingV1,
    TrinitiNewsMarkArticleAsPendingV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:command:mark-article-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsPendingV1Mixin::create(),
                TrinitiNewsMarkArticleAsPendingV1Mixin::create(),
            ]
        );
    }
}
