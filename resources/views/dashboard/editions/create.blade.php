@extends('dashboard')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editions
        <small>Add New Edition</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Editions</a></li>
        <li class="active">Add New Edition</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('/dashboard/editions') }}" enctype="multipart/form-data">
              @foreach ($errors->all() as $error)
              <p class="alert alert-danger">{{ $error }}</p>
              @endforeach

              @if (session('status'))
                  <div class = "alert alert-success">
                      {{ session ('status') }}
                  </div>
              @endif
{{-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> --}}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group col-xs-6">
                  <label for="edition">Edition Number</label>
                  <input type="number" class="form-control" id="edition" name="edition" placeholder="Enter edition number" min="0">
                </div>
                <div class="form-group col-xs-6">
                  <label for="year">Year</label>
                  <input type="number" class="form-control" id="year" name="year" placeholder="Year" min:"2000" max="2050">
                </div>
                <div class="form-group col-xs-8">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City">
                </div>
                <div class="form-group col-xs-4">
                  <label for="state">State</label>
                  <input type="text" class="form-control" id="state" name="state" placeholder="State" maxlength="2">
                </div>

                <div class="form-group col-xs-12">
                  <label for="description">Description</label>
                  <div class="box">
                    <div class="box-header">
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-minus"></i></button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <textarea class="textarea" id="description" name="description" placeholder="Description about the event"

                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;"></textarea>
                    </div>
                  </div>
                </div>


                <div class="form-group col-xs-12">
                  <label for="proceedings">Proceedings File input</label>
                  <input type="file" id="proceedings" name="proceedings">

                  <p class="help-block">Add a proceedings.</p>
                </div>
                <div class="form-group col-xs-12">
                  <label for="image">Image File input</label>
                  <input type="file" id="image" name="image">

                  <p class="help-block">Add a image of thumb.</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
  </section>


    {{-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add new department</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Department Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


  </div>
  <!-- /.content-wrapper -->
@endsection
