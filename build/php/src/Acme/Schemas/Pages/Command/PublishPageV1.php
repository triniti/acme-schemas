<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/command/publish-page/1-0-0.json#
namespace Acme\Schemas\Pages\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1 as GdbotsNcrPublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1Mixin as GdbotsNcrPublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Pages\Mixin\PublishPage\PublishPageV1 as TrinitiPagesPublishPageV1;
use Triniti\Schemas\Pages\Mixin\PublishPage\PublishPageV1Mixin as TrinitiPagesPublishPageV1Mixin;

final class PublishPageV1 extends AbstractMessage implements
    PublishPage,
    GdbotsPbjxCommandV1,
    GdbotsNcrPublishNodeV1,
    TrinitiPagesPublishPageV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:command:publish-page:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrPublishNodeV1Mixin::create(),
                TrinitiPagesPublishPageV1Mixin::create(),
            ]
        );
    }
}
