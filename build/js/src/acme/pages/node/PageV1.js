// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/node/page/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import PageId from '@triniti/acme-schemas/acme/pages/PageId';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import TrinitiPagesPageV1Mixin from '@triniti/schemas/triniti/pages/mixin/page/PageV1Mixin';

export default class PageV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:pages:node:page:1-0-0', PageV1,
      [
        Fb.create('_id', T.IdentifierType.create())
          .required()
          .withDefault(() => PageId.generate())
          .classProto(PageId)
          .build(),
      ],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiPagesPageV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }

  /**
   * @returns {Object}
   */
  getUriTemplateVars() {
    return { page_id: `${this.get('_id', '')}` };
  }
}

GdbotsNcrNodeV1Trait(PageV1);
TrinitiPagesPageV1Trait(PageV1);
MessageResolver.register('acme:pages:node:page', PageV1);
Object.freeze(PageV1);
Object.freeze(PageV1.prototype);
