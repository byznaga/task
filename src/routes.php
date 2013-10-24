<?php

Route::resource('project', 'ProjectController');
Route::resource('task', 'TaskController');
Route::resource('workflow', 'WorkflowController');
Route::resource('workflowstep', 'WorkflowStepController');
Route::resource('tasktype', 'TaskTypeController');

Route::get('/project/{id}/tasks', 'ProjectController@showTasks');
Route::get('/task/{id}/subtasks', 'TaskController@showSubtasks');

Route::get('/workflow/{id}/step', 'WorkflowController@showSteps');
Route::post('/workflow/{workflowId}/step/{stepId}', 'WorkflowController@showStep');
Route::delete('/workflow/{workflowId}/step/{stepId}', 'WorkflowController@destroyStep');
