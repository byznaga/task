<?php

use Illuminate\Database\Seeder;
use Byznaga\Task\Models\TaskType as TaskType;
use Byznaga\Task\Models\WorkflowStep as WorkflowStep;

class TaskSeeder extends Seeder {

    public function run()
    {
    	$this->seedTaskTypes();
    	$this->seedWorkflowSteps();        
    }

    public function seedTaskTypes() 
    {
    	DB::table('task_types')->truncate();

    	$taskTypes = array('HTML', 'CSS', 'Javascript', 'Backend');

    	if (count($taskTypes) > 0) 
    	{
    		foreach ($taskTypes as $taskTypeName) 
    		{
    			$taskType = new TaskType();
    			$taskType->name = $taskTypeName;
    			$taskType->save();
    		}
    	}

    }

    public function seedWorkflowSteps() 
    {
    	DB::table('workflow_steps')->truncate();

    	$steps = array('Start', 'In Process', 'QA', 'Finish');

    	if (count($steps) > 0) 
    	{
    		foreach ($steps as $index => $step) 
    		{
    			$workflowStep = new WorkflowStep();
    			$workflowStep->name = $step;
    			$workflowStep->step = $index;
    			$workflowStep->save();
    		}
    	}
    }


}