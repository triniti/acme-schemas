// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/command/publish-page/1-0-0.json#
import GdbotsNcrPublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publish-node/PublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasPublishPageV1Mixin from '@triniti/schemas/triniti/canvas/mixin/publish-page/PublishPageV1Mixin';

export default class PublishPageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:command:publish-page:1-0-0', PublishPageV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrPublishNodeV1Mixin.create(),
        TrinitiCanvasPublishPageV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(PublishPageV1);
MessageResolver.register('acme:canvas:command:publish-page', PublishPageV1);
Object.freeze(PublishPageV1);
Object.freeze(PublishPageV1.prototype);
