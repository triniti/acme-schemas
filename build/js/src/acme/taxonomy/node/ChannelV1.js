// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/node/channel/1-0-0.json#
import ChannelId from '@triniti/acme-schemas/acme/taxonomy/ChannelId';
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import GdbotsNcrSluggableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/sluggable/SluggableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import TrinitiCommonSeoV1Mixin from '@triniti/schemas/triniti/common/mixin/seo/SeoV1Mixin';
import TrinitiTaxonomyChannelV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/channel/ChannelV1Mixin';
import TrinitiTaxonomyChannelV1Trait from '@triniti/schemas/triniti/taxonomy/mixin/channel/ChannelV1Trait';
import TrinitiTaxonomyHashtaggableV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/hashtaggable/HashtaggableV1Mixin';

export default class ChannelV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:node:channel:1-0-0', ChannelV1,
      [
        Fb.create('_id', T.IdentifierType.create())
          .required()
          .withDefault(() => ChannelId.generate())
          .classProto(ChannelId)
          .build(),
      ],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiTaxonomyChannelV1Mixin.create(),
        TrinitiCommonSeoV1Mixin.create(),
        TrinitiTaxonomyHashtaggableV1Mixin.create(),
        GdbotsNcrSluggableV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(ChannelV1);
TrinitiTaxonomyChannelV1Trait(ChannelV1);
MessageResolver.register('acme:taxonomy:node:channel', ChannelV1);
Object.freeze(ChannelV1);
Object.freeze(ChannelV1.prototype);