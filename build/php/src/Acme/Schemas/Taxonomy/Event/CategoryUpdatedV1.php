<?php
declare(strict_types=1);

// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/category-updated/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;

final class CategoryUpdatedV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:acme:taxonomy:event:category-updated:1-0-0';
    const SCHEMA_CURIE = 'acme:taxonomy:event:category-updated';
    const SCHEMA_CURIE_MAJOR = 'acme:taxonomy:event:category-updated:v1';
    const MIXINS = [
      'gdbots:pbjx:mixin:event:v1',
      'gdbots:pbjx:mixin:event',
      'gdbots:ncr:mixin:node-updated:v1',
      'gdbots:ncr:mixin:node-updated',
    ];

    use GdbotsPbjxEventV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                Fb::create('event_id', T\TimeUuidType::create())
                    ->required()
                    ->build(),
                Fb::create('occurred_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * Multi-tenant apps can use this field to track the tenant id.
                 */
                Fb::create('ctx_tenant_id', T\StringType::create())
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('ctx_causator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('ctx_correlator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('ctx_user_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * The "ctx_app" refers to the application used to send the command which
                 * in turn resulted in this event being published.
                 */
                Fb::create('ctx_app', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:contexts::app',
                    ])
                    ->build(),
                /*
                 * The "ctx_cloud" is usually copied from the command that resulted in this
                 * event being published. This means the value most likely refers to the cloud
                 * that received the command originally, not the machine processing the event.
                 */
                Fb::create('ctx_cloud', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:contexts::cloud',
                    ])
                    ->build(),
                Fb::create('ctx_ip', T\StringType::create())
                    ->format(Format::IPV4())
                    ->overridable(true)
                    ->build(),
                Fb::create('ctx_ipv6', T\StringType::create())
                    ->format(Format::IPV6())
                    ->overridable(true)
                    ->build(),
                Fb::create('ctx_ua', T\TextType::create())
                    ->overridable(true)
                    ->build(),
                /*
                 * An optional message/reason for the event being created.
                 * Consider this like a git commit message.
                 */
                Fb::create('ctx_msg', T\TextType::create())
                    ->build(),
                Fb::create('node_ref', T\NodeRefType::create())
                    ->required()
                    ->build(),
                Fb::create('slug', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
                Fb::create('new_etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                Fb::create('old_etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                Fb::create('new_node', T\MessageType::create())
                    ->required()
                    ->anyOfCuries([
                        'gdbots:ncr:mixin:node',
                    ])
                    ->overridable(true)
                    ->build(),
                /*
                 * The entire node, as it appeared before it was modified.
                 */
                Fb::create('old_node', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:ncr:mixin:node',
                    ])
                    ->overridable(true)
                    ->build(),
                /*
                 * The names of the fields this update event should apply changes to.
                 * Nested paths can be referenced using dot notation.
                 */
                Fb::create('paths', T\StringType::create())
                    ->asASet()
                    ->pattern('^[a-zA-Z_]{1}[\w\.]*$')
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
