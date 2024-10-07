<!DOCTYPE html>
<html lang="ja">
    <head>
    </head>
    <body>
        <?php
        $score[0]=80;
        $score[1]=60;
        $score[2]=55;
        $score[3]=40;
        $score[4]=100;
        $score[5]=25;
        $score[6]=80;
        $score[7]=95;
        $score[8]=30;
        $score[9]=60;

        $total=$score[0]+$score[1]+$score[2]+$score[3]+$score[4]+$score[5]+$score[6]+$score[7]+$score[8]+$score[9];
        $average=$total / 10;

        echo $average ;

?>
    </body>
</html>