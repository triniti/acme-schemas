// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/command/mark-page-as-pending/1-0-0.json#
import GdbotsNcrMarkNodeAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/mark-node-as-pending/MarkNodeAsPendingV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasMarkPageAsPendingV1Mixin from '@triniti/schemas/triniti/canvas/mixin/mark-page-as-pending/MarkPageAsPendingV1Mixin';

export default class MarkPageAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:mark-page-as-pending:1-0-0', MarkPageAsPendingV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrMarkNodeAsPendingV1Mixin.create(),
        TrinitiCanvasMarkPageAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(MarkPageAsPendingV1);
MessageResolver.register('acme:canvas:command:mark-page-as-pending', MarkPageAsPendingV1);
Object.freeze(MarkPageAsPendingV1);
Object.freeze(MarkPageAsPendingV1.prototype);
