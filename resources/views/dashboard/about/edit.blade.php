@extends('dashboard')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        About
        <small>Edit About</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Edit About</li>
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
            <form role="form" method="POST" action="{!! action('AboutController@update', $about->id) !!}" enctype="multipart/form-data">
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
              <input name="_method" type="hidden" value="PATCH">
              <div class="box-body">

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

                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;">{!! $about->description !!}</textarea>
                    </div>
                  </div>
                </div>


                <div class="form-group col-xs-12">
                  <label for="image">Image File input</label>
                  <input type="file" value="{!! $about->image_about !!}" id="image" name="image">

                  <p class="help-block">Add a image of thumb.</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
                <div class="col-xs-12">
                  <h3>About Image</h3>
                  <img class="img-responsive thumbnail" src="{!! Storage::disk('local')->url($about->image_about) !!}">
                </div>
            </div>
          </div>
      </div>

  </section>
  </div> <!-- /.content-wrapper -->
@endsection
