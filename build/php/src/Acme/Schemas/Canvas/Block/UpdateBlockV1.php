<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/update-block/1-0-0.json#
namespace Acme\Schemas\Canvas\Block;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1 as TrinitiCanvasBlockV1;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Mixin as TrinitiCanvasBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Trait as TrinitiCanvasBlockV1Trait;
use Triniti\Schemas\Canvas\Mixin\UpdateBlock\UpdateBlockV1 as TrinitiCanvasUpdateBlockV1;
use Triniti\Schemas\Canvas\Mixin\UpdateBlock\UpdateBlockV1Mixin as TrinitiCanvasUpdateBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\UpdateBlock\UpdateBlockV1Trait as TrinitiCanvasUpdateBlockV1Trait;

final class UpdateBlockV1 extends AbstractMessage implements
    UpdateBlock,
    TrinitiCanvasBlockV1,
    TrinitiCanvasUpdateBlockV1
{
    use TrinitiCanvasBlockV1Trait;
    use TrinitiCanvasUpdateBlockV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:block:update-block:1-0-0', __CLASS__,
            [],
            [
                TrinitiCanvasBlockV1Mixin::create(),
                TrinitiCanvasUpdateBlockV1Mixin::create(),
            ]
        );
    }
}
