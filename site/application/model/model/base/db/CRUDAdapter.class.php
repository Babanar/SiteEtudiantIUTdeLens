<?php
/**
 * Adapter to Database
 * Save and delete instances
 */

interface CRUDAdapter {
    
    /**
     * Save the instance in the database
     */
    function save($instance);
    
    function saveLink($instance);
    
    function updateLink($instance);    
    /**
     * delete the instance from the database
     */
    
    function delete($instance);
}