// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/get-page-history-request/1-0-0.json#
import GdbotsPbjxGetEventsRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-request/GetEventsRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPagesGetPageHistoryRequestV1Mixin from '@triniti/schemas/triniti/pages/mixin/get-page-history-request/GetPageHistoryRequestV1Mixin';

export default class GetPageHistoryRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:pages:request:get-page-history-request:1-0-0', GetPageHistoryRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsPbjxGetEventsRequestV1Mixin.create(),
        TrinitiPagesGetPageHistoryRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetPageHistoryRequestV1);
MessageResolver.register('acme:pages:request:get-page-history-request', GetPageHistoryRequestV1);
Object.freeze(GetPageHistoryRequestV1);
Object.freeze(GetPageHistoryRequestV1.prototype);
