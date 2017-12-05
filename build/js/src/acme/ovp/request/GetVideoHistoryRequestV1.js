// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/request/get-video-history-request/1-0-0.json#
import GdbotsPbjxGetEventsRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-request/GetEventsRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpGetVideoHistoryRequestV1Mixin from '@triniti/schemas/triniti/ovp/mixin/get-video-history-request/GetVideoHistoryRequestV1Mixin';

export default class GetVideoHistoryRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:request:get-video-history-request:1-0-0', GetVideoHistoryRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsPbjxGetEventsRequestV1Mixin.create(),
        TrinitiOvpGetVideoHistoryRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetVideoHistoryRequestV1);
MessageResolver.register('acme:ovp:request:get-video-history-request', GetVideoHistoryRequestV1);
Object.freeze(GetVideoHistoryRequestV1);
Object.freeze(GetVideoHistoryRequestV1.prototype);
