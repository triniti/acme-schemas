<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/iam/command/update-user/1-0-0.json#
namespace Acme\Schemas\Iam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Iam\Mixin\UpdateUser\UpdateUserV1 as GdbotsIamUpdateUserV1;
use Gdbots\Schemas\Iam\Mixin\UpdateUser\UpdateUserV1Mixin as GdbotsIamUpdateUserV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1 as GdbotsNcrUpdateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Mixin as GdbotsNcrUpdateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class UpdateUserV1 extends AbstractMessage implements
    UpdateUser,
    GdbotsPbjxCommandV1,
    GdbotsNcrUpdateNodeV1,
    GdbotsIamUpdateUserV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:iam:command:update-user:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUpdateNodeV1Mixin::create(),
                GdbotsIamUpdateUserV1Mixin::create(),
            ]
        );
    }
}