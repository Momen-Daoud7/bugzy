@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Projects</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Projects Information</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">projects</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
									<a  class="btn btn-success" href="{{route('projects.create')}}">
											<i class="fa fa-plus"></i>
										Add Project
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example2">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">#</th>
												<th class="wd-15p border-bottom-0">Project Name</th>
												<th class="wd-20p border-bottom-0">Start Date</th>
												<th class="wd-15p border-bottom-0">Target End Date</th>
												<th class="wd-10p border-bottom-0">Actual End Date</th>
												<th class="wd-25p border-bottom-0">Created By</th>
												<th class="wd-25p border-bottom-0">Created On </th>
												<th class="wd-25p border-bottom-0">Modifed On</th>
												<th class="wd-25p border-bottom-0">Modifid By</th>
												<th class="wd-25p border-bottom-0">Edit</th>
												<th class="wd-25p border-bottom-0">Delete</th>
											</tr>
										</thead>
										<tbody>
											@foreach($projects as $project)
												<tr>
													<td>{{$project->id}}</td>
													<td>{{$project->project_name}}</td>
													<td>{{$project->start_date}}</td>
													<td>{{$project->target_end_date}}</td>
													<td>{{$project->actual_end_date}}</td>
													<td>{{$project->creator->name}}</td>
													<td>{{$project->create_at}}</td>
													<td>{{$project->update_at}}</td>
													<td>{{$project->modifed_by}}</td>
													<td>
														<a href="{{route('projects.edit',$project->id)}}" class="btn btn-sm btn-info">Edit</a>
													</td>
													<td>
														<form method="post" action="{{route('projects.destroy',$project->id)}}">
															@csrf
															{{ method_field('delete') }}

															<button type="submit" class="btn btn-sm btn-danger">Delete</button>
														</form>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
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