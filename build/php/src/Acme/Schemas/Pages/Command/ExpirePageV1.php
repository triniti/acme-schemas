<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/command/expire-page/1-0-0.json#
namespace Acme\Schemas\Pages\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1 as GdbotsNcrExpireNodeV1;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1Mixin as GdbotsNcrExpireNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Pages\Mixin\ExpirePage\ExpirePageV1 as TrinitiPagesExpirePageV1;
use Triniti\Schemas\Pages\Mixin\ExpirePage\ExpirePageV1Mixin as TrinitiPagesExpirePageV1Mixin;

final class ExpirePageV1 extends AbstractMessage implements
    ExpirePage,
    GdbotsPbjxCommandV1,
    GdbotsNcrExpireNodeV1,
    TrinitiPagesExpirePageV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:command:expire-page:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrExpireNodeV1Mixin::create(),
                TrinitiPagesExpirePageV1Mixin::create(),
            ]
        );
    }
}
