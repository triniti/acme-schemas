// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/request/get-page-history-response/1-0-0.json#
import GdbotsPbjxGetEventsResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-response/GetEventsResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasGetPageHistoryResponseV1Mixin from '@triniti/schemas/triniti/canvas/mixin/get-page-history-response/GetPageHistoryResponseV1Mixin';

export default class GetPageHistoryResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:request:get-page-history-response:1-0-0', GetPageHistoryResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsPbjxGetEventsResponseV1Mixin.create(),
        TrinitiCanvasGetPageHistoryResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetPageHistoryResponseV1);
MessageResolver.register('acme:canvas:request:get-page-history-response', GetPageHistoryResponseV1);
Object.freeze(GetPageHistoryResponseV1);
Object.freeze(GetPageHistoryResponseV1.prototype);
