<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/news/request/get-article-response/1-0-0.json#
namespace Acme\Schemas\News\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\News\Mixin\GetArticleResponse\GetArticleResponseV1 as TrinitiNewsGetArticleResponseV1;
use Triniti\Schemas\News\Mixin\GetArticleResponse\GetArticleResponseV1Mixin as TrinitiNewsGetArticleResponseV1Mixin;

final class GetArticleResponseV1 extends AbstractMessage implements
    GetArticleResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiNewsGetArticleResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:request:get-article-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiNewsGetArticleResponseV1Mixin::create(),
            ]
        );
    }
}
