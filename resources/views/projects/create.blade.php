@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Admin</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
					@include('partials.errors')
					<div class="col-12">
						<form method="post" action="{{route('projects.store')}}">
							@csrf
							@method('post')
							<div class="form-group">
								<label for="name">Project Name</label>
								<input type="text" name="project_name" class="form-control">
							</div>
							<div class="form-group">
								<label for="start_date">Start Date</label>
								<input type="date" name="start_date" class="form-control">
							</div>

							<div class="form-group">
								<label for="target_end_date">Target End Date</label>
								<input type="date" name="target_end_date" class="form-control">
							</div>

							<div class="form-group">
								<label for="actual_end_date">Actual End Date</label>
								<input type="date" name="actual_end_date" class="form-control">
							</div>

							<!-- created by -->
							<input type="hidden" name="created_by" value="{{auth()->user()->id}}">
							<!-- created by -->

							<button type="submit" class="btn btn-success">Create a project</button>
						</form>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection