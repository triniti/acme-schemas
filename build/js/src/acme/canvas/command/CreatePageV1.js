// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/command/create-page/1-0-0.json#
import GdbotsNcrCreateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/create-node/CreateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasCreatePageV1Mixin from '@triniti/schemas/triniti/canvas/mixin/create-page/CreatePageV1Mixin';

export default class CreatePageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:create-page:1-0-0', CreatePageV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrCreateNodeV1Mixin.create(),
        TrinitiCanvasCreatePageV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(CreatePageV1);
MessageResolver.register('acme:canvas:command:create-page', CreatePageV1);
Object.freeze(CreatePageV1);
Object.freeze(CreatePageV1.prototype);
