// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/cast-vote/1-0-0.json#
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloCastVoteV1Mixin from '@triniti/schemas/triniti/apollo/mixin/cast-vote/CastVoteV1Mixin';

export default class CastVoteV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:command:cast-vote:1-0-0', CastVoteV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        TrinitiApolloCastVoteV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(CastVoteV1);
MessageResolver.register('acme:apollo:command:cast-vote', CastVoteV1);
Object.freeze(CastVoteV1);
Object.freeze(CastVoteV1.prototype);