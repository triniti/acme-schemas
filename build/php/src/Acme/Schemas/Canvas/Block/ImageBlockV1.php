<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/image-block/1-0-0.json#
namespace Acme\Schemas\Canvas\Block;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1 as TrinitiCanvasBlockV1;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Mixin as TrinitiCanvasBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Trait as TrinitiCanvasBlockV1Trait;
use Triniti\Schemas\Canvas\Mixin\ImageBlock\ImageBlockV1 as TrinitiCanvasImageBlockV1;
use Triniti\Schemas\Canvas\Mixin\ImageBlock\ImageBlockV1Mixin as TrinitiCanvasImageBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\ImageBlock\ImageBlockV1Trait as TrinitiCanvasImageBlockV1Trait;

final class ImageBlockV1 extends AbstractMessage implements
    ImageBlock,
    TrinitiCanvasBlockV1,
    TrinitiCanvasImageBlockV1
{
    use TrinitiCanvasBlockV1Trait;
    use TrinitiCanvasImageBlockV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:block:image-block:1-0-0', __CLASS__,
            [],
            [
                TrinitiCanvasBlockV1Mixin::create(),
                TrinitiCanvasImageBlockV1Mixin::create(),
            ]
        );
    }
}
