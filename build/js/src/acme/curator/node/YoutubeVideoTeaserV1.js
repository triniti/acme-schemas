// @link http://acme-schemas.triniti.io/json-schema/acme/curator/node/youtube-video-teaser/1-0-0.json#
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrExpirableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expirable/ExpirableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import GdbotsNcrPublishableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publishable/PublishableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCuratorTeaserHasTargetV1Mixin from '@triniti/schemas/triniti/curator/mixin/teaser-has-target/TeaserHasTargetV1Mixin';
import TrinitiCuratorTeaserV1Mixin from '@triniti/schemas/triniti/curator/mixin/teaser/TeaserV1Mixin';
import TrinitiCuratorYoutubeVideoTeaserV1Mixin from '@triniti/schemas/triniti/curator/mixin/youtube-video-teaser/YoutubeVideoTeaserV1Mixin';
import TrinitiCuratorYoutubeVideoTeaserV1Trait from '@triniti/schemas/triniti/curator/mixin/youtube-video-teaser/YoutubeVideoTeaserV1Trait';

export default class YoutubeVideoTeaserV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:curator:node:youtube-video-teaser:1-0-0', YoutubeVideoTeaserV1,
      [],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiCuratorTeaserV1Mixin.create(),
        TrinitiCuratorTeaserHasTargetV1Mixin.create(),
        TrinitiCuratorYoutubeVideoTeaserV1Mixin.create(),
        GdbotsNcrExpirableV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        GdbotsNcrPublishableV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(YoutubeVideoTeaserV1);
TrinitiCuratorYoutubeVideoTeaserV1Trait(YoutubeVideoTeaserV1);
MessageResolver.register('acme:curator:node:youtube-video-teaser', YoutubeVideoTeaserV1);
Object.freeze(YoutubeVideoTeaserV1);
Object.freeze(YoutubeVideoTeaserV1.prototype);
