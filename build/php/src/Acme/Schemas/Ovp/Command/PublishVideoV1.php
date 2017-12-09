<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/command/publish-video/1-0-0.json#
namespace Acme\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1 as GdbotsNcrPublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1Mixin as GdbotsNcrPublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Mixin\PublishVideo\PublishVideoV1 as TrinitiOvpPublishVideoV1;
use Triniti\Schemas\Ovp\Mixin\PublishVideo\PublishVideoV1Mixin as TrinitiOvpPublishVideoV1Mixin;

final class PublishVideoV1 extends AbstractMessage implements
    PublishVideo,
    GdbotsPbjxCommandV1,
    GdbotsNcrPublishNodeV1,
    TrinitiOvpPublishVideoV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:command:publish-video:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrPublishNodeV1Mixin::create(),
                TrinitiOvpPublishVideoV1Mixin::create(),
            ]
        );
    }
}
