// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/event/video-expired/1-0-0.json#
import GdbotsNcrNodeExpiredV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-expired/NodeExpiredV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpVideoExpiredV1Mixin from '@triniti/schemas/triniti/ovp/mixin/video-expired/VideoExpiredV1Mixin';

export default class VideoExpiredV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:event:video-expired:1-0-0', VideoExpiredV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeExpiredV1Mixin.create(),
        TrinitiOvpVideoExpiredV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(VideoExpiredV1);
MessageResolver.register('acme:ovp:event:video-expired', VideoExpiredV1);
Object.freeze(VideoExpiredV1);
Object.freeze(VideoExpiredV1.prototype);
