// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/event/video-deleted/1-0-0.json#
import GdbotsNcrNodeDeletedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-deleted/NodeDeletedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpVideoDeletedV1Mixin from '@triniti/schemas/triniti/ovp/mixin/video-deleted/VideoDeletedV1Mixin';

export default class VideoDeletedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:event:video-deleted:1-0-0', VideoDeletedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeDeletedV1Mixin.create(),
        TrinitiOvpVideoDeletedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(VideoDeletedV1);
MessageResolver.register('acme:ovp:event:video-deleted', VideoDeletedV1);
Object.freeze(VideoDeletedV1);
Object.freeze(VideoDeletedV1.prototype);
