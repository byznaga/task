<?php namespace Byznaga\Controllers;

class ProjectController {

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
		$validator = Validator::make(Input::all(), Project::getRules());

	    if ($validator->fails())
	    {
	        return Redirect::to('project/create')->withErrors($validator);
	    }
	    else
	    {
			$project = new Project;
			$project->name = Input::get('name');
			$project->save();

			return Redirect::to('project');
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Project::findOrFail($id);
		
	    $validator = Validator::make(Input::all(), Project::getRules());

	    if ($validator->fails())
	    {
	        return Redirect::to('project/'.$id.'/edit')->withErrors($validator);
	    }
	    else
	    {
		    $project->name = Input::get('name');
			$project->save();

			return Redirect::to('project');
			
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$project = Project::findOrFail($id);
		$project->delete();
		return Redirect::to('project');
	}

}