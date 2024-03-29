// @link http://acme-schemas.triniti.io/json-schema/acme/curator/request/get-timeline-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin.js';
import Message from '@gdbots/pbj/Message.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';

export default class GetTimelineRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('request_id', T.UuidType.create())
          .required()
          .build(),
        Fb.create('occurred_at', T.MicrotimeType.create())
          .build(),
        /*
         * Multi-tenant apps can use this field to track the tenant id.
         */
        Fb.create('ctx_tenant_id', T.StringType.create())
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        /*
         * The "ctx_retries" field is used to keep track of how many attempts were
         * made to handle this request. In some cases, the service or transport
         * that handles the request may be down or over capacity and is being retried.
         */
        Fb.create('ctx_retries', T.TinyIntType.create())
          .build(),
        Fb.create('ctx_causator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_correlator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_user_ref', T.MessageRefType.create())
          .build(),
        /*
         * The "ctx_app" refers to the application used to make the request. This is
         * different from ctx_ua (user_agent) because the agent used (Safari, Firefox)
         * is not necessarily the app used (cms, iOS app, website)
         */
        Fb.create('ctx_app', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::app',
          ])
          .build(),
        /*
         * The "ctx_cloud" is set by the server making the request and is generally
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
         * Field names to dereference, this serves as a hint to the server and is not
         * necessarily gauranteed since authorization, availability, etc. are determined
         * by the server not the client.
         */
        Fb.create('derefs', T.StringType.create())
          .asASet()
          .pattern('^[\\w\\.-]+$')
          .build(),
        /*
         * If true, a strongly consistent read is used; if false (the default), an eventually consistent read is used.
         */
        Fb.create('consistent_read', T.BooleanType.create())
          .build(),
        /*
         * When "node_ref" is supplied it SHOULD be used to perform the request.
         * The "node_ref" and "slug" are analogous to protobuf unions in that
         * only one of these should exist and the priority of selection is as
         * ordered in this schema.
         */
        Fb.create('node_ref', T.NodeRefType.create())
          .build(),
        /*
         * The "qname" field should be populated when the request is not
         * using "node_ref", e.g. "acme:article"
         */
        Fb.create('qname', T.StringType.create())
          .pattern('^[a-z0-9-]+:[a-z0-9-]+$')
          .build(),
        Fb.create('slug', T.StringType.create())
          .format(Format.SLUG)
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = GetTimelineRequestV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:acme:curator:request:get-timeline-request:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'acme:curator:request:get-timeline-request';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'acme:curator:request:get-timeline-request:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:request:v1',
  'gdbots:pbjx:mixin:request',
  'gdbots:ncr:mixin:get-node-request:v1',
  'gdbots:ncr:mixin:get-node-request',
];

GdbotsPbjxRequestV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
