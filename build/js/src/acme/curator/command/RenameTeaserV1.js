// @link http://acme-schemas.triniti.io/json-schema/acme/curator/command/rename-teaser/1-0-0.json#
import GdbotsNcrRenameNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/rename-node/RenameNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class RenameTeaserV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:curator:command:rename-teaser:1-0-0', RenameTeaserV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrRenameNodeV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(RenameTeaserV1);
MessageResolver.register('acme:curator:command:rename-teaser', RenameTeaserV1);
Object.freeze(RenameTeaserV1);
Object.freeze(RenameTeaserV1.prototype);
