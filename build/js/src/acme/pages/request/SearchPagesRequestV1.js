// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/search-pages-request/1-0-0.json#
import GdbotsNcrSearchNodesRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/search-nodes-request/SearchNodesRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPagesSearchPagesRequestV1Mixin from '@triniti/schemas/triniti/pages/mixin/search-pages-request/SearchPagesRequestV1Mixin';

export default class SearchPagesRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:pages:request:search-pages-request:1-0-0', SearchPagesRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrSearchNodesRequestV1Mixin.create(),
        TrinitiPagesSearchPagesRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(SearchPagesRequestV1);
MessageResolver.register('acme:pages:request:search-pages-request', SearchPagesRequestV1);
Object.freeze(SearchPagesRequestV1);
Object.freeze(SearchPagesRequestV1.prototype);
