<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetEventsType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the operation used by pull clients to request notifications from
 * the server.
 *
 * @package php-ews\Types
 */
class GetEventsType extends BaseRequestType
{
    /**
     * Represents the identifier for a subscription that is queried for events.
     *
     * @var string
     */
    public $SubscriptionId;

    /**
     * Represents the last watermark returned to the client.
     *
     * If GetEvents has not been called for this subscription, the client uses
     * the watermark returned from the Subscribe request. Otherwise, the
     * watermark from the last event in the last GetEvents response is used.
     *
     * @var string
     *
     * @todo Determine if we need a WatermarkType.
     */
    public $Watermark;
}
