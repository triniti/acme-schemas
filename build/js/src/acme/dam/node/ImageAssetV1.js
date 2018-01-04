// @link http://acme-schemas.triniti.io/json-schema/acme/dam/node/image-asset/1-0-0.json#
import AssetId from '@triniti/acme-schemas/acme/dam/AssetId';
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrExpirableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expirable/ExpirableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import GdbotsNcrPublishableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publishable/PublishableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import TrinitiDamAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/asset/AssetV1Mixin';
import TrinitiDamAssetV1Trait from '@triniti/schemas/triniti/dam/mixin/asset/AssetV1Trait';
import TrinitiDamImageAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/image-asset/ImageAssetV1Mixin';

export default class ImageAssetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:node:image-asset:1-0-0', ImageAssetV1,
      [
        Fb.create('_id', T.IdentifierType.create())
          .required()
          .withDefault(() => AssetId.generate())
          .classProto(AssetId)
          .build(),
      ],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiDamAssetV1Mixin.create(),
        TrinitiDamImageAssetV1Mixin.create(),
        GdbotsNcrExpirableV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        GdbotsNcrPublishableV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(ImageAssetV1);
TrinitiDamAssetV1Trait(ImageAssetV1);
MessageResolver.register('acme:dam:node:image-asset', ImageAssetV1);
Object.freeze(ImageAssetV1);
Object.freeze(ImageAssetV1.prototype);