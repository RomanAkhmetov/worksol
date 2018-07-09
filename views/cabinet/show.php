<?php  //echo '<pre>';print_r($task)?>
<div id="content">	
	<div class="container">
		<div class="row">
			<div class="six columns">
				<h1>Просмотр задачи</h1>
			</div>
			<div class="three columns addTaskBtn">
				<a class="button button-primary" href="addtask.php" >Редактировать задачу</a>
			</div>		
			<div class="three columns addTaskBtn">
				<a class="button button-primary" href="finishtask.php" >Завершить задачу</a>
			</div>		
		</div>
                    
		<div class="row">			
			<div class="twelve columns taskDetails">
				<div class="row">
					<div class="six columns">
						<form>			  
							
							<p><b>Тип задачи</b></p>
							<p><?=$task['category']?></p>														
							
							<p><b>Суть задачи</b></p>
							<p><?=$task['task_title']?></p>
							
							<p><b>Подробное описание задачи</b></p>
							
                                                            <p><?=$task['task_description']?></p>
							
							<p><b>Дедлайн задачи</b></p>
							<p><?=$task['deadline_time']?></p>
							
							<p><b>Файлы</b></p>
							<a href="" class="taskFiles"><i class="el el-file"></i> Скриншот, JPG</a>
							<a href="" class="taskFiles"><i class="el el-file"></i> Описание логики, DOCX</a>
							<a href="" class="taskFiles"><i class="el el-file"></i> Схема, ASE</a>

						</form>
					</div>
					<div class="six columns">
						<div class="helpBox">
							<h5>Дополнительная информация</h5>
							<p><b>Ответственный</b></p>
							<p><?=$task['manager']['fullname']?></p>
							<p><b>Приоритет:</b>   <?=$task['priority']?></p>
							<p><b>Статус:</b>   <?=$task['task_status']?></p>
							<p><b>Затрачено времени:   </b>КАКОЕ-ТО ВРЕМЯ</p>								
						</div>
					</div>
				</div>
				<div class="comments">
					<h5>Обсуждение задачи</h5>
					<div class="row one-comment sumteh-comment">
						<div class="twelve columns">					
							<div class="comment-author"><p>25 ноября в 17:58, Ломов Д.М.</p></div>
							<div><p>Прошу уточнить: XML-пакеты каких заявок необходимо доработать.</p></div>
						</div>
					</div>
					<div class="row one-comment client-comment">
						<div class="twelve columns">					
							<div class="comment-author"><p>25 ноября в 18:20, Ривз К.П.</p></div>
							<div><p>Все заявки</p></div>
						</div>
					</div>
					<div class="row one-comment sumteh-comment-hidden">
						<div class="twelve columns">					
							<div class="comment-author"><p>25 ноября в 18:25, Ломов Д.М.</p></div>
							<div><p>Вот и разобрались</p></div>
						</div>
					</div>
					<h5>Добавить комментарий</h5>
					<form>												
						<textarea name="t2" cols="40" rows="10" placeholder="Пример: Форма размещена на странице..."></textarea><br>
						<input class="button-primary" type="submit" value="Добавить комментарий">
					</form>
				</div>
			</div>
		</div>
		

		
	</div>
</div>


</body>
</html>
