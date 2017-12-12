// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/command/unpublish-page/1-0-0.json#
import GdbotsNcrUnpublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/unpublish-node/UnpublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasUnpublishPageV1Mixin from '@triniti/schemas/triniti/canvas/mixin/unpublish-page/UnpublishPageV1Mixin';

export default class UnpublishPageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:unpublish-page:1-0-0', UnpublishPageV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUnpublishNodeV1Mixin.create(),
        TrinitiCanvasUnpublishPageV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UnpublishPageV1);
MessageResolver.register('acme:canvas:command:unpublish-page', UnpublishPageV1);
Object.freeze(UnpublishPageV1);
Object.freeze(UnpublishPageV1.prototype);
