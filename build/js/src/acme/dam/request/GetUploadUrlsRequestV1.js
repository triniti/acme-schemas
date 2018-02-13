// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-upload-urls-request/1-0-0.json#
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamGetUploadUrlsRequestV1Mixin from '@triniti/schemas/triniti/dam/mixin/get-upload-urls-request/GetUploadUrlsRequestV1Mixin';

export default class GetUploadUrlsRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:request:get-upload-urls-request:1-0-0', GetUploadUrlsRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        TrinitiDamGetUploadUrlsRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetUploadUrlsRequestV1);
MessageResolver.register('acme:dam:request:get-upload-urls-request', GetUploadUrlsRequestV1);
Object.freeze(GetUploadUrlsRequestV1);
Object.freeze(GetUploadUrlsRequestV1.prototype);
