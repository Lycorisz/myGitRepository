<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="paper-form">
<?
$form = ActiveForm::begin([
        'action'=>['paper/complete','id'=>$id,'userid'=>$userid],
        'method'=>'post'
])?>
<div class="choice">
    <h3>选择题</h3><br><br>
        <ol>

                <?
                $allChoice = (new \yii\db\Query())
                            ->select('*')
                            ->from('choice')
                            ->where('cho_chap='.$id)
                            ->all();
                foreach ($allChoice as $choice=>$cho_v){
                        echo '<li><h4>'.$cho_v['cho_info'].'</h4>';
                        echo '<input type="radio" name="ans['.'cques'.']['.$cho_v['cho_id'].']" value="'.$cho_v['cho_op1'].'" />'.$cho_v['cho_op1'].'<br>';
                        echo '<input type="radio" name="ans['.'cques'.']['.$cho_v['cho_id'].']" value="'.$cho_v['cho_op2'].'" />'.$cho_v['cho_op2'].'<br>';
                        echo '<input type="radio" name="ans['.'cques'.']['.$cho_v['cho_id'].']" value="'.$cho_v['cho_op3'].'" />'.$cho_v['cho_op3'].'<br>';
                        echo '<input type="radio" name="ans['.'cques'.']['.$cho_v['cho_id'].']" value="'.$cho_v['cho_op4'].'" />'.$cho_v['cho_op4'].'<br></li>';
              }
                ?>

        </ol>
</div>
    <br><br>
    <div class="tf">
        <h3>判断题</h3><br><br>
        <ol>

            <?
            $allTf = (new \yii\db\Query())
                ->select('*')
                ->from('tf')
                ->where('tf_chapter='.$id)
                ->all();
            foreach ($allTf as $choice=>$cho_v){
                echo '<li><h4>'.$cho_v['tf_info'].'</h4>';
                echo '<input type="radio" name="ans['.'tques'.']['.$cho_v['tf_id'].']" value="t" />正确<br>';
                echo '<input type="radio" name="ans['.'tques'.']['.$cho_v['tf_id'].']" value="f" />错误<br></li>';
            }
            ?>

        </ol>
    </div>
    <br><br>
    <div class="fillblank">
        <h3>填空题</h3><br><br>
        <ol>

            <?
            $allFb = (new \yii\db\Query())
                ->select('*')
                ->from('fillblank')
                ->where('fb_chapter='.$id)
                ->all();
            foreach ($allFb as $choice=>$cho_v){
                echo '<li><h4>'.$cho_v['fb_info'].'</h4>';
                echo '<input type="text" name="ans['.'fques'.']['.$cho_v['fb_id'].']" /><br></li>';
            }
            ?>
    </div>
    <br><br>
    <?= Html::submitButton('提交',['class' => 'btn btn-success']);?>
<? ActiveForm::end();?>
</div>
