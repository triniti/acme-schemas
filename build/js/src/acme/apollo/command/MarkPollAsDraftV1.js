// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/command/mark-poll-as-draft/1-0-0.json#
import GdbotsNcrMarkNodeAsDraftV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/mark-node-as-draft/MarkNodeAsDraftV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloMarkPollAsDraftV1Mixin from '@triniti/schemas/triniti/apollo/mixin/mark-poll-as-draft/MarkPollAsDraftV1Mixin';

export default class MarkPollAsDraftV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:command:mark-poll-as-draft:1-0-0', MarkPollAsDraftV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrMarkNodeAsDraftV1Mixin.create(),
        TrinitiApolloMarkPollAsDraftV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(MarkPollAsDraftV1);
MessageResolver.register('acme:apollo:command:mark-poll-as-draft', MarkPollAsDraftV1);
Object.freeze(MarkPollAsDraftV1);
Object.freeze(MarkPollAsDraftV1.prototype);
