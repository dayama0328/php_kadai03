<?php
// #### 基本要件(必須)
// 下記のようなCSV形式の売上データが与えられている。
// このCSVファイルを読み込んで、社員数、売上合計、売上平均を出力せよ。

// #### 応用要件
// 上記の出力結果を"report.csv"というファイル名で出力せよ。

// ```csv:sales.csv
// 社員名,売上
// Kashiwagi,1000
// Hidaka,500
// Ohira,300
// ```

// ```実行結果
// // 画面表示結果
// 社員数: 3
// 売上合計: 1800
// 売上平均: 600
// ```

// ```csv:report.csv
// 社員数,売上合計,売上平均
// 3,1800,600
// ```

#日本語が読み込まれない場合に記述
  setlocale(LC_ALL,'ja_JP.UTF-8');

$file_name = "sales.csv";

  #csvファイルをオープン
  $fp = fopen($file_name,"r");

  print "<table border='1'>";

  #fgetcsv関数がfalseを返却するまで実行
  while($data = fgetcsv($fp)){
    print "<tr>";

    #csvファイルの列数だけ実行
    for($i=0;$i<count($data);$i++){
      print "<td>".$data[$i]."</td>";
    }
    print "</tr>";
  }
  print "</table>";
  fclose($fp);

?>