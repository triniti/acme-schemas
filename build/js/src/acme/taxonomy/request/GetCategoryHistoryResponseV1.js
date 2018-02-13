// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-category-history-response/1-0-0.json#
import GdbotsPbjxGetEventsResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-response/GetEventsResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyGetCategoryHistoryResponseV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/get-category-history-response/GetCategoryHistoryResponseV1Mixin';

export default class GetCategoryHistoryResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:request:get-category-history-response:1-0-0', GetCategoryHistoryResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsPbjxGetEventsResponseV1Mixin.create(),
        TrinitiTaxonomyGetCategoryHistoryResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetCategoryHistoryResponseV1);
MessageResolver.register('acme:taxonomy:request:get-category-history-response', GetCategoryHistoryResponseV1);
Object.freeze(GetCategoryHistoryResponseV1);
Object.freeze(GetCategoryHistoryResponseV1.prototype);
