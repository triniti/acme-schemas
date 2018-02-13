// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-channel-history-request/1-0-0.json#
import GdbotsPbjxGetEventsRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-request/GetEventsRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyGetChannelHistoryRequestV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/get-channel-history-request/GetChannelHistoryRequestV1Mixin';

export default class GetChannelHistoryRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:request:get-channel-history-request:1-0-0', GetChannelHistoryRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsPbjxGetEventsRequestV1Mixin.create(),
        TrinitiTaxonomyGetChannelHistoryRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetChannelHistoryRequestV1);
MessageResolver.register('acme:taxonomy:request:get-channel-history-request', GetChannelHistoryRequestV1);
Object.freeze(GetChannelHistoryRequestV1);
Object.freeze(GetChannelHistoryRequestV1.prototype);
