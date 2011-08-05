<?php

/**
 * BaseCustomer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $name_slug
 * @property string $identification
 * @property string $identification_slug
 * @property string $email
 * @property string $contact_person
 * @property clob $invoicing_address
 * @property clob $shipping_address
 * @property Doctrine_Collection $Commons
 * 
 * @method string              getName()                Returns the current record's "name" value
 * @method string              getNameSlug()            Returns the current record's "name_slug" value
 * @method string              getIdentification()      Returns the current record's "identification" value
 * @method string              getIdentificationSlug()  Returns the current record's "identification_slug" value
 * @method string              getEmail()               Returns the current record's "email" value
 * @method string              getContactPerson()       Returns the current record's "contact_person" value
 * @method clob                getInvoicingAddress()    Returns the current record's "invoicing_address" value
 * @method clob                getShippingAddress()     Returns the current record's "shipping_address" value
 * @method Doctrine_Collection getCommons()             Returns the current record's "Commons" collection
 * @method Customer            setName()                Sets the current record's "name" value
 * @method Customer            setNameSlug()            Sets the current record's "name_slug" value
 * @method Customer            setIdentification()      Sets the current record's "identification" value
 * @method Customer            setIdentificationSlug()  Sets the current record's "identification_slug" value
 * @method Customer            setEmail()               Sets the current record's "email" value
 * @method Customer            setContactPerson()       Sets the current record's "contact_person" value
 * @method Customer            setInvoicingAddress()    Sets the current record's "invoicing_address" value
 * @method Customer            setShippingAddress()     Sets the current record's "shipping_address" value
 * @method Customer            setCommons()             Sets the current record's "Commons" collection
 * 
 * @package    siwapp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCustomer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('customer');
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('name_slug', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('identification', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('identification_slug', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('email', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('contact_person', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('invoicing_address', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('shipping_address', 'clob', null, array(
             'type' => 'clob',
             ));


        $this->index('cstm', array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->index('cstid', array(
             'fields' => 
             array(
              0 => 'identification',
             ),
             ));
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Common as Commons', array(
             'local' => 'id',
             'foreign' => 'customer_id'));
    }
}