// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/event/video-marked-as-pending/1-0-0.json#
import GdbotsNcrNodeMarkedAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-marked-as-pending/NodeMarkedAsPendingV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpVideoMarkedAsPendingV1Mixin from '@triniti/schemas/triniti/ovp/mixin/video-marked-as-pending/VideoMarkedAsPendingV1Mixin';

export default class VideoMarkedAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:event:video-marked-as-pending:1-0-0', VideoMarkedAsPendingV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeMarkedAsPendingV1Mixin.create(),
        TrinitiOvpVideoMarkedAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(VideoMarkedAsPendingV1);
MessageResolver.register('acme:ovp:event:video-marked-as-pending', VideoMarkedAsPendingV1);
Object.freeze(VideoMarkedAsPendingV1);
Object.freeze(VideoMarkedAsPendingV1.prototype);
