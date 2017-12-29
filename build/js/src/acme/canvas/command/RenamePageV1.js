// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/command/rename-page/1-0-0.json#
import GdbotsNcrRenameNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/rename-node/RenameNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasRenamePageV1Mixin from '@triniti/schemas/triniti/canvas/mixin/rename-page/RenamePageV1Mixin';

export default class RenamePageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:rename-page:1-0-0', RenamePageV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrRenameNodeV1Mixin.create(),
        TrinitiCanvasRenamePageV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(RenamePageV1);
MessageResolver.register('acme:canvas:command:rename-page', RenamePageV1);
Object.freeze(RenamePageV1);
Object.freeze(RenamePageV1.prototype);