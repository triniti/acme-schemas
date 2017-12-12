// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/command/mark-page-as-draft/1-0-0.json#
import GdbotsNcrMarkNodeAsDraftV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/mark-node-as-draft/MarkNodeAsDraftV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasMarkPageAsDraftV1Mixin from '@triniti/schemas/triniti/canvas/mixin/mark-page-as-draft/MarkPageAsDraftV1Mixin';

export default class MarkPageAsDraftV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:mark-page-as-draft:1-0-0', MarkPageAsDraftV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrMarkNodeAsDraftV1Mixin.create(),
        TrinitiCanvasMarkPageAsDraftV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(MarkPageAsDraftV1);
MessageResolver.register('acme:canvas:command:mark-page-as-draft', MarkPageAsDraftV1);
Object.freeze(MarkPageAsDraftV1);
Object.freeze(MarkPageAsDraftV1.prototype);
