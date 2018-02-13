<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/rename-category/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1 as GdbotsNcrRenameNodeV1;
use Gdbots\Schemas\Ncr\Mixin\RenameNode\RenameNodeV1Mixin as GdbotsNcrRenameNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\RenameCategory\RenameCategoryV1 as TrinitiTaxonomyRenameCategoryV1;
use Triniti\Schemas\Taxonomy\Mixin\RenameCategory\RenameCategoryV1Mixin as TrinitiTaxonomyRenameCategoryV1Mixin;

final class RenameCategoryV1 extends AbstractMessage implements
    RenameCategory,
    GdbotsPbjxCommandV1,
    GdbotsNcrRenameNodeV1,
    TrinitiTaxonomyRenameCategoryV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:command:rename-category:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrRenameNodeV1Mixin::create(),
                TrinitiTaxonomyRenameCategoryV1Mixin::create(),
            ]
        );
    }
}
