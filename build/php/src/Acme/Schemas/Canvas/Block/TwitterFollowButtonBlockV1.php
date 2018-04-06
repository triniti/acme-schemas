<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/twitter-follow-button-block/1-0-0.json#
namespace Acme\Schemas\Canvas\Block;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1 as TrinitiCanvasBlockV1;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Mixin as TrinitiCanvasBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Trait as TrinitiCanvasBlockV1Trait;
use Triniti\Schemas\Canvas\Mixin\TwitterFollowButtonBlock\TwitterFollowButtonBlockV1 as TrinitiCanvasTwitterFollowButtonBlockV1;
use Triniti\Schemas\Canvas\Mixin\TwitterFollowButtonBlock\TwitterFollowButtonBlockV1Mixin as TrinitiCanvasTwitterFollowButtonBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\TwitterFollowButtonBlock\TwitterFollowButtonBlockV1Trait as TrinitiCanvasTwitterFollowButtonBlockV1Trait;

final class TwitterFollowButtonBlockV1 extends AbstractMessage implements
    TwitterFollowButtonBlock,
    TrinitiCanvasBlockV1,
    TrinitiCanvasTwitterFollowButtonBlockV1
{
    use TrinitiCanvasBlockV1Trait;
    use TrinitiCanvasTwitterFollowButtonBlockV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:block:twitter-follow-button-block:1-0-0', __CLASS__,
            [],
            [
                TrinitiCanvasBlockV1Mixin::create(),
                TrinitiCanvasTwitterFollowButtonBlockV1Mixin::create(),
            ]
        );
    }
}
