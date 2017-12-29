// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/unpublish-poll/1-0-0.json#
import GdbotsNcrUnpublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/unpublish-node/UnpublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloUnpublishPollV1Mixin from '@triniti/schemas/triniti/apollo/mixin/unpublish-poll/UnpublishPollV1Mixin';

export default class UnpublishPollV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:command:unpublish-poll:1-0-0', UnpublishPollV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUnpublishNodeV1Mixin.create(),
        TrinitiApolloUnpublishPollV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UnpublishPollV1);
MessageResolver.register('acme:apollo:command:unpublish-poll', UnpublishPollV1);
Object.freeze(UnpublishPollV1);
Object.freeze(UnpublishPollV1.prototype);
