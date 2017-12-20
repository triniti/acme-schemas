// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/event/poll-renamed/1-0-0.json#
import GdbotsNcrNodeRenamedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-renamed/NodeRenamedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloPollRenamedV1Mixin from '@triniti/schemas/triniti/apollo/mixin/poll-renamed/PollRenamedV1Mixin';

export default class PollRenamedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:event:poll-renamed:1-0-0', PollRenamedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeRenamedV1Mixin.create(),
        TrinitiApolloPollRenamedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PollRenamedV1);
MessageResolver.register('acme:apollo:event:poll-renamed', PollRenamedV1);
Object.freeze(PollRenamedV1);
Object.freeze(PollRenamedV1.prototype);
