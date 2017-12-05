// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/get-video-batch-request/1-0-0.json#
import GdbotsNcrGetNodeBatchRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-request/GetNodeBatchRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpGetVideoBatchRequestV1Mixin from '@triniti/schemas/triniti/ovp/mixin/get-video-batch-request/GetVideoBatchRequestV1Mixin';

export default class GetVideoBatchRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:videos:request:get-video-batch-request:1-0-0', GetVideoBatchRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeBatchRequestV1Mixin.create(),
        TrinitiOvpGetVideoBatchRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetVideoBatchRequestV1);
MessageResolver.register('acme:videos:request:get-video-batch-request', GetVideoBatchRequestV1);
Object.freeze(GetVideoBatchRequestV1);
Object.freeze(GetVideoBatchRequestV1.prototype);
