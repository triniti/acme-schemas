// @link http://acme-schemas.triniti.io/json-schema/acme/dam/node/unknown-asset/1-0-0.json#
import AssetId from '@triniti/schemas/triniti/dam/AssetId.js';
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin.js';
import Message from '@gdbots/pbj/Message.js';
import NodeStatus from '@gdbots/schemas/gdbots/ncr/enums/NodeStatus.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';
import TrinitiDamUnknownAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/unknown-asset/UnknownAssetV1Mixin.js';

export default class UnknownAssetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('_id', T.IdentifierType.create())
          .required()
          .classProto(AssetId)
          .build(),
        Fb.create('status', T.StringEnumType.create())
          .withDefault("draft")
          .classProto(NodeStatus)
          .build(),
        Fb.create('etag', T.StringType.create())
          .maxLength(100)
          .pattern('^[\\w\\.:-]+$')
          .build(),
        Fb.create('created_at', T.MicrotimeType.create())
          .build(),
        /*
         * A fully qualified reference to what created this node. This is intentionally a message-ref
         * and not a user id because it is often a program that creates nodes, not a user.
         */
        Fb.create('creator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('updated_at', T.MicrotimeType.create())
          .useTypeDefault(false)
          .build(),
        /*
         * A fully qualified reference to what updated this node. This is intentionally a message-ref
         * and not a user id because it is often a program that updates nodes, not a user.
         * E.g. "acme:iam:node:app:cli-scheduler" or "acme:iam:node:user:60c71df0-fda8-11e5-bfb9-30342d363854"
         */
        Fb.create('updater_ref', T.MessageRefType.create())
          .build(),
        /*
         * A reference to the last event that changed the state of this node.
         * E.g. "acme:blog:event:article-published:60c71df0-fda8-11e5-bfb9-30342d363854"
         */
        Fb.create('last_event_ref', T.MessageRefType.create())
          .build(),
        Fb.create('title', T.StringType.create())
          .build(),
        Fb.create('display_title', T.StringType.create())
          .build(),
        Fb.create('mime_type', T.StringType.create())
          .required()
          .pattern('^[\\w-]+\\/[\\w\\+\\.-]+$')
          .build(),
        /*
         * The file size in bytes.
         */
        Fb.create('file_size', T.BigIntType.create())
          .build(),
        /*
         * An etag created from the file itself. The file etag is different from the
         * node's etag because the node tracks metadata, which can be updated without
         * the file being changed.
         */
        Fb.create('file_etag', T.StringType.create())
          .maxLength(100)
          .pattern('^[\\w\\.:-]+$')
          .build(),
        /*
         * A description of the asset (usually a few sentences). It should typically
         * not have HTML as it is used in metadata, feeds, SERP and social.
         */
        Fb.create('description', T.TextType.create())
          .maxLength(5000)
          .build(),
        /*
         * A credit is a short string used to publicly acknowledge the source/creator
         * of the asset. e.g. "Fox News", "CNN".
         */
        Fb.create('credit', T.StringType.create())
          .build(),
        /*
         * A URL to link to the credit source.
         */
        Fb.create('credit_url', T.TextType.create())
          .format(Format.URL)
          .build(),
        /*
         * Call to action text. e.g. "Click here"
         */
        Fb.create('cta_text', T.StringType.create())
          .build(),
        /*
         * A URL to link with the call to action text.
         */
        Fb.create('cta_url', T.TextType.create())
          .format(Format.URL)
          .build(),
        /*
         * A set of node refs which have been linked to this asset.
         */
        Fb.create('linked_refs', T.NodeRefType.create())
          .asASet()
          .build(),
        /*
         * A node ref referencing the gallery where the asset is used.
         */
        Fb.create('gallery_ref', T.NodeRefType.create())
          .build(),
        /*
         * An integer value representing the order in which this asset will appear in a gallery.
         */
        Fb.create('gallery_seq', T.IntType.create())
          .build(),
        /*
         * Tags is a map that categorizes data or tracks references in
         * external systems. The tags names should be consistent and descriptive,
         * e.g. fb_user_id:123, salesforce_customer_id:456.
         */
        Fb.create('tags', T.StringType.create())
          .asAMap()
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        Fb.create('expires_at', T.DateTimeType.create())
          .build(),
        Fb.create('hashtags', T.StringType.create())
          .asASet()
          .format(Format.HASHTAG)
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = UnknownAssetV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:acme:dam:node:unknown-asset:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'acme:dam:node:unknown-asset';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'acme:dam:node:unknown-asset:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:ncr:mixin:node:v1',
  'gdbots:ncr:mixin:node',
  'triniti:dam:mixin:asset:v1',
  'triniti:dam:mixin:asset',
  'triniti:dam:mixin:unknown-asset:v1',
  'triniti:dam:mixin:unknown-asset',
  'gdbots:common:mixin:taggable:v1',
  'gdbots:common:mixin:taggable',
  'gdbots:ncr:mixin:expirable:v1',
  'gdbots:ncr:mixin:expirable',
  'triniti:taxonomy:mixin:hashtaggable:v1',
  'triniti:taxonomy:mixin:hashtaggable',
];

GdbotsNcrNodeV1Mixin(M);

TrinitiDamUnknownAssetV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
