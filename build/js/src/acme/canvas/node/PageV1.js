// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/node/page/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrExpirableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expirable/ExpirableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import GdbotsNcrPublishableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publishable/PublishableV1Mixin';
import GdbotsNcrSluggableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/sluggable/SluggableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import PageId from '@triniti/acme-schemas/acme/canvas/PageId';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import TrinitiCanvasPageV1Mixin from '@triniti/schemas/triniti/canvas/mixin/page/PageV1Mixin';

export default class PageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:node:page:1-0-0', PageV1,
      [
        Fb.create('_id', T.IdentifierType.create())
          .required()
          .withDefault(() => PageId.generate())
          .classProto(PageId)
          .build(),
      ],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiCanvasPageV1Mixin.create(),
        GdbotsNcrExpirableV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        GdbotsNcrPublishableV1Mixin.create(),
        GdbotsNcrSluggableV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(PageV1);
MessageResolver.register('acme:canvas:node:page', PageV1);
Object.freeze(PageV1);
Object.freeze(PageV1.prototype);
