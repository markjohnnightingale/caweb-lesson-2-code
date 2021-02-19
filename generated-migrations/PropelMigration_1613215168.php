<?php

use Propel\Generator\Manager\MigrationManager;

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1613215168.
 * Generated on 2021-02-13 11:19:28 by mark
 */
class PropelMigration_1613215168
{
    public $comment = '';

    public function preUp(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postUp(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    public function preDown(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postDown(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'default' => '
PRAGMA foreign_keys = OFF;

CREATE TABLE [contact_requests]
(
    [id] INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    [first_name] VARCHAR(255) NOT NULL,
    [last_name] VARCHAR(255) NOT NULL,
    [email] VARCHAR(255) NOT NULL,
    [subject] VARCHAR(255) NOT NULL,
    [message] MEDIUMTEXT NOT NULL,
    UNIQUE ([id])
);

PRAGMA foreign_keys = ON;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'default' => '
PRAGMA foreign_keys = OFF;

DROP TABLE IF EXISTS [contact_requests];

PRAGMA foreign_keys = ON;
',
);
    }

}