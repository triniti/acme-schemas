// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/event/page-expired/1-0-0.json#
import GdbotsNcrNodeExpiredV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-expired/NodeExpiredV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasPageExpiredV1Mixin from '@triniti/schemas/triniti/canvas/mixin/page-expired/PageExpiredV1Mixin';

export default class PageExpiredV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:event:page-expired:1-0-0', PageExpiredV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeExpiredV1Mixin.create(),
        TrinitiCanvasPageExpiredV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PageExpiredV1);
MessageResolver.register('acme:canvas:event:page-expired', PageExpiredV1);
Object.freeze(PageExpiredV1);
Object.freeze(PageExpiredV1.prototype);
