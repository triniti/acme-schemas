// @link http://acme-schemas.triniti.io/json-schema/acme/news/node/article/1-0-0.json#
import ArticleId from '@triniti/acme-schemas/acme/news/ArticleId';
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrExpirableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expirable/ExpirableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrLockableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/lockable/LockableV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import GdbotsNcrPublishableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publishable/PublishableV1Mixin';
import GdbotsNcrSluggableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/sluggable/SluggableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import TrinitiCanvasHasBlocksV1Mixin from '@triniti/schemas/triniti/canvas/mixin/has-blocks/HasBlocksV1Mixin';
import TrinitiCommonSeoV1Mixin from '@triniti/schemas/triniti/common/mixin/seo/SeoV1Mixin';
import TrinitiNewsArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/article/ArticleV1Mixin';
import TrinitiNewsArticleV1Trait from '@triniti/schemas/triniti/news/mixin/article/ArticleV1Trait';
import TrinitiNewsHeadlineFragmentsV1Mixin from '@triniti/schemas/triniti/news/mixin/headline-fragments/HeadlineFragmentsV1Mixin';

export default class ArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:node:article:1-0-0', ArticleV1,
      [
        Fb.create('_id', T.IdentifierType.create())
          .required()
          .withDefault(() => ArticleId.generate())
          .classProto(ArticleId)
          .build(),
      ],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiNewsArticleV1Mixin.create(),
        TrinitiNewsHeadlineFragmentsV1Mixin.create(),
        TrinitiCanvasHasBlocksV1Mixin.create(),
        TrinitiCommonSeoV1Mixin.create(),
        GdbotsNcrExpirableV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        GdbotsNcrLockableV1Mixin.create(),
        GdbotsNcrPublishableV1Mixin.create(),
        GdbotsNcrSluggableV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(ArticleV1);
TrinitiNewsArticleV1Trait(ArticleV1);
MessageResolver.register('acme:news:node:article', ArticleV1);
Object.freeze(ArticleV1);
Object.freeze(ArticleV1.prototype);
