<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/command/mark-video-as-draft/1-0-0.json#
namespace Acme\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1 as GdbotsNcrMarkNodeAsDraftV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1Mixin as GdbotsNcrMarkNodeAsDraftV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Mixin\MarkVideoAsDraft\MarkVideoAsDraftV1 as TrinitiOvpMarkVideoAsDraftV1;
use Triniti\Schemas\Ovp\Mixin\MarkVideoAsDraft\MarkVideoAsDraftV1Mixin as TrinitiOvpMarkVideoAsDraftV1Mixin;

final class MarkVideoAsDraftV1 extends AbstractMessage implements
    MarkVideoAsDraft,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsDraftV1,
    TrinitiOvpMarkVideoAsDraftV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:command:mark-video-as-draft:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsDraftV1Mixin::create(),
                TrinitiOvpMarkVideoAsDraftV1Mixin::create(),
            ]
        );
    }
}
