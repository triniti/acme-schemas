<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/category-deleted/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1 as GdbotsNcrNodeDeletedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeDeleted\NodeDeletedV1Mixin as GdbotsNcrNodeDeletedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\CategoryDeleted\CategoryDeletedV1 as TrinitiTaxonomyCategoryDeletedV1;
use Triniti\Schemas\Taxonomy\Mixin\CategoryDeleted\CategoryDeletedV1Mixin as TrinitiTaxonomyCategoryDeletedV1Mixin;

final class CategoryDeletedV1 extends AbstractMessage implements
    CategoryDeleted,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeDeletedV1,
    TrinitiTaxonomyCategoryDeletedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:event:category-deleted:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeDeletedV1Mixin::create(),
                TrinitiTaxonomyCategoryDeletedV1Mixin::create(),
            ]
        );
    }
}
