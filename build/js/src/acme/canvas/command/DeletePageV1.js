// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/command/delete-page/1-0-0.json#
import GdbotsNcrDeleteNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/delete-node/DeleteNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasDeletePageV1Mixin from '@triniti/schemas/triniti/canvas/mixin/delete-page/DeletePageV1Mixin';

export default class DeletePageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:delete-page:1-0-0', DeletePageV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrDeleteNodeV1Mixin.create(),
        TrinitiCanvasDeletePageV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(DeletePageV1);
MessageResolver.register('acme:canvas:command:delete-page', DeletePageV1);
Object.freeze(DeletePageV1);
Object.freeze(DeletePageV1.prototype);
