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

    public function getInvalidMimeTypeSamples()
    {
        return [
            // No forward slash
            ['imagejpg'],
            // Invalid char in "type"
            ['%image/jpg'],
            // Invalid char in "subtype"
            ['image/j$pg'],
            // Space in mime type
            ['image/ jpg'],
            // Global mime type should be specific
            ['image/*'],
        ];
    }

    /**
     * @dataProvider getInvalidMimeTypeSamples
     *
     * @expectedException \Gdbots\Pbj\Exception\AssertionFailed
     */
    public function testInvalidMimeTypesThrowException($sampleMimeType)
    {
        ImageAssetV1::create()->set('mime_type', $sampleMimeType);
    }

    public function getValidMimeTypeSamples()
    {
        return [
            // Allow digits in type and subtype
            ['1image/1jpg'],
            // Allow dash in subtype
            ['application/octet-stream'],
            // Allow dots in subtype
            ['application/vnd.hzn-3d-crossword'],
            // Allow "+" char in subtype
            ['application/vnd.adobe.air-application-installer-package+zip'],
        ];
    }

    /**
     * @dataProvider getValidMimeTypeSamples
     */
    public function testValidMimeTypes($sampleMimeType)
    {
        ImageAssetV1::create()->set('mime_type', $sampleMimeType);
        $this->assertTrue(true, 'Accepted valid mime type');
    }
}
