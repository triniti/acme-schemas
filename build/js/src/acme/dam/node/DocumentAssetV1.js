// @link http://acme-schemas.triniti.io/json-schema/acme/dam/node/document-asset/1-0-0.json#
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrExpirableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expirable/ExpirableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/asset/AssetV1Mixin';
import TrinitiDamDocumentAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/document-asset/DocumentAssetV1Mixin';
import TrinitiDamDocumentAssetV1Trait from '@triniti/schemas/triniti/dam/mixin/document-asset/DocumentAssetV1Trait';
import TrinitiTaxonomyHashtaggableV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/hashtaggable/HashtaggableV1Mixin';

export default class DocumentAssetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:node:document-asset:1-0-0', DocumentAssetV1,
      [],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiDamAssetV1Mixin.create(),
        TrinitiDamDocumentAssetV1Mixin.create(),
        TrinitiTaxonomyHashtaggableV1Mixin.create(),
        GdbotsNcrExpirableV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(DocumentAssetV1);
TrinitiDamDocumentAssetV1Trait(DocumentAssetV1);
MessageResolver.register('acme:dam:node:document-asset', DocumentAssetV1);
Object.freeze(DocumentAssetV1);
Object.freeze(DocumentAssetV1.prototype);
