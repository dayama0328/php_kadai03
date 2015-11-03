<?php
// N個(Nは1より大きい奇数)の数字が与えられたとき、それらの数字の個数、最大、最小、平均、標準偏差を出力せよ。
// ただし、平均値と標準偏差は、小数点第一位まで出力せよ。
// [実行結果例]
// // 90 35 40 40 30
// 最大: 90 最小: 30 平均: 47.0 標準偏差: 21.8

$num = array(90,35,40,40,30);

echo "最大：".max($num)."<br>";
echo "最小：".min($num)."<br>";
echo "平均：".sprintf('%0.1f', array_sum($num) / count($num))."<br>";
echo "標準偏差：".round(stats_standard_deviation($num), 1);

function stats_standard_deviation($num) {
        // 平均取得
        $avg = array_sum($num) / count($num);

        // 各値の平均値との差の二乗【(値-平均値)^2】を算出
        $diff_ary = array();
        foreach ($num as $val) {
                $diff = $val-$avg;
                $diff_ary[] = pow($diff,2);
        }

        // 上記差の二乗の合計を算出
        $diff_total = array_sum($diff_ary);
        // 平均を算出
        $diff_avg   = $diff_total/count($diff_ary);

        // 平方根を取る(標準偏差)
        $stdev = sqrt($diff_avg);

        // 標準偏差を返す
        return $stdev;
}

?>


