// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/get-video-response/1-0-0.json#
import GdbotsNcrGetNodeResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-response/GetNodeResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiVideosGetVideoResponseV1Mixin from '@triniti/schemas/triniti/videos/mixin/get-video-response/GetVideoResponseV1Mixin';

export default class GetVideoResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:videos:request:get-video-response:1-0-0', GetVideoResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeResponseV1Mixin.create(),
        TrinitiVideosGetVideoResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetVideoResponseV1);
MessageResolver.register('acme:videos:request:get-video-response', GetVideoResponseV1);
Object.freeze(GetVideoResponseV1);
Object.freeze(GetVideoResponseV1.prototype);
