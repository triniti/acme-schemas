// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/delete-channel/1-0-0.json#
import GdbotsNcrDeleteNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/delete-node/DeleteNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyDeleteChannelV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/delete-channel/DeleteChannelV1Mixin';

export default class DeleteChannelV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:command:delete-channel:1-0-0', DeleteChannelV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrDeleteNodeV1Mixin.create(),
        TrinitiTaxonomyDeleteChannelV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(DeleteChannelV1);
MessageResolver.register('acme:taxonomy:command:delete-channel', DeleteChannelV1);
Object.freeze(DeleteChannelV1);
Object.freeze(DeleteChannelV1.prototype);
