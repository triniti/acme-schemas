// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-asset-history-response/1-0-0.json#
import GdbotsPbjxGetEventsResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-response/GetEventsResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamGetAssetHistoryResponseV1Mixin from '@triniti/schemas/triniti/dam/mixin/get-asset-history-response/GetAssetHistoryResponseV1Mixin';

export default class GetAssetHistoryResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:request:get-asset-history-response:1-0-0', GetAssetHistoryResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsPbjxGetEventsResponseV1Mixin.create(),
        TrinitiDamGetAssetHistoryResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetAssetHistoryResponseV1);
MessageResolver.register('acme:dam:request:get-asset-history-response', GetAssetHistoryResponseV1);
Object.freeze(GetAssetHistoryResponseV1);
Object.freeze(GetAssetHistoryResponseV1.prototype);
