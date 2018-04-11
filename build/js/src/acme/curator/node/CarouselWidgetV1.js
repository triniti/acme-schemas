// @link http://acme-schemas.triniti.io/json-schema/acme/curator/node/carousel-widget/1-0-0.json#
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCuratorCarouselWidgetV1Mixin from '@triniti/schemas/triniti/curator/mixin/carousel-widget/CarouselWidgetV1Mixin';
import TrinitiCuratorCarouselWidgetV1Trait from '@triniti/schemas/triniti/curator/mixin/carousel-widget/CarouselWidgetV1Trait';
import TrinitiCuratorWidgetV1Mixin from '@triniti/schemas/triniti/curator/mixin/widget/WidgetV1Mixin';

export default class CarouselWidgetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:curator:node:carousel-widget:1-0-0', CarouselWidgetV1,
      [],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiCuratorWidgetV1Mixin.create(),
        TrinitiCuratorCarouselWidgetV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(CarouselWidgetV1);
TrinitiCuratorCarouselWidgetV1Trait(CarouselWidgetV1);
MessageResolver.register('acme:curator:node:carousel-widget', CarouselWidgetV1);
Object.freeze(CarouselWidgetV1);
Object.freeze(CarouselWidgetV1.prototype);
