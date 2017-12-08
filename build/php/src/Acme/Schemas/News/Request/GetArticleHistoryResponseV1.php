<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/news/request/get-article-history-response/1-0-0.json#
namespace Acme\Schemas\News\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1 as GdbotsPbjxGetEventsResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1Mixin as GdbotsPbjxGetEventsResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\News\Mixin\GetArticleHistoryResponse\GetArticleHistoryResponseV1 as TrinitiNewsGetArticleHistoryResponseV1;
use Triniti\Schemas\News\Mixin\GetArticleHistoryResponse\GetArticleHistoryResponseV1Mixin as TrinitiNewsGetArticleHistoryResponseV1Mixin;

final class GetArticleHistoryResponseV1 extends AbstractMessage implements
    GetArticleHistoryResponse,
    GdbotsPbjxResponseV1,
    GdbotsPbjxGetEventsResponseV1,
    TrinitiNewsGetArticleHistoryResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:request:get-article-history-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsPbjxGetEventsResponseV1Mixin::create(),
                TrinitiNewsGetArticleHistoryResponseV1Mixin::create(),
            ]
        );
    }
}
