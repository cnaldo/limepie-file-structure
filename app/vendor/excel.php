<?php
namespace app\vendor;

set_include_path(
	get_include_path()
	.PS.__DIR__.DS.'PHPExcel/Classes'
);

require_once __DIR__ . '/PHPExcel/Classes/PHPExcel.php';

class excel {
	public $objPHPExcel;
	public $line = 1;
	public $field = 'A';
	public $type = array(
		'xls'		=> 'Excel5'	
		, 'xlsx'	=> 'Excel2007'	
	);

	public function __construct() {
		$this->objPHPExcel = new \PHPExcel();
		$this->objPHPExcel->setActiveSheetIndex(0);
	}
	public function addData($array) {
		foreach($array as $key => $row) {
			$this->field = 'A';
			foreach($row as $key2 => $value) {
				if(is_array($value)) {
					$value = implode(", ",$value);
				}
				
				if($value && $value[0] == '0' || preg_match('#^([0-9,]+)$#', $value)) {
					$this->objPHPExcel->getActiveSheet()->setCellValueExplicit($this->field.$this->line, $value, \PHPExcel_Cell_DataType::TYPE_STRING);	
				} else {
					$this->objPHPExcel->getActiveSheet()->setCellValue($this->field.$this->line, $value);
				}
				$this->field++;
			}
			$this->line++;
		}
		return $this;
	}
	public function extensionToType(&$filename) {
		$tmp = implode('|',array_keys($this->type));

		if(preg_match('#\.('.$tmp.')$#', $filename, $m)) {
			return $this->type[$m[1]];
		} else {
			$filename .= '.xls';
			return 'Excel5';//$this->defaultType;
		}
	}
	public function down($filename = 'example.xls') {

		foreach(range('B',$this->field) as $columnID) {
			$this->objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
		}

		$type = $this->extensionToType($filename);
		$ie = isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false;
		if( $ie ){
			$filename = iconv("UTF-8", "EUC-KR", $filename);
		}
		// Redirect output to a client’s web browser (Excel5)
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0

		$this->objWriter = \PHPExcel_IOFactory::createWriter($this->objPHPExcel, $type);
		$this->objWriter->save('php://output');
	}
}

