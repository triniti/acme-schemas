// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/event/poll-marked-as-draft/1-0-0.json#
import GdbotsNcrNodeMarkedAsDraftV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-marked-as-draft/NodeMarkedAsDraftV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloPollMarkedAsDraftV1Mixin from '@triniti/schemas/triniti/apollo/mixin/poll-marked-as-draft/PollMarkedAsDraftV1Mixin';

export default class PollMarkedAsDraftV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:event:poll-marked-as-draft:1-0-0', PollMarkedAsDraftV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeMarkedAsDraftV1Mixin.create(),
        TrinitiApolloPollMarkedAsDraftV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PollMarkedAsDraftV1);
MessageResolver.register('acme:apollo:event:poll-marked-as-draft', PollMarkedAsDraftV1);
Object.freeze(PollMarkedAsDraftV1);
Object.freeze(PollMarkedAsDraftV1.prototype);
