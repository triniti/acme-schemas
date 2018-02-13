<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-category-history-response/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1 as GdbotsPbjxGetEventsResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\GetEventsResponse\GetEventsResponseV1Mixin as GdbotsPbjxGetEventsResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\GetCategoryHistoryResponse\GetCategoryHistoryResponseV1 as TrinitiTaxonomyGetCategoryHistoryResponseV1;
use Triniti\Schemas\Taxonomy\Mixin\GetCategoryHistoryResponse\GetCategoryHistoryResponseV1Mixin as TrinitiTaxonomyGetCategoryHistoryResponseV1Mixin;

final class GetCategoryHistoryResponseV1 extends AbstractMessage implements
    GetCategoryHistoryResponse,
    GdbotsPbjxResponseV1,
    GdbotsPbjxGetEventsResponseV1,
    TrinitiTaxonomyGetCategoryHistoryResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:request:get-category-history-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsPbjxGetEventsResponseV1Mixin::create(),
                TrinitiTaxonomyGetCategoryHistoryResponseV1Mixin::create(),
            ]
        );
    }
}
