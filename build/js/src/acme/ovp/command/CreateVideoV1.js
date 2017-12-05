// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/command/create-video/1-0-0.json#
import GdbotsNcrCreateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/create-node/CreateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpCreateVideoV1Mixin from '@triniti/schemas/triniti/ovp/mixin/create-video/CreateVideoV1Mixin';

export default class CreateVideoV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:command:create-video:1-0-0', CreateVideoV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrCreateNodeV1Mixin.create(),
        TrinitiOvpCreateVideoV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(CreateVideoV1);
MessageResolver.register('acme:ovp:command:create-video', CreateVideoV1);
Object.freeze(CreateVideoV1);
Object.freeze(CreateVideoV1.prototype);
