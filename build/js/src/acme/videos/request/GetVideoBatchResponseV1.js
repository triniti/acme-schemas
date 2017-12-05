// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/get-video-batch-response/1-0-0.json#
import GdbotsNcrGetNodeBatchResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-response/GetNodeBatchResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpGetVideoBatchResponseV1Mixin from '@triniti/schemas/triniti/ovp/mixin/get-video-batch-response/GetVideoBatchResponseV1Mixin';

export default class GetVideoBatchResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:videos:request:get-video-batch-response:1-0-0', GetVideoBatchResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeBatchResponseV1Mixin.create(),
        TrinitiOvpGetVideoBatchResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetVideoBatchResponseV1);
MessageResolver.register('acme:videos:request:get-video-batch-response', GetVideoBatchResponseV1);
Object.freeze(GetVideoBatchResponseV1);
Object.freeze(GetVideoBatchResponseV1.prototype);
