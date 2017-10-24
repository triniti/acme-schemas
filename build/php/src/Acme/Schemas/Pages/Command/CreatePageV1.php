<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/command/create-page/1-0-0.json#
namespace Acme\Schemas\Pages\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Pages\Mixin\CreatePage\CreatePageV1 as TrinitiPagesCreatePageV1;
use Triniti\Schemas\Pages\Mixin\CreatePage\CreatePageV1Mixin as TrinitiPagesCreatePageV1Mixin;

final class CreatePageV1 extends AbstractMessage implements
    CreatePage,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1,
    TrinitiPagesCreatePageV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:command:create-page:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
                TrinitiPagesCreatePageV1Mixin::create(),
            ]
        );
    }
}
