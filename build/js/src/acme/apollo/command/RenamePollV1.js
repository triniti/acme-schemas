// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/rename-poll/1-0-0.json#
import GdbotsNcrRenameNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/rename-node/RenameNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloRenamePollV1Mixin from '@triniti/schemas/triniti/apollo/mixin/rename-poll/RenamePollV1Mixin';

export default class RenamePollV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:command:rename-poll:1-0-0', RenamePollV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrRenameNodeV1Mixin.create(),
        TrinitiApolloRenamePollV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(RenamePollV1);
MessageResolver.register('acme:apollo:command:rename-poll', RenamePollV1);
Object.freeze(RenamePollV1);
Object.freeze(RenamePollV1.prototype);
