// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/request/search-videos-response/1-0-0.json#
import GdbotsNcrSearchNodesResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/search-nodes-response/SearchNodesResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiVideosSearchVideosResponseV1Mixin from '@triniti/schemas/triniti/videos/mixin/search-videos-response/SearchVideosResponseV1Mixin';

export default class SearchVideosResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:videos:request:search-videos-response:1-0-0', SearchVideosResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrSearchNodesResponseV1Mixin.create(),
        TrinitiVideosSearchVideosResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(SearchVideosResponseV1);
MessageResolver.register('acme:videos:request:search-videos-response', SearchVideosResponseV1);
Object.freeze(SearchVideosResponseV1);
Object.freeze(SearchVideosResponseV1.prototype);
