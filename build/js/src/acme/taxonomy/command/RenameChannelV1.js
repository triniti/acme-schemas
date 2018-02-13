// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/rename-channel/1-0-0.json#
import GdbotsNcrRenameNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/rename-node/RenameNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyRenameChannelV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/rename-channel/RenameChannelV1Mixin';

export default class RenameChannelV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:command:rename-channel:1-0-0', RenameChannelV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrRenameNodeV1Mixin.create(),
        TrinitiTaxonomyRenameChannelV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(RenameChannelV1);
MessageResolver.register('acme:taxonomy:command:rename-channel', RenameChannelV1);
Object.freeze(RenameChannelV1);
Object.freeze(RenameChannelV1.prototype);
