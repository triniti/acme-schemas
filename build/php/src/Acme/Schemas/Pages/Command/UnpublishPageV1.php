<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/command/unpublish-page/1-0-0.json#
namespace Acme\Schemas\Pages\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UnpublishNode\UnpublishNodeV1 as GdbotsNcrUnpublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UnpublishNode\UnpublishNodeV1Mixin as GdbotsNcrUnpublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Pages\Mixin\UnpublishPage\UnpublishPageV1 as TrinitiPagesUnpublishPageV1;
use Triniti\Schemas\Pages\Mixin\UnpublishPage\UnpublishPageV1Mixin as TrinitiPagesUnpublishPageV1Mixin;

final class UnpublishPageV1 extends AbstractMessage implements
    UnpublishPage,
    GdbotsPbjxCommandV1,
    GdbotsNcrUnpublishNodeV1,
    TrinitiPagesUnpublishPageV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:command:unpublish-page:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUnpublishNodeV1Mixin::create(),
                TrinitiPagesUnpublishPageV1Mixin::create(),
            ]
        );
    }
}
