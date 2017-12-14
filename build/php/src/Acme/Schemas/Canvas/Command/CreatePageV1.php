<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/command/create-page/1-0-0.json#
namespace Acme\Schemas\Canvas\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Canvas\Mixin\CreatePage\CreatePageV1 as TrinitiCanvasCreatePageV1;
use Triniti\Schemas\Canvas\Mixin\CreatePage\CreatePageV1Mixin as TrinitiCanvasCreatePageV1Mixin;

final class CreatePageV1 extends AbstractMessage implements
    CreatePage,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1,
    TrinitiCanvasCreatePageV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:command:create-page:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
                TrinitiCanvasCreatePageV1Mixin::create(),
            ]
        );
    }
}