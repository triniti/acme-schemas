// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/event/vote-casted/1-0-0.json#
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloVoteCastedV1Mixin from '@triniti/schemas/triniti/apollo/mixin/vote-casted/VoteCastedV1Mixin';

export default class VoteCastedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:event:vote-casted:1-0-0', VoteCastedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        TrinitiApolloVoteCastedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(VoteCastedV1);
MessageResolver.register('acme:apollo:event:vote-casted', VoteCastedV1);
Object.freeze(VoteCastedV1);
Object.freeze(VoteCastedV1.prototype);
