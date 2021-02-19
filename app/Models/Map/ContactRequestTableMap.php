<?php

namespace App\Models\Map;

use App\Models\ContactRequest;
use App\Models\ContactRequestQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'contact_requests' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ContactRequestTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'App.Models.Map.ContactRequestTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'contact_requests';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\App\\Models\\ContactRequest';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'App.Models.ContactRequest';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the id field
     */
    const COL_ID = 'contact_requests.id';

    /**
     * the column name for the first_name field
     */
    const COL_FIRST_NAME = 'contact_requests.first_name';

    /**
     * the column name for the last_name field
     */
    const COL_LAST_NAME = 'contact_requests.last_name';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'contact_requests.email';

    /**
     * the column name for the subject field
     */
    const COL_SUBJECT = 'contact_requests.subject';

    /**
     * the column name for the message field
     */
    const COL_MESSAGE = 'contact_requests.message';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'FirstName', 'LastName', 'Email', 'Subject', 'Message', ),
        self::TYPE_CAMELNAME     => array('id', 'firstName', 'lastName', 'email', 'subject', 'message', ),
        self::TYPE_COLNAME       => array(ContactRequestTableMap::COL_ID, ContactRequestTableMap::COL_FIRST_NAME, ContactRequestTableMap::COL_LAST_NAME, ContactRequestTableMap::COL_EMAIL, ContactRequestTableMap::COL_SUBJECT, ContactRequestTableMap::COL_MESSAGE, ),
        self::TYPE_FIELDNAME     => array('id', 'first_name', 'last_name', 'email', 'subject', 'message', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'FirstName' => 1, 'LastName' => 2, 'Email' => 3, 'Subject' => 4, 'Message' => 5, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'firstName' => 1, 'lastName' => 2, 'email' => 3, 'subject' => 4, 'message' => 5, ),
        self::TYPE_COLNAME       => array(ContactRequestTableMap::COL_ID => 0, ContactRequestTableMap::COL_FIRST_NAME => 1, ContactRequestTableMap::COL_LAST_NAME => 2, ContactRequestTableMap::COL_EMAIL => 3, ContactRequestTableMap::COL_SUBJECT => 4, ContactRequestTableMap::COL_MESSAGE => 5, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'first_name' => 1, 'last_name' => 2, 'email' => 3, 'subject' => 4, 'message' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'ID',
        'ContactRequest.Id' => 'ID',
        'id' => 'ID',
        'contactRequest.id' => 'ID',
        'ContactRequestTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'id' => 'ID',
        'contact_requests.id' => 'ID',
        'FirstName' => 'FIRST_NAME',
        'ContactRequest.FirstName' => 'FIRST_NAME',
        'firstName' => 'FIRST_NAME',
        'contactRequest.firstName' => 'FIRST_NAME',
        'ContactRequestTableMap::COL_FIRST_NAME' => 'FIRST_NAME',
        'COL_FIRST_NAME' => 'FIRST_NAME',
        'first_name' => 'FIRST_NAME',
        'contact_requests.first_name' => 'FIRST_NAME',
        'LastName' => 'LAST_NAME',
        'ContactRequest.LastName' => 'LAST_NAME',
        'lastName' => 'LAST_NAME',
        'contactRequest.lastName' => 'LAST_NAME',
        'ContactRequestTableMap::COL_LAST_NAME' => 'LAST_NAME',
        'COL_LAST_NAME' => 'LAST_NAME',
        'last_name' => 'LAST_NAME',
        'contact_requests.last_name' => 'LAST_NAME',
        'Email' => 'EMAIL',
        'ContactRequest.Email' => 'EMAIL',
        'email' => 'EMAIL',
        'contactRequest.email' => 'EMAIL',
        'ContactRequestTableMap::COL_EMAIL' => 'EMAIL',
        'COL_EMAIL' => 'EMAIL',
        'email' => 'EMAIL',
        'contact_requests.email' => 'EMAIL',
        'Subject' => 'SUBJECT',
        'ContactRequest.Subject' => 'SUBJECT',
        'subject' => 'SUBJECT',
        'contactRequest.subject' => 'SUBJECT',
        'ContactRequestTableMap::COL_SUBJECT' => 'SUBJECT',
        'COL_SUBJECT' => 'SUBJECT',
        'subject' => 'SUBJECT',
        'contact_requests.subject' => 'SUBJECT',
        'Message' => 'MESSAGE',
        'ContactRequest.Message' => 'MESSAGE',
        'message' => 'MESSAGE',
        'contactRequest.message' => 'MESSAGE',
        'ContactRequestTableMap::COL_MESSAGE' => 'MESSAGE',
        'COL_MESSAGE' => 'MESSAGE',
        'message' => 'MESSAGE',
        'contact_requests.message' => 'MESSAGE',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('contact_requests');
        $this->setPhpName('ContactRequest');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\App\\Models\\ContactRequest');
        $this->setPackage('App.Models');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', true, 255, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', true, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, null);
        $this->addColumn('subject', 'Subject', 'VARCHAR', true, 255, null);
        $this->addColumn('message', 'Message', 'LONGVARCHAR', true, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? ContactRequestTableMap::CLASS_DEFAULT : ContactRequestTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (ContactRequest object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ContactRequestTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ContactRequestTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ContactRequestTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ContactRequestTableMap::OM_CLASS;
            /** @var ContactRequest $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ContactRequestTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = ContactRequestTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ContactRequestTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ContactRequest $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ContactRequestTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ContactRequestTableMap::COL_ID);
            $criteria->addSelectColumn(ContactRequestTableMap::COL_FIRST_NAME);
            $criteria->addSelectColumn(ContactRequestTableMap::COL_LAST_NAME);
            $criteria->addSelectColumn(ContactRequestTableMap::COL_EMAIL);
            $criteria->addSelectColumn(ContactRequestTableMap::COL_SUBJECT);
            $criteria->addSelectColumn(ContactRequestTableMap::COL_MESSAGE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.subject');
            $criteria->addSelectColumn($alias . '.message');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria object containing the columns to remove.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function removeSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(ContactRequestTableMap::COL_ID);
            $criteria->removeSelectColumn(ContactRequestTableMap::COL_FIRST_NAME);
            $criteria->removeSelectColumn(ContactRequestTableMap::COL_LAST_NAME);
            $criteria->removeSelectColumn(ContactRequestTableMap::COL_EMAIL);
            $criteria->removeSelectColumn(ContactRequestTableMap::COL_SUBJECT);
            $criteria->removeSelectColumn(ContactRequestTableMap::COL_MESSAGE);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.first_name');
            $criteria->removeSelectColumn($alias . '.last_name');
            $criteria->removeSelectColumn($alias . '.email');
            $criteria->removeSelectColumn($alias . '.subject');
            $criteria->removeSelectColumn($alias . '.message');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(ContactRequestTableMap::DATABASE_NAME)->getTable(ContactRequestTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ContactRequestTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ContactRequestTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ContactRequestTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ContactRequest or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ContactRequest object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ContactRequestTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \App\Models\ContactRequest) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ContactRequestTableMap::DATABASE_NAME);
            $criteria->add(ContactRequestTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ContactRequestQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ContactRequestTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ContactRequestTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the contact_requests table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ContactRequestQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ContactRequest or Criteria object.
     *
     * @param mixed               $criteria Criteria or ContactRequest object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ContactRequestTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ContactRequest object
        }

        if ($criteria->containsKey(ContactRequestTableMap::COL_ID) && $criteria->keyContainsValue(ContactRequestTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ContactRequestTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ContactRequestQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ContactRequestTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ContactRequestTableMap::buildTableMap();
