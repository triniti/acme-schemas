<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/news/request/get-article-history-request/1-0-0.json#
namespace Acme\Schemas\News\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1 as GdbotsPbjxGetEventsRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsRequest\GetEventsRequestV1Mixin as GdbotsPbjxGetEventsRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\News\Mixin\GetArticleHistoryRequest\GetArticleHistoryRequestV1 as TrinitiNewsGetArticleHistoryRequestV1;
use Triniti\Schemas\News\Mixin\GetArticleHistoryRequest\GetArticleHistoryRequestV1Mixin as TrinitiNewsGetArticleHistoryRequestV1Mixin;

final class GetArticleHistoryRequestV1 extends AbstractMessage implements
    GetArticleHistoryRequest,
    GdbotsPbjxRequestV1,
    GdbotsPbjxGetEventsRequestV1,
    TrinitiNewsGetArticleHistoryRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:news:request:get-article-history-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsPbjxGetEventsRequestV1Mixin::create(),
                TrinitiNewsGetArticleHistoryRequestV1Mixin::create(),
            ]
        );
    }
}
