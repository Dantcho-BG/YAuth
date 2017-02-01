<?php

require "includer.php";

class pageConstructor extends includer {

  public $pageID;

  function __construct($pageID) {
    $this -> pageID = $pageID;

    //$this -> pageComposer = new pageComposer($pageID);
    ///$this -> pageComposer -> getPageMetaData();
    //$pageContentIncludesLink = $this -> pageComposer -> getPageContentIncludings();

    //$this -> includer = new includer($pageID);
    //$this -> includer -> includePageContent($pageContentIncludesLink);
  }

}
