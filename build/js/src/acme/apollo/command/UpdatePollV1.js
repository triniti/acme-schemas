// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/update-poll/1-0-0.json#
import GdbotsNcrUpdateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/update-node/UpdateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloUpdatePollV1Mixin from '@triniti/schemas/triniti/apollo/mixin/update-poll/UpdatePollV1Mixin';

export default class UpdatePollV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:command:update-poll:1-0-0', UpdatePollV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUpdateNodeV1Mixin.create(),
        TrinitiApolloUpdatePollV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UpdatePollV1);
MessageResolver.register('acme:apollo:command:update-poll', UpdatePollV1);
Object.freeze(UpdatePollV1);
Object.freeze(UpdatePollV1.prototype);
