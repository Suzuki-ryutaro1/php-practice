<?php
// Q1 変数と文字列
$name = '鈴木';
echo '私の名前は「'. $name .'」です。';

// Q2 四則演算
$sum = 5 * 4;
echo $sum . "\n";

$sum = $sum / 2;
echo $sum . "\n";

// Q3 日付操作
echo '現在時刻は、' . date("Y年m月d日 H時i分s秒") . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows' || $device === 'mac'){
  echo '使用OSは、' . $device . 'です。';
} else{
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 20;

$message = ($age >= 18) ? '成人です。' :  '未成年です。';
echo  $message;

// Q6 配列
$kanto = ['茨城県', '群馬県', '栃木県', '千葉県', '埼玉県', '東京都', '神奈川県'];
echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];

foreach ($kanto as $center) {
  echo $center . "\n";
}

// Q8 連想配列-2
$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];

foreach ($kanto as $kanto => $center) {
  if ($kanto === '埼玉県') {
    echo $kanto . 'の県庁所在地は、' . $center . 'です。';
  }
}

// Q9 連想配列-3
$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];

$kanto += [
  '愛知県' => '名古屋市',
  '大阪府' => '大阪市'
];

$no_kanto = ['愛知県', '大阪府'];

foreach ($kanto as $kanto => $center) {
  if(in_array($kanto, $no_kanto)){
      echo $kanto . "は関東地方ではありません。\n";
  }else{
      echo $kanto . 'の県庁所在地は、' . $center . "です。\n";
  }
}

// Q10 関数-1
function hello($name){
  return $name . 'さん、こんにちは。';
};

echo hello('金谷') . "\n";
echo hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price){
  return $price * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 === 0) {
    return $number . "は偶数です。\n";
  } else {
    return $number . "は奇数です。\n";
  }
}

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($result) {
  switch ($result) {
    case 'A':
    case 'B':
      return "合格です。\n";
    
    case 'C':
      return "合格ですが追加課題があります。\n";
    
    case 'D':
      return "不合格です。\n";
    
    default:
      return "判定不明です。講師に問い合わせてください。\n";
  }
}

echo evaluateGrade('B');
echo evaluateGrade('bye');

?>