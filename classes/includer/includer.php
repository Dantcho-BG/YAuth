<?php

require "pageComposer.php";

class includer {

  private $pageID;
  private $pageComposer;

  public function __construct ($pageID) {
    $this -> pageID = $pageID;
  }

  public function includePageContent ($pageContentIncludesLink) {

    $pageComposer = new pageComposer($this -> pageID);
    $pageMetaData = $pageComposer -> getPageMetaData();

    include "pages".DIRECTORY_SEPARATOR."pageMetaInfoParts".DIRECTORY_SEPARATOR."header.php";
    include "pages".DIRECTORY_SEPARATOR."pageBodyParts".DIRECTORY_SEPARATOR."bodyTopBar.php";
    include "pages".DIRECTORY_SEPARATOR."pageBodyParts".DIRECTORY_SEPARATOR."bodyTopLeftNavBar.php";
    include "pages".DIRECTORY_SEPARATOR."pageBodyParts".DIRECTORY_SEPARATOR."bodyTopRightNavBar.php";
    include "pages".DIRECTORY_SEPARATOR."pageBodyParts".DIRECTORY_SEPARATOR."bodyTitle.php";
    include "pages".DIRECTORY_SEPARATOR."pageContainers".DIRECTORY_SEPARATOR.$pageContentIncludesLink;
    include "pages".DIRECTORY_SEPARATOR."pageBodyParts".DIRECTORY_SEPARATOR."bodyFooter.php";
    include "pages".DIRECTORY_SEPARATOR."pageMetaInfoParts".DIRECTORY_SEPARATOR."pluginsIncluder.php";

  }

}
