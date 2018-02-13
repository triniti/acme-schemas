// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/channel-renamed/1-0-0.json#
import GdbotsNcrNodeRenamedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-renamed/NodeRenamedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyChannelRenamedV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/channel-renamed/ChannelRenamedV1Mixin';

export default class ChannelRenamedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:event:channel-renamed:1-0-0', ChannelRenamedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeRenamedV1Mixin.create(),
        TrinitiTaxonomyChannelRenamedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(ChannelRenamedV1);
MessageResolver.register('acme:taxonomy:event:channel-renamed', ChannelRenamedV1);
Object.freeze(ChannelRenamedV1);
Object.freeze(ChannelRenamedV1.prototype);
