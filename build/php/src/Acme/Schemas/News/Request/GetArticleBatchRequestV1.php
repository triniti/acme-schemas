<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/news/request/get-article-batch-request/1-0-0.json#
namespace Acme\Schemas\News\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1 as GdbotsNcrGetNodeBatchRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchRequest\GetNodeBatchRequestV1Mixin as GdbotsNcrGetNodeBatchRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\News\Mixin\GetArticleBatchRequest\GetArticleBatchRequestV1 as TrinitiNewsGetArticleBatchRequestV1;
use Triniti\Schemas\News\Mixin\GetArticleBatchRequest\GetArticleBatchRequestV1Mixin as TrinitiNewsGetArticleBatchRequestV1Mixin;

final class GetArticleBatchRequestV1 extends AbstractMessage implements
    GetArticleBatchRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeBatchRequestV1,
    TrinitiNewsGetArticleBatchRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:request:get-article-batch-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeBatchRequestV1Mixin::create(),
                TrinitiNewsGetArticleBatchRequestV1Mixin::create(),
            ]
        );
    }
}
