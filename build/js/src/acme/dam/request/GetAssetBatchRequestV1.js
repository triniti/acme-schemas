// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-asset-batch-request/1-0-0.json#
import GdbotsNcrGetNodeBatchRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-request/GetNodeBatchRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamGetAssetBatchRequestV1Mixin from '@triniti/schemas/triniti/dam/mixin/get-asset-batch-request/GetAssetBatchRequestV1Mixin';

export default class GetAssetBatchRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:request:get-asset-batch-request:1-0-0', GetAssetBatchRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeBatchRequestV1Mixin.create(),
        TrinitiDamGetAssetBatchRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetAssetBatchRequestV1);
MessageResolver.register('acme:dam:request:get-asset-batch-request', GetAssetBatchRequestV1);
Object.freeze(GetAssetBatchRequestV1);
Object.freeze(GetAssetBatchRequestV1.prototype);
