// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/event/poll-created/1-0-0.json#
import GdbotsNcrNodeCreatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-created/NodeCreatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloPollCreatedV1Mixin from '@triniti/schemas/triniti/apollo/mixin/poll-created/PollCreatedV1Mixin';

export default class PollCreatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:event:poll-created:1-0-0', PollCreatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeCreatedV1Mixin.create(),
        TrinitiApolloPollCreatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PollCreatedV1);
MessageResolver.register('acme:apollo:event:poll-created', PollCreatedV1);
Object.freeze(PollCreatedV1);
Object.freeze(PollCreatedV1.prototype);
