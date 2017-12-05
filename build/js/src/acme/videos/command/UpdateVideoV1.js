// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/command/update-video/1-0-0.json#
import GdbotsNcrUpdateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/update-node/UpdateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpUpdateVideoV1Mixin from '@triniti/schemas/triniti/ovp/mixin/update-video/UpdateVideoV1Mixin';

export default class UpdateVideoV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:videos:command:update-video:1-0-0', UpdateVideoV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUpdateNodeV1Mixin.create(),
        TrinitiOvpUpdateVideoV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UpdateVideoV1);
MessageResolver.register('acme:videos:command:update-video', UpdateVideoV1);
Object.freeze(UpdateVideoV1);
Object.freeze(UpdateVideoV1.prototype);
