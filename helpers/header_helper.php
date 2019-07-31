<?php
class Header {

  public static $langSet = array(
    "index.php" => "Dashboard",
    "milk.php" => "飲奶紀錄",
    "axItemForm.php" => "AX Item Form",
    "componentForm.php" => "Component Form",
    "user.php" => "User",
    "report.php" => "Report",
    "poToSupplier.php" => "PO to Supplier",
    "itemForm.php" => "Item Form",
    "axSize.php" => "AxSize",
    "axColor.php" => "AxColor",
    "axStyle.php" => "AxStyle",
    "searchName.php" => "Search Name",
    "itemName.php" => "Item Name",
    "description.php" => "Description",
    "class.php" => "Class",
    "item.php" => "Item"
  );

  public static function GetSectionTitle($pageName) {
    return self::$langSet[$pageName];
  }
}
?>