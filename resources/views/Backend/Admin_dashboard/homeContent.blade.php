  @extends('Backend.Admin_dashboard.master')
  @section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="padding-left:2%;padding-top:2%">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>

                  <p>Exam</p>
                </div>

                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><sup style="font-size: 20px"></sup>15</h3>

                  <p>Category</p>
                </div>

                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>125</h3>

                  <p>Student</p>
                </div>

                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>

                  <p>Question</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>

                  <h3 class="box-title">To Do List</h3>

                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <ul class="todo-list">
                    <li>
                      <!-- drag handle -->
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                      <!-- checkbox -->
                      <input type="checkbox" value="">
                      <!-- todo text -->
                      <span class="text">Design a nice theme</span>
                      <!-- Emphasis label -->
                      <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                      <input type="checkbox" value="">
                      <span class="text">Make the theme responsive</span>
                      <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                      <input type="checkbox" value="">
                      <span class="text">Let theme shine like a star</span>
                      <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                      <input type="checkbox" value="">
                      <span class="text">Let theme shine like a star</span>
                      <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                      <input type="checkbox" value="">
                      <span class="text">Check your messages and notifications</span>
                      <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                      <input type="checkbox" value="">
                      <span class="text">Let theme shine like a star</span>
                      <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                </div>
              </div>
              <!-- /.box -->

              <!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>

                  <h3 class="box-title">Quick Email</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="box-body">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </form>
                </div>
                <div class="box-footer clearfix">
                  <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </div>



            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              <!-- Map box -->

              <!-- /.box -->

              <!-- solid sales graph -->
              <div class="box box-solid bg-teal-gradient">

              </div>
              <!-- /.box -->

              <!-- Calendar -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>

                  <h3 class="box-title">Calendar</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Progress bars -->
                      <div class="clearfix">
                        <span class="pull-left">Task #1</span>
                        <small class="pull-right">90%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #2</span>
                        <small class="pull-right">70%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="clearfix">
                        <span class="pull-left">Task #3</span>
                        <small class="pull-right">60%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #4</span>
                        <small class="pull-right">40%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                      </div>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>
              <!-- /.box -->

              <div class="container bg-danger">
                    <div class="container p-t-1">
                      <h1 class="display-4 text-xs-center m-b-2">Calculator</h1>
                      <div class="jumbotron col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3 p-x-3 p-y-3 col-xs-12 bg-inverse" style="padding-left:0px;margin:0 auto">
                        <div class="input-group input-group-sm col-xs-12 p-a-0">
                          <input class="col-xs-12 form-control text-xs-right" id="calcscreen" type="text" readonly/>
                        </div>
                        <div class="input-group input-group-lg col-xs-12 p-a-0">
                          <input class="form-control text-xs-right" id="numberscreen" type="text" readonly/>
                        </div>
                        <div class="col-xs-7 calc__clearpad p-a-0 m-t-2">
                          <button class="btn btn-danger col-xs-4 numbers" id="ce" type="button">CE</button>
                          <button class="btn btn-danger col-xs-4 numbers" id="c" type="button">C</button>
                          <button class="btn btn-secondary col-xs-4 numbers" id="±" type="button"> ±</button>
                        </div>
                        <div class="col-xs-5 calc__clearpad p-a-0 m-t-2">
                          <button class="btn btn-secondary col-xs-12 numbers" id="ans" type="button"> ANS   </button>
                        </div>
                        <div class="col-xs-7 calc__numberpad p-a-0">
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="7" type="button">7</button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="8" type="button">8</button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="9" type="button">9</button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="4" type="button">4</button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="5" type="button">5</button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="6" type="button">6</button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="1" type="button">1</button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="2" type="button">2</button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="3" type="button">3</button>
                          <button class="btn btn-lg btn-secondary col-xs-8 numbers" func="0" type="button">0  </button>
                          <button class="btn btn-lg btn-secondary col-xs-4 numbers" func="." type="button">.</button>
                        </div>
                        <div class="col-xs-5 calc__operatorpad p-a-0">
                          <button class="btn btn-lg btn-secondary col-xs-6 operator" func="/" type="button">/ </button>
                          <button class="btn btn-lg btn-secondary col-xs-6 operator" func="%" type="button">% </button>
                          <button class="btn btn-lg btn-secondary col-xs-6 operator" func="*" type="button">* </button>
                          <button class="btn btn-lg btn-secondary btn-lg col-xs-6" id="squareroot" func="√" type="button">√</button>
                          <button class="btn btn-lg btn-secondary col-xs-6 operator" func="-" type="button">- </button>
                          <button class="btn btn-lg btn-secondary col-xs-6 operator" func="+" type="button">+ </button>
                          <button class="btn btn-lg btn-primary col-xs-12" id="equals" func="=" type="button"> =</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
