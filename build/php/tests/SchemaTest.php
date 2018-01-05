<?php

use Gdbots\Common\Util\ArrayUtils;
use Gdbots\Pbj\Exception\RequiredFieldNotSet;
use Gdbots\Pbj\Message;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\MessageResolver;
use PHPUnit\Framework\TestCase;
use Acme\Schemas\Dam\Node\ImageAssetV1;

class SchemaTest extends TestCase
{
    /**
     * @throws \Throwable
     */
    public function testCanCreateAllMessages()
    {
        /** @var Message $className */
        foreach (MessageResolver::all() as $curie => $className) {
            $message = $className::create();
            $this->assertInstanceOf($className, $message);
            $this->assertInstanceOf(Message::class, $message);

            try {
                $ref = $message->generateMessageRef('tag');
                $this->assertInstanceOf(MessageRef::class, $ref);
                $this->assertSame($ref->toString(), $message->generateMessageRef('tag')->toString());
            } catch (RequiredFieldNotSet $e) {
                // this is ok as some messages generate etags in their message
                // refs which serialize the message and cause this exception
            } catch (\Throwable $e) {
                throw $e;
            }

            $this->assertTrue(ArrayUtils::isAssoc($message->getUriTemplateVars()));
        }
    }

    /**
     * @expectedException \Gdbots\Pbj\Exception\AssertionFailed
     */
    public function testAssetMimeTypeNoForwardSlash()
    {
        ImageAssetV1::create()->set('mime_type', 'imagejpg');
    }

    /**
     * @expectedException \Gdbots\Pbj\Exception\AssertionFailed
     */
    public function testAssetMimeTypeInvalidCharBeforeSlash()
    {
        ImageAssetV1::create()->set('mime_type', '%image/jpg');
    }

    /**
     * @expectedException \Gdbots\Pbj\Exception\AssertionFailed
     */
    public function testAssetMimeTypeInvalidCharAfterSlash()
    {
        ImageAssetV1::create()->set('mime_type', 'image/j$pg');
    }

    /**
     * @expectedException \Gdbots\Pbj\Exception\AssertionFailed
     */
    public function testAssetMimeTypeDoesNotAllowSpaces()
    {
        ImageAssetV1::create()->set('mime_type', 'image/ jpg');
    }

    public function testAssetMimeTypeAllowsDigits()
    {
        ImageAssetV1::create()->set('mime_type', '1image/1jpg');
        $this->assertTrue(true, 'Accepted valid mime type contains digits');
    }

    public function testAssetMimeTypeAllowsDash()
    {
        ImageAssetV1::create()->set('mime_type', 'application/octet-stream');
        $this->assertTrue(true, 'Accepted valid mime type');
    }

    public function testAssetMimeTypeAllowsDots()
    {
        ImageAssetV1::create()->set('mime_type', 'application/vnd.hzn-3d-crossword');
        $this->assertTrue(true, 'Accepted valid mime type');
    }

    public function testAssetMimeTypeAllowsPlus()
    {
        ImageAssetV1::create()->set('mime_type', 'application/vnd.adobe.air-application-installer-package+zip');
        $this->assertTrue(true, 'Accepted valid mime type');
    }

    /**
     * @expectedException \Gdbots\Pbj\Exception\AssertionFailed
     * @todo: Should this fail, or should we allow a universal subtype?
     */
    public function testAssetMimeTypeAllowsStar()
    {
        ImageAssetV1::create()->set('mime_type', 'application/*');
        $this->assertTrue(true, 'Accepted valid mime type');
    }
}
