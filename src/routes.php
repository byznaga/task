<?php

Route::resource('project', 'ProjectController');
Route::resource('task', 'TaskController');
Route::resource('workflow', 'WorkflowController');
Route::resource('workflowstep', 'WorkflowStepController');
Route::resource('tasktype', 'TaskTypeController');


GET "/thyme/project/{id}/tasks" - Return one project and the tasks associated with it

GET "/thyme/task/{id}/subtasks" - Returns all sub tasks

GET "/thyme/workflow/{id}/step" - Return all workflow items for a workflow
POST "/thyme/workflow/{id}/step/{id}" - Adds an workflow item to a workflow
DELETE "/thyme/workflow/{id}/step/{id}" - Removes an workflow item to a workflow
