<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/command/expire-video/1-0-0.json#
namespace Acme\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1 as GdbotsNcrExpireNodeV1;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1Mixin as GdbotsNcrExpireNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Mixin\ExpireVideo\ExpireVideoV1 as TrinitiOvpExpireVideoV1;
use Triniti\Schemas\Ovp\Mixin\ExpireVideo\ExpireVideoV1Mixin as TrinitiOvpExpireVideoV1Mixin;

final class ExpireVideoV1 extends AbstractMessage implements
    ExpireVideo,
    GdbotsPbjxCommandV1,
    GdbotsNcrExpireNodeV1,
    TrinitiOvpExpireVideoV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:command:expire-video:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrExpireNodeV1Mixin::create(),
                TrinitiOvpExpireVideoV1Mixin::create(),
            ]
        );
    }
}
