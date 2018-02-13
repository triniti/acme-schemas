<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/update-category/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1 as GdbotsNcrUpdateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Mixin as GdbotsNcrUpdateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\UpdateCategory\UpdateCategoryV1 as TrinitiTaxonomyUpdateCategoryV1;
use Triniti\Schemas\Taxonomy\Mixin\UpdateCategory\UpdateCategoryV1Mixin as TrinitiTaxonomyUpdateCategoryV1Mixin;

final class UpdateCategoryV1 extends AbstractMessage implements
    UpdateCategory,
    GdbotsPbjxCommandV1,
    GdbotsNcrUpdateNodeV1,
    TrinitiTaxonomyUpdateCategoryV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:command:update-category:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUpdateNodeV1Mixin::create(),
                TrinitiTaxonomyUpdateCategoryV1Mixin::create(),
            ]
        );
    }
}
