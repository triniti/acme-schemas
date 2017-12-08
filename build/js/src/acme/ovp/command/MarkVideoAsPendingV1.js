// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/command/mark-video-as-pending/1-0-0.json#
import GdbotsNcrMarkNodeAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/mark-node-as-pending/MarkNodeAsPendingV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpMarkVideoAsPendingV1Mixin from '@triniti/schemas/triniti/ovp/mixin/mark-video-as-pending/MarkVideoAsPendingV1Mixin';

export default class MarkVideoAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:command:mark-video-as-pending:1-0-0', MarkVideoAsPendingV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrMarkNodeAsPendingV1Mixin.create(),
        TrinitiOvpMarkVideoAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(MarkVideoAsPendingV1);
MessageResolver.register('acme:ovp:command:mark-video-as-pending', MarkVideoAsPendingV1);
Object.freeze(MarkVideoAsPendingV1);
Object.freeze(MarkVideoAsPendingV1.prototype);
