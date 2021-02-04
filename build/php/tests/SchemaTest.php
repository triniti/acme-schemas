<?php
declare(strict_types=1);

use Acme\Schemas\Dam\Node\ImageAssetV1;
use Gdbots\Pbj\Exception\AssertionFailed;
use Gdbots\Pbj\Exception\RequiredFieldNotSet;
use Gdbots\Pbj\Message;
use Gdbots\Pbj\MessageResolver;
use Gdbots\Pbj\Util\ArrayUtil;
use Gdbots\Pbj\WellKnown\MessageRef;
use PHPUnit\Framework\TestCase;

class SchemaTest extends TestCase
{
    public function testCanCreateAllMessages()
    {
        /** @var Message|string $className */
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

            $this->assertTrue(ArrayUtil::isAssoc($message->getUriTemplateVars()));
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
     */
    public function testInvalidMimeTypesThrowException($sampleMimeType)
    {
        $this->expectException(AssertionFailed::class);
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
