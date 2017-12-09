// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/event/page-marked-as-pending/1-0-0.json#
import GdbotsNcrNodeMarkedAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-marked-as-pending/NodeMarkedAsPendingV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasPageMarkedAsPendingV1Mixin from '@triniti/schemas/triniti/canvas/mixin/page-marked-as-pending/PageMarkedAsPendingV1Mixin';

export default class PageMarkedAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:event:page-marked-as-pending:1-0-0', PageMarkedAsPendingV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeMarkedAsPendingV1Mixin.create(),
        TrinitiCanvasPageMarkedAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PageMarkedAsPendingV1);
MessageResolver.register('acme:canvas:event:page-marked-as-pending', PageMarkedAsPendingV1);
Object.freeze(PageMarkedAsPendingV1);
Object.freeze(PageMarkedAsPendingV1.prototype);
