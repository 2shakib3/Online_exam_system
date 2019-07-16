@extends('Backend.Admin_dashboard.master')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-left:2%;padding-top:2%">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Catagory
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Catagory</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        @include('Backend.Catagory.addCategory')
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#SL</th>
                <th scope="col">Catagory</th>
                <th scope="col">Catagory Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>php</td>
                <td>set qoestion for php</td>
                <td>
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Java</td>
                <td>set qoestion for php</td>
                <td>
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </td>
              </tr>
            </tbody>
          </table>
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
