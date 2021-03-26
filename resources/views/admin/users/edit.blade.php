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
					@include('partials.errors')
					<div class="col-12">
						<form method="post" action="{{route('admin.users.update',$user->id)}}">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" value="{{$user->name}}">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" value="{{$user->email}}">
							</div>
							<div class="form-group">
								<label for="role">Role</label>
								<select class="form-control" name="role" id="role">
									<option selected disabled value="{{$user->role}}">{{$user->role}}</option>
									<option value="manager">Manager</option>
									<option value="developer">Developer</option>
									<option value="admin">Admin</option>
								</select>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" value="{{$user->password}}">
							</div>
							<button type="submit" class="btn btn-success">Edit</button>
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