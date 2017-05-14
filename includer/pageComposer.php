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
        $pageMetaData["navBarActiveItem"] = "home";
        $pageMetaData["formCheck"] = "";
        break;

      case '1':
        $pageMetaData["pageTitle"] = "Features";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "features";
        $pageMetaData["formCheck"] = "";
        break;

      case '2':
        $pageMetaData["pageTitle"] = "Download";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "download";
        $pageMetaData["formCheck"] = "";
        break;

      case '3':
        $pageMetaData["pageTitle"] = "Login";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "login";
        $pageMetaData["formCheck"] = "";
        break;

      case '4':
        $pageMetaData["pageTitle"] = "Register";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "register";
        $pageMetaData["formCheck"] = "registerFormCheck.php";
        break;

      case '5':
        $pageMetaData["pageTitle"] = "Contact Me";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "contact-me";
        $pageMetaData["formCheck"] = "";
        break;

      case '6':
        $pageMetaData["pageTitle"] = "Requirements";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "requirements";
        $pageMetaData["formCheck"] = "";
        break;

      case '7':
        $pageMetaData["pageTitle"] = "Intructions";
        $pageMetaData["pageCSSLink"] = "";
        $pageMetaData["pageJSLink"] = "";
        $pageMetaData["navBarActiveItem"] = "intructions";
        $pageMetaData["formCheck"] = "";
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
