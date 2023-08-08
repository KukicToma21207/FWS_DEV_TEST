<?php

// Here we should include some DB controller

/**
 * Definition of the Menu class that defines basic item functionality that needs to be implemented
 */
abstract class Menu
{
    public $ID;
    public $name = "";
    protected $parent = null;
    protected $children = [];
    protected $position = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function load();
    abstract public function save();
    abstract public function moveUp();
    abstract public function moveDown();
    abstract public function setParent(Menu $parentMenu);
    abstract public function addChild(Menu $childMenuItem);
    abstract public function removeChild(Menu $childMenuItem);
    abstract public function delete();
}


/**
 * HeadMenu class
 * 
 * This class represents head menu (main parent menu)
 */
class HeadMenu extends Menu
{
    public function load() 
    {
        // Load menu from DB
        // Then go through all the children and call Load for each one of them  $child->load()
    }

    public function save()
    {
        // Save main menu and call save for each of the children as well $child->save()
    }

    public function moveUp()
    {
        //Because this is head menu it can't be moved
        $this->position = 0;
    }

    public function moveDown()
    {
        //Because this is head menu it can't be moved
        $this->position = 0;
    }

    public function setParent(Menu $parentMenu)
    {
        //Because this is head menu it doesn't have a parent
        $this->parent = null;
    }

    public function addChild(Menu $childMenuItem)
    {
        // Add child to the list and set it's parent 
        $this->children[] = $childMenuItem;
        $childMenuItem->setParent($this);
    }

    public function removeChild(Menu $childMenuItem)
    {
        // Find child in the list, call it's delete method, and then remove it from the list
    }

    public function delete()
    {
        // This will call delete on all of its children
        // Unset all the parameters
        // Delete itself from the DB
    }
}


/**
 * MenuItem represents each menu item that is not HeadMenu
 * 
 * Implement all the functionality for menu to work
 */
class MenuItem extends Menu
{
    protected $url = "#";

    // Return url connected with this item
    public function getUrl() {
        return $this->url;
    }

    // Set new url value
    public function setUrl(String $newUrl) {
        $this->url = empty($newUrl) ? '#' : $newUrl;
    }

    public function load() 
    {
        // Load menu from DB
        // Then go through all the children and call Load for each one of them  $child->load()
    }

    public function save()
    {
        // Save main menu and call save for each of the children as well $child->save()
    }

    public function moveUp()
    {
        //Move up the position
        $this->position--;
    }

    public function moveDown()
    {
        //Move down the position
        $this->position++;
    }

    public function setParent(Menu $parentMenu)
    {
        //Set parent for this menu item
        $this->parent = $parentMenu;
    }

    public function addChild(Menu $childMenuItem)
    {
        // Add child to the list and set it's parent 
        $this->children[] = $childMenuItem;
        $childMenuItem->setParent($this);
    }

    public function removeChild(Menu $childMenuItem)
    {
        // Find child in the list, call it's delete method, and then remove it from the list
    }

    public function delete()
    {
        // This will call delete on all of its children
        // Unset all the parameters
        // Then delete itself from the DB
    }
}

