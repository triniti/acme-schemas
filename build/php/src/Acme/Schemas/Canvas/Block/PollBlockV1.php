<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/poll-block/1-0-0.json#
namespace Acme\Schemas\Canvas\Block;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1 as TrinitiCanvasBlockV1;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Mixin as TrinitiCanvasBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Trait as TrinitiCanvasBlockV1Trait;
use Triniti\Schemas\Canvas\Mixin\NodeRefBlock\NodeRefBlockV1 as TrinitiCanvasNodeRefBlockV1;
use Triniti\Schemas\Canvas\Mixin\NodeRefBlock\NodeRefBlockV1Mixin as TrinitiCanvasNodeRefBlockV1Mixin;

final class PollBlockV1 extends AbstractMessage implements
    PollBlock,
    TrinitiCanvasBlockV1,
    TrinitiCanvasNodeRefBlockV1
{
    use TrinitiCanvasBlockV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:block:poll-block:1-0-0', __CLASS__,
            [],
            [
                TrinitiCanvasBlockV1Mixin::create(),
                TrinitiCanvasNodeRefBlockV1Mixin::create(),
            ]
        );
    }

    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'node_ref' => (string)$this->get('node_ref'),
        ];
    }
}
