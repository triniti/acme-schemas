<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/request/get-article-batch-response/1-0-0.json#
namespace Acme\Schemas\News\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1 as GdbotsNcrGetNodeBatchResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1Mixin as GdbotsNcrGetNodeBatchResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\News\Mixin\GetArticleBatchResponse\GetArticleBatchResponseV1 as TrinitiNewsGetArticleBatchResponseV1;
use Triniti\Schemas\News\Mixin\GetArticleBatchResponse\GetArticleBatchResponseV1Mixin as TrinitiNewsGetArticleBatchResponseV1Mixin;

final class GetArticleBatchResponseV1 extends AbstractMessage implements
    GetArticleBatchResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeBatchResponseV1,
    TrinitiNewsGetArticleBatchResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:request:get-article-batch-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeBatchResponseV1Mixin::create(),
                TrinitiNewsGetArticleBatchResponseV1Mixin::create(),
            ]
        );
    }
}
