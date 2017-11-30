// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/node/video/1-0-0.json#
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
import TrinitiVideosVideoV1Mixin from '@triniti/schemas/triniti/videos/mixin/video/VideoV1Mixin';
import VideoId from '@triniti/acme-schemas/acme/videos/VideoId';

export default class VideoV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:videos:node:video:1-0-0', VideoV1,
      [
        Fb.create('_id', T.IdentifierType.create())
          .required()
          .withDefault(() => VideoId.generate())
          .classProto(VideoId)
          .build(),
      ],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiVideosVideoV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        GdbotsNcrExpirableV1Mixin.create(),
        GdbotsNcrPublishableV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }

  /**
   * @returns {Object}
   */
  getUriTemplateVars() {
    return { video_id: `${this.get('_id', '')}` };
  }
}

GdbotsNcrNodeV1Trait(VideoV1);
TrinitiVideosVideoV1Trait(VideoV1);
MessageResolver.register('acme:videos:node:video', VideoV1);
Object.freeze(VideoV1);
Object.freeze(VideoV1.prototype);
