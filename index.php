<?php

  require "classes".DIRECTORY_SEPARATOR."includer".DIRECTORY_SEPARATOR."includer.php";

  $pageID = 0;
  $pageComposer = new pageComposer($pageID);
  $includer = new includer($pageID);

  $pageMetaData = $pageComposer -> getPageMetaData();
  $pageContentIncludeLinks = $pageComposer -> getPageContentIncludings();
  $includer -> includePageContent($pageContentIncludeLinks);

?>
