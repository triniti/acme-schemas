<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-category-response/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\GetCategoryResponse\GetCategoryResponseV1 as TrinitiTaxonomyGetCategoryResponseV1;
use Triniti\Schemas\Taxonomy\Mixin\GetCategoryResponse\GetCategoryResponseV1Mixin as TrinitiTaxonomyGetCategoryResponseV1Mixin;

final class GetCategoryResponseV1 extends AbstractMessage implements
    GetCategoryResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiTaxonomyGetCategoryResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:request:get-category-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiTaxonomyGetCategoryResponseV1Mixin::create(),
            ]
        );
    }
}
