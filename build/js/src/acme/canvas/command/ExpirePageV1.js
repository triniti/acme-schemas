// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/command/expire-page/1-0-0.json#
import GdbotsNcrExpireNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expire-node/ExpireNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasExpirePageV1Mixin from '@triniti/schemas/triniti/canvas/mixin/expire-page/ExpirePageV1Mixin';

export default class ExpirePageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:expire-page:1-0-0', ExpirePageV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrExpireNodeV1Mixin.create(),
        TrinitiCanvasExpirePageV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(ExpirePageV1);
MessageResolver.register('acme:canvas:command:expire-page', ExpirePageV1);
Object.freeze(ExpirePageV1);
Object.freeze(ExpirePageV1.prototype);
