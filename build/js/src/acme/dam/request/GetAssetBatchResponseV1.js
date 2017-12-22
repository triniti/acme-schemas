// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-asset-batch-response/1-0-0.json#
import GdbotsNcrGetNodeBatchResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-response/GetNodeBatchResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamGetAssetBatchResponseV1Mixin from '@triniti/schemas/triniti/dam/mixin/get-asset-batch-response/GetAssetBatchResponseV1Mixin';

export default class GetAssetBatchResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:request:get-asset-batch-response:1-0-0', GetAssetBatchResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeBatchResponseV1Mixin.create(),
        TrinitiDamGetAssetBatchResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetAssetBatchResponseV1);
MessageResolver.register('acme:dam:request:get-asset-batch-response', GetAssetBatchResponseV1);
Object.freeze(GetAssetBatchResponseV1);
Object.freeze(GetAssetBatchResponseV1.prototype);
