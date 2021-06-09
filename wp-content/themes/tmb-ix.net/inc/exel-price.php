<?php

function debugArr($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

require_once(get_template_directory() . '/libs/PHPExcel.php');

function getDataExel($fileObj)
{

	$file_dir = get_attached_file( $fileObj['id'] );

	$exel = PHPExcel_IOFactory::load($file_dir);
	$sheet = $exel->getActiveSheet();
	$highestRowIndex = $sheet->getHighestRow();


	$priceArr = [];


// Получение заголовка
	$priceArr['title'] = $sheet->getCell('A1')->getValue();
// Пометка об НДС
	$priceArr['ndsText'] = $sheet->getCell('A10')->getValue();


	$tariffsStart = false;

// Получение цены, направление, код
	for ($i = 1; $i < $highestRowIndex; $i++)
	{
		$fieldA = $sheet->getCell('A' . $i)->getValue();

		$allTariffsStr = preg_match('/\*Все/', $fieldA);


		if ($fieldA == 'Код')
		{
			$tariffsStart = true;
		}
		else if ($tariffsStart)
		{
			$priceArr['tariffs'][] = [
				'code' => $fieldA,
				'direction' => $sheet->getCell('B'. $i)->getValue(),
				'price' => $sheet->getCell('C'. $i)->getValue()
			];
		}
		else if ($i > 3 && !empty($fieldA) && !$allTariffsStr) {
			$priceArr['header'][] = [
				'title' => $fieldA,
				'desc' => $sheet->getCell('B' . $i)->getValue()
			];
		}
	}

	return $priceArr;

}


function setTariffsArrStartChar($arrTariffs)
{
	$res = [];

	foreach ($arrTariffs as $tariff)
	{
		$startChar = $tariff['direction'][0];
		$res[$startChar][] = $tariff;
	}

	return $res;
}

function getRandomTariffs($arrTariffs)
{
	$arrTariffs = setTariffsArrStartChar($arrTariffs);
	$res = [];


	$randNumbers = [];
	$idxMain = 1;
	foreach ($arrTariffs as $startChar => $tariffs)
	{
		$idxMainStr = $idxMain . 'rand';
		foreach ($tariffs as $idx => $tariff)
		{
			$startNum = 0;
			$endNum = count($tariffs) - 1;

			if ($idx > 0) {
				if ($idx <= 4 && !empty($tariff)) {

					$randNum = random_int($startNum, $endNum);

					if (!empty($randNumbers[$idxMainStr])) {


//						if (in_array($randNum, $randNumbers[$idxMainStr])) {
//							echo $randNum . '---yes IF <br>';
//							$randNum = random_int($startNum, $endNum);
//						}


						while (in_array($randNum, $randNumbers[$idxMainStr]))
						{
//							echo $randNum . '---yes <br>';
							$randNum = random_int($startNum, $endNum);
//							echo 'new num' . $randNum . '<br>';
						}
					}

					$res[] = $tariffs[$randNum];
					$randNumbers[$idxMainStr][] = $randNum;

				} else {
					break;
				}
			}

		}
//		echo 'new STR<br> <br>';
		$idxMain++;
	}
//	debugArr($randNumbers);

	return $res;
}











//$priceFile = get_field('file_price', 36);
//
//
//$file_dir = get_attached_file( $priceFile['id'] );
//
//$exel = PHPExcel_IOFactory::load($file_dir);
//$sheet = $exel->getActiveSheet();
//$highestRowIndex = $sheet->getHighestRow();
//
//
//$priceArr = [];
//
//
//// Получение заголовка
//$priceArr['title'] = $sheet->getCell('A1')->getValue();
//// Пометка об НДС
//$priceArr['ndsText'] = $sheet->getCell('A10')->getValue();
//
//
//$tariffsStart = false;
//
//// Получение цены, направление, код
//for ($i = 1; $i < $highestRowIndex; $i++)
//{
//	$fieldA = $sheet->getCell('A' . $i)->getValue();
//
//	$allTariffsStr = preg_match('/\*Все/', $fieldA);
//
//
//	if ($fieldA == 'Код')
//	{
//		$tariffsStart = true;
//	}
//	else if ($tariffsStart)
//	{
//				$priceArr['tariffs'][] = [
//					'code' => $fieldA,
//					'direction' => $sheet->getCell('B'. $i)->getValue(),
//					'price' => $sheet->getCell('C'. $i)->getValue()
//				];
//	}
//	else if ($i > 3 && !empty($fieldA) && !$allTariffsStr) {
//		$priceArr['header'][] = [
//			'title' => $fieldA,
//			'desc' => $sheet->getCell('B' . $i)->getValue()
//		];
//	}
//}
//
//
//
//
//
////debugArr($priceArr);
////$startCharArr = setTariffsArrStartChar($priceArr['tariffs']);
////debugArr($startCharArr);
//
//
//
//debugArr(getRandomTariffs($priceArr['tariffs']));
