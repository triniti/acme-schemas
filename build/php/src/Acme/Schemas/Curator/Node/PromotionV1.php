<?php
declare(strict_types=1);

// @link http://acme-schemas.triniti.io/json-schema/acme/curator/node/promotion/1-0-0.json#
namespace Acme\Schemas\Curator\Node;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Triniti\Schemas\Curator\Mixin\Promotion\PromotionV1Mixin as TrinitiCuratorPromotionV1Mixin;

final class PromotionV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:acme:curator:node:promotion:1-0-0';
    const SCHEMA_CURIE = 'acme:curator:node:promotion';
    const SCHEMA_CURIE_MAJOR = 'acme:curator:node:promotion:v1';
    const MIXINS = [
      'gdbots:ncr:mixin:node:v1',
      'gdbots:ncr:mixin:node',
      'triniti:curator:mixin:promotion:v1',
      'triniti:curator:mixin:promotion',
      'gdbots:common:mixin:taggable:v1',
      'gdbots:common:mixin:taggable',
      'gdbots:ncr:mixin:expirable:v1',
      'gdbots:ncr:mixin:expirable',
      'gdbots:ncr:mixin:publishable:v1',
      'gdbots:ncr:mixin:publishable',
    ];

    use GdbotsNcrNodeV1Mixin;

    use TrinitiCuratorPromotionV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                /*
                 * The "_id" value:
                 * - MUST NOT change for the life of the node.
                 * - SHOULD be globally unique
                 * - SHOULD be generated by the app (ideally in default value closure... e.g. UuidIdentifier::generate())
                 */
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return UuidIdentifier::generate(); })
                    ->className(UuidIdentifier::class)
                    ->overridable(true)
                    ->build(),
                Fb::create('status', T\StringEnumType::create())
                    ->withDefault("draft")
                    ->className(NodeStatus::class)
                    ->build(),
                Fb::create('etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                Fb::create('created_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * A fully qualified reference to what created this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that creates nodes, not a user.
                 */
                Fb::create('creator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('updated_at', T\MicrotimeType::create())
                    ->useTypeDefault(false)
                    ->build(),
                /*
                 * A fully qualified reference to what updated this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that updates nodes, not a user.
                 * E.g. "acme:iam:node:app:cli-scheduler" or "acme:iam:node:user:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('updater_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * A reference to the last event that changed the state of this node.
                 * E.g. "acme:blog:event:article-published:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('last_event_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('title', T\StringType::create())
                    ->build(),
                /*
                 * The name of the location where the promotion should render,
                 * e.g. "desktop-home-sidebar" or "smartphone-global-html-head".
                 */
                Fb::create('slot', T\StringType::create())
                    ->format(Format::SLUG)
                    ->build(),
                /*
                 * If multiple promotions can render in a given slot at the same
                 * time then the one with the higher priority takes precedence.
                 */
                Fb::create('priority', T\SmallIntType::create())
                    ->build(),
                Fb::create('mon_start_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('mon_end_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('tue_start_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('tue_end_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('wed_start_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('wed_end_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('thu_start_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('thu_end_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('fri_start_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('fri_end_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('sat_start_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('sat_end_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('sun_start_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                Fb::create('sun_end_at', T\StringType::create())
                    ->pattern('^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$')
                    ->build(),
                /*
                 * A string containing HTML that is injected into
                 * the application before the widgets render.
                 */
                Fb::create('pre_render_code', T\TextType::create())
                    ->build(),
                /*
                 * A string containing HTML that is injected into
                 * the application after the widgets render.
                 */
                Fb::create('post_render_code', T\TextType::create())
                    ->build(),
                /*
                 * A list of widget node refs that this promotion will render.
                 */
                Fb::create('widget_refs', T\NodeRefType::create())
                    ->asAList()
                    ->build(),
                Fb::create('slots', T\MessageType::create())
                    ->asAList()
                    ->anyOfCuries([
                        'triniti:curator::slot',
                    ])
                    ->build(),
                /*
                 * Tags is a map that categorizes data or tracks references in
                 * external systems. The tags names should be consistent and descriptive,
                 * e.g. fb_user_id:123, salesforce_customer_id:456.
                 */
                Fb::create('tags', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('expires_at', T\DateTimeType::create())
                    ->build(),
                Fb::create('published_at', T\DateTimeType::create())
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
