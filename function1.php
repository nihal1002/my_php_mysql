<?php
echo "learning functions <br>";
$nihuMarks = [55,65,75,85,60,56];
$barbieMarks = [92,65,75,85,82,56];
$junaidMarks = [92,95,85,87,82,32];

// function marksTotal($marksArr){
//     $sum = 0;
//     foreach ($marksArr as $value) {
//         $sum += $value;
//     }
//     return $sum;
// }


function avgMarks($marksArr){
    $sum = 0;
    $i = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}


// $sumMarksNihu = marksTotal($nihuMarks);
$sumMarksNihu = avgMarks($nihuMarks);
// $sumMarksBarbie = marksTotal($barbieMarks);
$sumMarksBarbie = avgMarks($barbieMarks);
// $sumMarksJunaid = marksTotal($junaidMarks);
$sumMarksJunaid = avgMarks($junaidMarks);
echo "marks of Nihu out of 600 is $sumMarksNihu <br>";
echo "marks of Barbie out of 600 is $sumMarksBarbie <br>";
echo "marks of Junaid out of 600 is $sumMarksJunaid <br>";
?>
