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
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Editions</a></li>
        <li class="active">Index</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <div class="row">
              <div class="col-sm-9">
                <h3 class="box-title"></h3>
              </div>
              <div class="col-sm-3">
                {{-- <a class="btn btn-primary" href="{{ route('department.create') }}">Add new department</a> --}}
                <a type="button" href="{{ url('dashboard/editions/create') }}" class="btn btn-flat btn-success btn-lg btn-block btn-create" n
                ame="button"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span> Add New Edition</a>
              </div>
          </div>


        </div>
        <div class="box-body">
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
          @if ($editions->isEmpty())
              <p> No editions registered.</p>
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
                          <td>{!! $edition->state !!}
                            {{-- <img class="img-responsive" src="{!! Storage::disk('local')->url($edition->image_city) !!}" alt=""> --}}
                          </td>
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
                          <td class="text-center"><a href="{!! action('EditionController@edit', $edition->id) !!}" type="button" class="btn btn-warning btn-flat"> <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> Edit</a></td>

                          {{-- <td>
                            <form class="row" method="POST" action="{{!! action('EditionController@destroy', $edition->id) !!}}" onsubmit = "return confirm('Are you sure?')">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">
                                  Delete
                                </button>
                            </form>
                          </td> --}}



                          <td class="text-center">
                            <form method="post" action="{!! action('EditionController@destroy', $edition->id) !!}" class="pull-left">
                                {{-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> --}}
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-flat"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span> Delete</button>
                             </form>
                          </td>

                            {{-- <a href="{!! action('EditionController@destroy', $edition->id) !!}" type="button" class="btn btn-danger btn-flat"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span> Delete</a></td> --}}
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
