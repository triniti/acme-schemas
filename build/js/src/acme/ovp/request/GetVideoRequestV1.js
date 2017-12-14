// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/request/get-video-request/1-0-0.json#
import GdbotsNcrGetNodeRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-request/GetNodeRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpGetVideoRequestV1Mixin from '@triniti/schemas/triniti/ovp/mixin/get-video-request/GetVideoRequestV1Mixin';

export default class GetVideoRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:request:get-video-request:1-0-0', GetVideoRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeRequestV1Mixin.create(),
        TrinitiOvpGetVideoRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetVideoRequestV1);
MessageResolver.register('acme:ovp:request:get-video-request', GetVideoRequestV1);
Object.freeze(GetVideoRequestV1);
Object.freeze(GetVideoRequestV1.prototype);