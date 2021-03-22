<?php

$paperAns = $_POST['ans'];
$choiceAns = $paperAns['cques'];
$tfAns = $paperAns['tques'];
$fbAns = $paperAns['fques'];
$userid = Yii::$app->user->id;

$allChoice = (new \yii\db\Query())
    ->select('*')
    ->from('choice')
    ->where('cho_chap='.$id)
    ->all();
$allTf = (new \yii\db\Query())
    ->select('*')
    ->from('tf')
    ->where('tf_chapter='.$id)
    ->all();
$allFb = (new \yii\db\Query())
    ->select('*')
    ->from('fillblank')
    ->where('fb_chapter='.$id)
    ->all();

?>

<div class="container">
    <div class="list-group">
        <?php foreach ($choiceAns as $ans_k=>$ans_v){
            foreach ($allChoice as $choice => $item){
                if($ans_k==$item['cho_id']){
                    if ($ans_v==$item['cho_answer']){
                        echo '<div class="list-group-item"><h3>'.$item['cho_info'].'</h3><br>';
                        echo '<text>本题答案为'.$item['cho_answer'].',你的答案是'.$ans_v.',回答正确</text><br>';
                        echo '<h3>解析：</h3><br>';
                        echo '<text>'.$item['cho_profile'].'</text></div><br>';
                    }else{
                        echo '<div class="list-group-item"><h3>'.$item['cho_info'].'</h3><br>';
                        echo '<text>本题答案为'.$item['cho_answer'].',你的答案是'.$ans_v.',回答错误</text><br>';
                        echo '<h3>解析：</h3><br>';
                        echo '<text>'.$item['cho_profile'].'</text></div><br>';
                    }
                }
            }
        }
        foreach ($tfAns as $ans_k=>$ans_v){
        foreach ($allTf as $tf => $item){
                if($ans_k==$item['tf_id']){
                    if ($ans_v==$item['tf_answer']){
                        echo '<div class="list-group-item"><h3>'.$item['tf_info'].'</h3><br>';
                        echo '<text>本题答案为'.$item['tf_answer'].',你的答案是'.$ans_v.',回答正确</text><br>';
                        echo '<h3>解析：</h3><br>';
                        echo '<text>'.$item['tf_profile'].'</text></div><br>';
                    }else{
                        echo '<div class="list-group-item"><h3>'.$item['tf_info'].'</h3><br>';
                        echo '<text>本题答案为'.$item['tf_answer'].',你的答案是'.$ans_v.',回答错误</text><br>';
                        echo '<h3>解析：</h3><br>';
                        echo '<text>'.$item['tf_profile'].'</text></div><br>';
                    }
                }
            }
        }

        foreach ($tfAns as $ans_k=>$ans_v){
            foreach ($allTf as $tf => $item){
                if($ans_k==$item['tf_id']){
                    if ($ans_v==$item['tf_answer']){
                        echo '<div class="list-group-item"><h3>'.$item['tf_info'].'</h3><br>';
                        echo '<text>本题答案为'.$item['tf_answer'].',你的答案是'.$ans_v.',回答正确</text><br>';
                        echo '<h3>解析：</h3><br>';
                        echo '<text>'.$item['tf_profile'].'</text></div><br>';
                    }else{
                        echo '<div class="list-group-item"><h3>'.$item['tf_info'].'</h3><br>';
                        echo '<text>本题答案为'.$item['tf_answer'].',你的答案是'.$ans_v.',回答错误</text><br>';
                        echo '<h3>解析：</h3><br>';
                        echo '<text>'.$item['tf_profile'].'</text></div><br>';
                    }
                }
            }
        }

        foreach ($fbAns as $ans_k=>$ans_v){
            foreach ($allFb as $fb => $item){
                if($ans_k==$item['fb_id']){
                        echo '<div class="list-group-item"><h3>'.$item['fb_info'].'</h3><br>';
                        echo '<text>本题答案为'.$item['fb_answer'].',你的答案是'.$ans_v.'</text><br>';
                        echo '<h3>解析：</h3><br>';
                        echo '<text>'.$item['fb_profile'].'</text></div><br>';
                    }
                }
            }

        ?>
    </div>
</div>
