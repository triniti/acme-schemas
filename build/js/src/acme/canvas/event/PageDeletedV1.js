// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/event/page-deleted/1-0-0.json#
import GdbotsNcrNodeDeletedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-deleted/NodeDeletedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasPageDeletedV1Mixin from '@triniti/schemas/triniti/canvas/mixin/page-deleted/PageDeletedV1Mixin';

export default class PageDeletedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:event:page-deleted:1-0-0', PageDeletedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeDeletedV1Mixin.create(),
        TrinitiCanvasPageDeletedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PageDeletedV1);
MessageResolver.register('acme:canvas:event:page-deleted', PageDeletedV1);
Object.freeze(PageDeletedV1);
Object.freeze(PageDeletedV1.prototype);
