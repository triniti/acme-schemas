<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/command/publish-page/1-0-0.json#
namespace Acme\Schemas\Canvas\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1 as GdbotsNcrPublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1Mixin as GdbotsNcrPublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Canvas\Mixin\PublishPage\PublishPageV1 as TrinitiCanvasPublishPageV1;
use Triniti\Schemas\Canvas\Mixin\PublishPage\PublishPageV1Mixin as TrinitiCanvasPublishPageV1Mixin;

final class PublishPageV1 extends AbstractMessage implements
    PublishPage,
    GdbotsPbjxCommandV1,
    GdbotsNcrPublishNodeV1,
    TrinitiCanvasPublishPageV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:command:publish-page:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrPublishNodeV1Mixin::create(),
                TrinitiCanvasPublishPageV1Mixin::create(),
            ]
        );
    }
}
