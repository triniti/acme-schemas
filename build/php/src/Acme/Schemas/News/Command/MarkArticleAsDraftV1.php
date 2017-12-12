<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/mark-article-as-draft/1-0-0.json#
namespace Acme\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1 as GdbotsNcrMarkNodeAsDraftV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1Mixin as GdbotsNcrMarkNodeAsDraftV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\News\Mixin\MarkArticleAsDraft\MarkArticleAsDraftV1 as TrinitiNewsMarkArticleAsDraftV1;
use Triniti\Schemas\News\Mixin\MarkArticleAsDraft\MarkArticleAsDraftV1Mixin as TrinitiNewsMarkArticleAsDraftV1Mixin;

final class MarkArticleAsDraftV1 extends AbstractMessage implements
    MarkArticleAsDraft,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsDraftV1,
    TrinitiNewsMarkArticleAsDraftV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:command:mark-article-as-draft:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsDraftV1Mixin::create(),
                TrinitiNewsMarkArticleAsDraftV1Mixin::create(),
            ]
        );
    }
}
