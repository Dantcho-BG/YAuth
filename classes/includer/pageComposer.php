<?php

class pageComposer {

  private $pageID;

  public function __construct ($pageID) {
    $this -> pageID = $pageID;
  }

  public function getPageMetaData () {

    switch ($this -> pageID) {
      case '0':
        $pageMetaData["pageTitle"] = "Home";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "";
        break;

      case '1':
        $pageMetaData["pageTitle"] = "Features";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "";
        break;

      case '2':
        $pageMetaData["pageTitle"] = "Download";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "";
        break;

      case '3':
        $pageMetaData["pageTitle"] = "Login";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "";
        break;

      case '4':
        $pageMetaData["pageTitle"] = "Register";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "";
        break;

    }

    return $pageMetaData;

  }

  public function getPageContentIncludings () {

    switch ($this -> pageID) {
      case '0':
        $pageContentIncludesLink = "homePageContainer.php";
        break;

      case '1':
        $pageContentIncludesLink = "featuresContainer.php";
        break;

      case '2':
        $pageContentIncludesLink = "downloadContainer.php";
        break;

      case '3':
        $pageContentIncludesLink = "loginPageContainer.php";
        break;

      case '4':
        $pageContentIncludesLink = "registerPageContainer.php";
        break;

    }

    return $pageContentIncludesLink;

  }

}
