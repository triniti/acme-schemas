<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/command/delete-page/1-0-0.json#
namespace Acme\Schemas\Pages\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1 as GdbotsNcrDeleteNodeV1;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1Mixin as GdbotsNcrDeleteNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Pages\Mixin\DeletePage\DeletePageV1 as TrinitiPagesDeletePageV1;
use Triniti\Schemas\Pages\Mixin\DeletePage\DeletePageV1Mixin as TrinitiPagesDeletePageV1Mixin;

final class DeletePageV1 extends AbstractMessage implements
    DeletePage,
    GdbotsPbjxCommandV1,
    GdbotsNcrDeleteNodeV1,
    TrinitiPagesDeletePageV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:command:delete-page:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrDeleteNodeV1Mixin::create(),
                TrinitiPagesDeletePageV1Mixin::create(),
            ]
        );
    }
}
