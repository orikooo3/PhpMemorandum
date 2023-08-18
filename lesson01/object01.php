<?php class Person {
// クラスのプロパティ（変数）
public $name;
public $age;

// コンストラクタ（初期化メソッド）
public function __construct($name, $age) {
$this->name = $name;
$this->age = $age;
}

// メソッド（関数）
public function introduce() {
echo "こんにちわ! 私の名前は" . $this->name . "です。" . "年齢は" . $this->age . "です。" . '<br>';
}
}

// クラスを使ってオブジェクトを作成
$person1 = new Person("Alice", 25);
$person2 = new Person("Bob", 30);

// オブジェクトのメソッドを呼び出して使用
$person1->introduce(); // 出力: "Hello, my name is Alice and I'm 25 years old."
$person2->introduce(); // 出力: "Hello, my name is Bob and I'm 30 years old."
