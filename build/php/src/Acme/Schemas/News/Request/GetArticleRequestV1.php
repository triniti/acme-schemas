<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/request/get-article-request/1-0-0.json#
namespace Acme\Schemas\News\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1 as GdbotsNcrGetNodeRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Mixin as GdbotsNcrGetNodeRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\News\Mixin\GetArticleRequest\GetArticleRequestV1 as TrinitiNewsGetArticleRequestV1;
use Triniti\Schemas\News\Mixin\GetArticleRequest\GetArticleRequestV1Mixin as TrinitiNewsGetArticleRequestV1Mixin;

final class GetArticleRequestV1 extends AbstractMessage implements
    GetArticleRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeRequestV1,
    TrinitiNewsGetArticleRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:request:get-article-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeRequestV1Mixin::create(),
                TrinitiNewsGetArticleRequestV1Mixin::create(),
            ]
        );
    }
}
