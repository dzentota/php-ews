<?php
/**
 * Contains EWSType_DelegatePermissionsType.
 */

/**
 * Contains the delegate permission-level settings for a user.
 *
 * @package php-ews\Types
 */
class EWSType_DelegatePermissionsType extends EWSType
{
    /**
     * Contains the permissions for the default Calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $CalendarFolderPermissionLevel;

    /**
     * Contains the permissions for the default Contacts folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $ContactsFolderPermissionLevel;

    /**
     * Contains the permissions for the default Inbox folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $InboxFolderPermissionLevel;

    /**
     * Contains the permissions for the default Journal folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $JournalFolderPermissionLevel;

    /**
     * Contains the permissions for the default Notes folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $NotesFolderPermissionLevel;

    /**
     * Contains the permissions for the default Task folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $TasksFolderPermissionLevel;
}
