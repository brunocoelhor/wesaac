@extends('dashboard')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editions
        <small>All Editions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!

          <a type="button" href="{{ url('dashboard/editions/create') }}" class="btn btn-flat btn-success btn-lg pull-right btn-create" name="button"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span> Create</a>

          @if ($editions->isEmpty())
              <p> No hay Tickets.</p>
            @else

              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr class="text-center">
                          <th >Edition</th>
                          <th>Year</th>
                          <th>City</th>
                          <th>State</th>
                          <th class="text-center">Proceeddings</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Edit</th>
                          <th class="text-center">Delete</th>
                        </tr>
                        @foreach($editions as $edition)
                        <tr>
                          <td>{!! $edition->edition !!}</td>
                          <td>{!! $edition->year !!}</td>
                          <td>{!! $edition->city !!}</td>
                          <td>{!! $edition->state !!}</td>
                          <td class="text-center">
                            @if ($edition->proceedings == '')
                              <span class="label label-danger">Empty</span>
                            @else
                              <span class="label label-success">Received</span>
                          @endif
                          </td>
                          <td class="text-center">
                            @if (  $edition->image_city  == '')
                              <span class="label label-danger">Empty</span>
                            @else
                              <span class="label label-success">Received</span>
                          @endif
                          </td>
                          <td class="text-center"><a href="" type="button" class="btn btn-warning btn-flat"> <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> Edit</a></td>
                          <td class="text-center"><a href="" type="button" class="btn btn-danger btn-flat"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span> Delete</a></td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
        @endif
        </div> <!-- /.box-body -->

      </div> <!-- /.box -->

    </section> <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
