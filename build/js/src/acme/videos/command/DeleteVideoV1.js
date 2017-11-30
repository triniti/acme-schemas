// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/command/delete-video/1-0-0.json#
import GdbotsNcrDeleteNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/delete-node/DeleteNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiVideosDeleteVideoV1Mixin from '@triniti/schemas/triniti/videos/mixin/delete-video/DeleteVideoV1Mixin';

export default class DeleteVideoV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:videos:command:delete-video:1-0-0', DeleteVideoV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrDeleteNodeV1Mixin.create(),
        TrinitiVideosDeleteVideoV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(DeleteVideoV1);
MessageResolver.register('acme:videos:command:delete-video', DeleteVideoV1);
Object.freeze(DeleteVideoV1);
Object.freeze(DeleteVideoV1.prototype);
