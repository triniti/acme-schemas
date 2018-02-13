// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/channel-updated/1-0-0.json#
import GdbotsNcrNodeUpdatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-updated/NodeUpdatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyChannelUpdatedV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/channel-updated/ChannelUpdatedV1Mixin';

export default class ChannelUpdatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:event:channel-updated:1-0-0', ChannelUpdatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeUpdatedV1Mixin.create(),
        TrinitiTaxonomyChannelUpdatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(ChannelUpdatedV1);
MessageResolver.register('acme:taxonomy:event:channel-updated', ChannelUpdatedV1);
Object.freeze(ChannelUpdatedV1);
Object.freeze(ChannelUpdatedV1.prototype);
