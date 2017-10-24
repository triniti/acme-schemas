// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/search-pages-response/1-0-0.json#
import GdbotsNcrSearchNodesResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/search-nodes-response/SearchNodesResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPagesSearchPagesResponseV1Mixin from '@triniti/schemas/triniti/pages/mixin/search-pages-response/SearchPagesResponseV1Mixin';

export default class SearchPagesResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:pages:request:search-pages-response:1-0-0', SearchPagesResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrSearchNodesResponseV1Mixin.create(),
        TrinitiPagesSearchPagesResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(SearchPagesResponseV1);
MessageResolver.register('acme:pages:request:search-pages-response', SearchPagesResponseV1);
Object.freeze(SearchPagesResponseV1);
Object.freeze(SearchPagesResponseV1.prototype);
