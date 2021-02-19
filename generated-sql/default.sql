
-----------------------------------------------------------------------
-- contact_requests
-----------------------------------------------------------------------

DROP TABLE IF EXISTS [contact_requests];

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
