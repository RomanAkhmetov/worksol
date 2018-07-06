<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\web\UploadedFile;

$this->title = 'Новая задача';
?>



<?php $form = ActiveForm::begin([
	'id' => 'create-form',
	'layout' => 'horizontal',
	'fieldConfig' => [
		'template' => "{input}",
		'options' => [
			//'tag'=>'span'
                    'enctype' => 'multipart/form-data','tag'=>'span'
		]
]
]); ?>


    <div class='container'>

 
        <div class="form-group">
       
                    <?= $form->field($model, 'title')->textInput(['placeholder'=>'Заголовок'])->label(""); ?>    
          
        </div>

             <div class="form-group">
             
                    <?= $form->field($model, 'desc')->textInput(['placeholder'=>'Описание'])->label(""); ?>    
            
        </div>


             <div class="form-group">
           
                <?= $form->field($model, 'project_id')->dropDownList(ArrayHelper::map($projects,'id','name'),['prompt' => 'Выберите проект']);?>
           
        </div>

         <div class="form-group">
            
                <?=$form->field($model, 'priority')->dropDownList(ArrayHelper::map($priorities,'id','priority_title'),['prompt' => 'Выберите приоритет']); ?>
            
        </div>

    <div class="form-group">
            
                <?=$form->field($model, 'category')->dropDownList([
                    '1'=>'Доработка',
                    '2'=>'Баг',
                    '3'=>'Консультация',
                    '4'=>'Оценка',
                    '5'=>'Не применимо'
                ],['prompt' => 'Выберите категорию']); ?>
            
        </div>




             <div class="form-group">

        <?= $form->field($model, 'deadline')->widget(DatePicker::classname(),[
            'model' => $model,
            'name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Введите дату дедлайна'],
            'pluginOptions' => [
                    'format' => 'yyyy-M-d',
                    'todayHighlight' => true
            ]
        ])?>

            </div>
        



        <div class="form-group">
              <?=
                  $form->field($uploadModel,'file')->fileInput();         
               ?>
        </div>


            <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Создать', ['class' => 'button button-primary', 'name' => 'login-button']) ?>
                    </div>

            </div>
        
    

<?php ActiveForm::end(); ?>
   </div>
    
    






