// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-asset-history-request/1-0-0.json#
import GdbotsPbjxGetEventsRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-request/GetEventsRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamGetAssetHistoryRequestV1Mixin from '@triniti/schemas/triniti/dam/mixin/get-asset-history-request/GetAssetHistoryRequestV1Mixin';

export default class GetAssetHistoryRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:request:get-asset-history-request:1-0-0', GetAssetHistoryRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsPbjxGetEventsRequestV1Mixin.create(),
        TrinitiDamGetAssetHistoryRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetAssetHistoryRequestV1);
MessageResolver.register('acme:dam:request:get-asset-history-request', GetAssetHistoryRequestV1);
Object.freeze(GetAssetHistoryRequestV1);
Object.freeze(GetAssetHistoryRequestV1.prototype);