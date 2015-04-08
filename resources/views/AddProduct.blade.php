@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Add a Product</h4>
                </div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('AddProduct') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" 
                                       class="form-control" 
                                       id="title" 
                                       name="title" 
                                       placeholder="Game Title"
                                       value="{{ old('title') }}" 
                                       required
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Development Studio</label>
                            <div class="col-md-6">
                                <input type="text" 
                                       class="form-control" 
                                       id="developer" 
                                       name="developer" 
                                       placeholder="ABC Studios"
                                       value="{{ old('developer') }}" 
                                       required
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Console</label>
                            <div class="col-md-6">
                                <select class="form-control" id="console" name="console" required>
                                    <option>Xbox</option>
                                    <option>Xbox 360</option>
                                    <option>Playstation 4</option>
                                    <option>Playstation 3</option>
                                    <option>PC</option>
                                    <option>Wii</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Price</label>
                            <div class="col-md-6">
                                <input type="text" 
                                         class="form-control" 
                                         id="price" 
                                         name="price" 
                                         placeholder="e.g., 49.99"
                                         value="{{ old('price') }}" 
                                         required
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Rating</label>
                            <div class="col-md-6">
                                <select class="form-control" id="rating" name="rating" required>
                                    <option>EC</option>
                                    <option>E</option>
                                    <option>E10+</option>
                                    <option>T</option>
                                    <option>M</option>
                                    <option>AO</option>
                                    <option>RP</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Comments</label>
                            <div class="col-md-6">
                                <input type="text" 
                                       class="form-control" 
                                       id="comments" 
                                       name="comments" 
                                       value="{{ old('comments') }}" 
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection