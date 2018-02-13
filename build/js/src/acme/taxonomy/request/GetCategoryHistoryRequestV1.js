// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-category-history-request/1-0-0.json#
import GdbotsPbjxGetEventsRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-request/GetEventsRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyGetCategoryHistoryRequestV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/get-category-history-request/GetCategoryHistoryRequestV1Mixin';

export default class GetCategoryHistoryRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:request:get-category-history-request:1-0-0', GetCategoryHistoryRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsPbjxGetEventsRequestV1Mixin.create(),
        TrinitiTaxonomyGetCategoryHistoryRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetCategoryHistoryRequestV1);
MessageResolver.register('acme:taxonomy:request:get-category-history-request', GetCategoryHistoryRequestV1);
Object.freeze(GetCategoryHistoryRequestV1);
Object.freeze(GetCategoryHistoryRequestV1.prototype);
