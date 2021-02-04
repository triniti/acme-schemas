// @link http://acme-schemas.triniti.io/json-schema/acme/curator/request/get-gallery-history-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import Message from '@gdbots/pbj/Message';
import Schema from '@gdbots/pbj/Schema';
import StreamId from '@gdbots/schemas/gdbots/pbjx/StreamId';
import T from '@gdbots/pbj/types';

export default class GetGalleryHistoryRequestV1 extends Message {
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
        Fb.create('stream_id', T.IdentifierType.create())
          .required()
          .classProto(StreamId)
          .build(),
        /*
         * Return events since this time (exclusive greater than if forward=true, less than if forward=false)
         */
        Fb.create('since', T.MicrotimeType.create())
          .useTypeDefault(false)
          .build(),
        /*
         * The number of events to return.
         */
        Fb.create('count', T.TinyIntType.create())
          .withDefault(25)
          .build(),
        /*
         * When true, the events are read from oldest to newest, otherwise newest to oldest.
         */
        Fb.create('forward', T.BooleanType.create())
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = GetGalleryHistoryRequestV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:acme:curator:request:get-gallery-history-request:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'acme:curator:request:get-gallery-history-request';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'acme:curator:request:get-gallery-history-request:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:request:v1',
  'gdbots:pbjx:mixin:request',
  'gdbots:pbjx:mixin:get-events-request:v1',
  'gdbots:pbjx:mixin:get-events-request',
];

GdbotsPbjxRequestV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
