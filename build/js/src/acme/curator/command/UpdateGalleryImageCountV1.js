// @link http://acme-schemas.triniti.io/json-schema/acme/curator/command/update-gallery-image-count/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin.js';
import Message from '@gdbots/pbj/Message.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';

export default class UpdateGalleryImageCountV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('command_id', T.TimeUuidType.create())
          .required()
          .build(),
        Fb.create('occurred_at', T.MicrotimeType.create())
          .build(),
        /*
         * Used to perform optimistic concurrency control.
         * @link https://en.wikipedia.org/wiki/HTTP_ETag
         */
        Fb.create('expected_etag', T.StringType.create())
          .maxLength(100)
          .pattern('^[\\w\\.:-]+$')
          .build(),
        /*
         * Multi-tenant apps can use this field to track the tenant id.
         */
        Fb.create('ctx_tenant_id', T.StringType.create())
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        /*
         * The "ctx_retries" field is used to keep track of how many attempts were
         * made to process this command. In some cases, the service or transport
         * that handles the command may be down or an optimistic check has failed
         * and is being retried.
         */
        Fb.create('ctx_retries', T.TinyIntType.create())
          .build(),
        /*
         * The "ctx_causator" is the actual causator object that "ctx_causator_ref"
         * refers to. In some cases it's useful for command handlers to copy the
         * causator into the command. For example, when a node is being updated we
         * may want to know what the node will be after the update. We can derive
         * this via the causator instead of requesting the node and engaging a race
         * condition.
         */
        Fb.create('ctx_causator', T.MessageType.create())
          .build(),
        Fb.create('ctx_causator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_correlator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_user_ref', T.MessageRefType.create())
          .build(),
        /*
         * The "ctx_app" refers to the application used to send the command. This is
         * different from ctx_ua (user_agent) because the agent used (Safari, Firefox)
         * is not necessarily the app used (cms, iOS app, website)
         */
        Fb.create('ctx_app', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::app',
          ])
          .build(),
        /*
         * The "ctx_cloud" is set by the server receiving the command and is generally
         * only used internally for tracking and performance monitoring.
         */
        Fb.create('ctx_cloud', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::cloud',
          ])
          .build(),
        Fb.create('ctx_ip', T.StringType.create())
          .format(Format.IPV4)
          .overridable(true)
          .build(),
        Fb.create('ctx_ipv6', T.StringType.create())
          .format(Format.IPV6)
          .overridable(true)
          .build(),
        Fb.create('ctx_ua', T.TextType.create())
          .overridable(true)
          .build(),
        /*
         * An optional message/reason for the command being sent.
         * Consider this like a git commit message.
         */
        Fb.create('ctx_msg', T.TextType.create())
          .build(),
        /*
         * A reference to the gallery to update.
         */
        Fb.create('node_ref', T.NodeRefType.create())
          .required()
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = UpdateGalleryImageCountV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:acme:curator:command:update-gallery-image-count:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'acme:curator:command:update-gallery-image-count';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'acme:curator:command:update-gallery-image-count:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:command:v1',
  'gdbots:pbjx:mixin:command',
  'triniti:curator:mixin:update-gallery-image-count:v1',
  'triniti:curator:mixin:update-gallery-image-count',
];

GdbotsPbjxCommandV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
