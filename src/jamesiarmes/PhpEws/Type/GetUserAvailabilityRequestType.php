<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetUserAvailabilityRequestType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines the arguments used to obtain user availability information.
 *
 * @package php-ews\Types
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{
    /**
     * Specifies the type of free/busy information returned in the response.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;

    /**
     * Contains a list of mailboxes to query for availability information.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfMailboxData
     */
    public $MailboxDataArray;

    /**
     * Contains the options for obtaining meeting suggestion information.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SuggestionsViewOptionsType
     */
    public $SuggestionsViewOptions;

    /**
     * Contains elements that identify time zone information.
     *
     * This element also contains information about the transition between
     * standard time and daylight saving time.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SerializableTimeZone
     */
    public $TimeZone;
}