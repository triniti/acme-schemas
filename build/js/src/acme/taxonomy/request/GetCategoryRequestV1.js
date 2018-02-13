// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-category-request/1-0-0.json#
import GdbotsNcrGetNodeRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-request/GetNodeRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyGetCategoryRequestV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/get-category-request/GetCategoryRequestV1Mixin';

export default class GetCategoryRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:request:get-category-request:1-0-0', GetCategoryRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeRequestV1Mixin.create(),
        TrinitiTaxonomyGetCategoryRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetCategoryRequestV1);
MessageResolver.register('acme:taxonomy:request:get-category-request', GetCategoryRequestV1);
Object.freeze(GetCategoryRequestV1);
Object.freeze(GetCategoryRequestV1.prototype);
