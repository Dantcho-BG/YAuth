<?php

  require "includer".DIRECTORY_SEPARATOR."includer.php";

  $pageID = 4;
  $pageComposer = new pageComposer($pageID);
  $includer = new includer($pageID);

  $pageMetaData = $pageComposer -> getPageMetaData();
  $pageContentIncludeLinks = $pageComposer -> getPageContentIncludings();
  $includer -> includePageContent($pageContentIncludeLinks);

?>
