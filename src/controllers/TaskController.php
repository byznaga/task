<?php namespace Byznaga\Controllers;

class TaskController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Task::getRules());

	    if ($validator->fails())
	    {
	        return Redirect::to('task/create')->withErrors($validator);
	    }
	    else
	    {
			$task = new Task;
			$task->project_id = Input::get('project_id');
			$task->creator_user_id = Input::get('creator_user_id');
			$task->assigned_to_user_id = Input::get('assigned_to_user_id');
			$task->type_id = Input::get('type_id');
			$task->workflow_step_id = Input::get('workflow_step_id');
			$task->name = Input::get('name');
			$task->due_at = Input::get('due_at');
			$task->hard_due_at = Input::get('hard_due_at');
			$task->save();

			return Redirect::to('task');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Task::findOrFail($id);
		
	    $validator = Validator::make(Input::all(), Task::getRules());

	    if ($validator->fails())
	    {
	        return Redirect::to('task/'.$id.'/edit')->withErrors($validator);
	    }
	    else
	    {
		    $task = new Task;
			$task->project_id = Input::get('project_id');
			$task->creator_user_id = Input::get('creator_user_id');
			$task->assigned_to_user_id = Input::get('assigned_to_user_id');
			$task->type_id = Input::get('type_id');
			$task->workflow_step_id = Input::get('workflow_step_id');
			$task->name = Input::get('name');
			$task->due_at = Input::get('due_at');
			$task->hard_due_at = Input::get('hard_due_at');
			$task->save();

			return Redirect::to('task');
			
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$task = Task::findOrFail($id);
		$task->delete();
		return Redirect::to('task');
	}

}