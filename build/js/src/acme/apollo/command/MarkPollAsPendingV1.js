// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/mark-poll-as-pending/1-0-0.json#
import GdbotsNcrMarkNodeAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/mark-node-as-pending/MarkNodeAsPendingV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloMarkPollAsPendingV1Mixin from '@triniti/schemas/triniti/apollo/mixin/mark-poll-as-pending/MarkPollAsPendingV1Mixin';

export default class MarkPollAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:command:mark-poll-as-pending:1-0-0', MarkPollAsPendingV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrMarkNodeAsPendingV1Mixin.create(),
        TrinitiApolloMarkPollAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(MarkPollAsPendingV1);
MessageResolver.register('acme:apollo:command:mark-poll-as-pending', MarkPollAsPendingV1);
Object.freeze(MarkPollAsPendingV1);
Object.freeze(MarkPollAsPendingV1.prototype);
