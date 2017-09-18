@extends('dashboard')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Intro
        <small>Edit Intro</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Edit Intro</li>
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
              <h3 class="box-title">Edit Image</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{!! action('IntroController@update', $intro->id) !!}" enctype="multipart/form-data">
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



                <div class="form-group col-xs-12 box-header with-border">
                  <label for="image">Image File input</label>
                  <input type="file" value="{!! $intro->image_background !!}" id="image" name="image">

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
                  <h3>Background Image</h3>
                  <img class="img-responsive thumbnail" src="{!! Storage::disk('local')->url($intro->image_background) !!}">
                </div>
            </div>
          </div>
      </div>
  </section>
  </div> <!-- /.content-wrapper -->
@endsection
