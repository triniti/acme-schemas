// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/update-channel/1-0-0.json#
import GdbotsNcrUpdateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/update-node/UpdateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyUpdateChannelV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/update-channel/UpdateChannelV1Mixin';

export default class UpdateChannelV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:command:update-channel:1-0-0', UpdateChannelV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUpdateNodeV1Mixin.create(),
        TrinitiTaxonomyUpdateChannelV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UpdateChannelV1);
MessageResolver.register('acme:taxonomy:command:update-channel', UpdateChannelV1);
Object.freeze(UpdateChannelV1);
Object.freeze(UpdateChannelV1.prototype);
