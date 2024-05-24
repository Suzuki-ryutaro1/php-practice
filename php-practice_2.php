<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo "tic-tac\n";
  } else if ($i % 4 === 0) {
    echo "tic\n";
  } else if ($i % 5 === 0) {
    echo "tac\n";
  } else {
    echo "$i\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel'  => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel'  => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel'  => '09055556666'
  ],
];
//問題1
echo $personalInfos[1]['name'] . 'さんの電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題2
foreach ($personalInfos as $i => $information) {
  echo ($i + 1) . '番目の' . $information['name'] . 'のメールアドレスは' . $information['mail'] . 'で、電話番号は' . $information['tel'] . 'です。'."\n";
}

//問題3
$ageList = [25, 30, 18];

foreach($personalInfos as $i => $information) {
  $information['age'] = $ageList[$i];
  $personalInfos[$i] = $information;
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $name;

    public function __construct($studentId, $name)
    {
        $this->studentId = $studentId;
        $this->name = $name;
    }
    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->name.'です。';


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $name;

    public function __construct($studentId, $name)
    {
        $this->studentId = $studentId;
        $this->name = $name;
    }

    public function attend($language)
    {
        echo $this->name . 'は' . $language . 'の授業に参加しました。学籍番号：' . $this->studentId . "\n";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$today = new DateTime();
$a_monthago = $today->modify('-1 month');

echo $a_monthago->format('Y-m-d');

//問題2
$today = new DateTime();
$long_ago = new DateTime('1992-04-25');
$diff = $today->diff($long_ago)->days;

echo 'あの日から' . $diff . '日経過しました。';
?>