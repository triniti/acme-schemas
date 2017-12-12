// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/command/update-page/1-0-0.json#
import GdbotsNcrUpdateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/update-node/UpdateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasUpdatePageV1Mixin from '@triniti/schemas/triniti/canvas/mixin/update-page/UpdatePageV1Mixin';

export default class UpdatePageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:update-page:1-0-0', UpdatePageV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUpdateNodeV1Mixin.create(),
        TrinitiCanvasUpdatePageV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UpdatePageV1);
MessageResolver.register('acme:canvas:command:update-page', UpdatePageV1);
Object.freeze(UpdatePageV1);
Object.freeze(UpdatePageV1.prototype);
