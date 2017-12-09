// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/command/expire-video/1-0-0.json#
import GdbotsNcrExpireNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expire-node/ExpireNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpExpireVideoV1Mixin from '@triniti/schemas/triniti/ovp/mixin/expire-video/ExpireVideoV1Mixin';

export default class ExpireVideoV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:command:expire-video:1-0-0', ExpireVideoV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrExpireNodeV1Mixin.create(),
        TrinitiOvpExpireVideoV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(ExpireVideoV1);
MessageResolver.register('acme:ovp:command:expire-video', ExpireVideoV1);
Object.freeze(ExpireVideoV1);
Object.freeze(ExpireVideoV1.prototype);
