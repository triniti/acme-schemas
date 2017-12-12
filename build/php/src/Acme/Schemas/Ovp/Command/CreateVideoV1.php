<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/command/create-video/1-0-0.json#
namespace Acme\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Mixin\CreateVideo\CreateVideoV1 as TrinitiOvpCreateVideoV1;
use Triniti\Schemas\Ovp\Mixin\CreateVideo\CreateVideoV1Mixin as TrinitiOvpCreateVideoV1Mixin;

final class CreateVideoV1 extends AbstractMessage implements
    CreateVideo,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1,
    TrinitiOvpCreateVideoV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:command:create-video:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
                TrinitiOvpCreateVideoV1Mixin::create(),
            ]
        );
    }
}
