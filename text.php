<?php
$_ReadExcel = new PHPExcel_Reader_Excel2007();
if(!$_ReadExcel->canRead('link.xls')){
    $_ReadExcel = new PHPExcel_Reader_Excel5();
}
$_phpExcel = $_ReadExcel->load('link.xls');
$sheetCount = $_phpExcel->getSheetCount();
$newExcel = array();
$excelData = array();
for($s = 0;$s<$sheetCount;$s++) {
    $currentSheet = $_phpExcel->getSheet($s);
    $allColumn = $currentSheet->getHighestColumn();
    $allRow = $currentSheet->getHighestRow();
    for($r = 1;$r<=$allRow;$r++){

        for($currentColumn='A';$currentColumn<=$allColumn;$currentColumn++){
            $address = $currentColumn.$r;
            $newExcel[] = $currentSheet->getCell($address)->getValue();
        }
    }
}