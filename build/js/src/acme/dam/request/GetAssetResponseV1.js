// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-asset-response/1-0-0.json#
import GdbotsNcrGetNodeResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-response/GetNodeResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamGetAssetResponseV1Mixin from '@triniti/schemas/triniti/dam/mixin/get-asset-response/GetAssetResponseV1Mixin';

export default class GetAssetResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:request:get-asset-response:1-0-0', GetAssetResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeResponseV1Mixin.create(),
        TrinitiDamGetAssetResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetAssetResponseV1);
MessageResolver.register('acme:dam:request:get-asset-response', GetAssetResponseV1);
Object.freeze(GetAssetResponseV1);
Object.freeze(GetAssetResponseV1.prototype);
