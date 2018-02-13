<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/create-category/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\CreateCategory\CreateCategoryV1 as TrinitiTaxonomyCreateCategoryV1;
use Triniti\Schemas\Taxonomy\Mixin\CreateCategory\CreateCategoryV1Mixin as TrinitiTaxonomyCreateCategoryV1Mixin;

final class CreateCategoryV1 extends AbstractMessage implements
    CreateCategory,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1,
    TrinitiTaxonomyCreateCategoryV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:command:create-category:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
                TrinitiTaxonomyCreateCategoryV1Mixin::create(),
            ]
        );
    }
}
