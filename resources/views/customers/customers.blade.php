@extends('welcome')

@section('body')

    <section class="content">
        <div class="row">
            <div class="col-12">

                <!-- /.card -->

                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('professional') }}" class="btn btn-info float-right mr-1"
                            type="button">Professional</a>
                        <a href="{{ route('private') }}" class="btn btn-info float-right mr-1">Private</a>
                        <button class="btn btn-info float-right mr-1" type="button" data-toggle="modal"
                            data-target="#modal-lg">Add New Customer</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Company Name</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Postal Code</th>
                                    <th>City</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $cust)
                                    <tr>
                                        <td>{{ $cust->id }}</td>
                                        <td>{{ $cust->company_name }}</td>
                                        <td>{{ $cust->name }}</td>
                                        <td>{{ $cust->address }}</td>
                                        <td>{{ $cust->postal_code }}</td>
                                        <td>{{ $cust->city }}</td>
                                        <td>{{ $cust->mobile }}</td>
                                        <td>{{ $cust->email }}</td>
                                        <td>{{ $cust->type }}</td>
                                        <td><a class="btn btn-info btn-sm" href="{{route('edit',['id'=>$cust->id])}}">Edit</a></td>

                                    </tr>
                                @endforeach


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Company Name</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Postal Code</th>
                                    <th>City</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>



    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Customer Type</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">

                            <select class="form-control">
                                <option value="">Select Type</option>
                                <option value="pro">Professional</option>
                                <option value="cli">Client</option>
                            </select>
                        </div>

                    </div>

                    <div id="pro">
                        <div class="card card-primary mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Professional Customer</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('procustomer') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company Name</label>
                                        <input type="text" name="company_name" class="form-control"
                                            id="exampleInputEmail1" placeholder="Enter Company Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">SIRET</label>
                                        <input type="text" name="siret" class="form-control" id="exampleInputEmail1"
                                            placeholder="SIRET">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" name="address" class="form-control" id="exampleInputEmail1"
                                            placeholder="Address">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Additional Address</label>
                                        <input type="text" name="additional_address" class="form-control"
                                            id="exampleInputEmail1" placeholder="Additional">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Postal Code</label>
                                        <input type="text" name="postal_code" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Postal Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" name="city" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter City">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">VAT</label>
                                        <input type="text" name="vat_no" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter VAT">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fax</label>
                                        <input type="text" name="fax" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Fax">
                                    </div>
                                    <hr>
                                    <h5>Contact Info</h5>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">name</label>
                                        <input type="text" name="contact_name" class="form-control"
                                            id="exampleInputEmail1" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">title</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">first_name</label>
                                        <input type="text" name="cfirst_name" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter first_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">function</label>
                                        <input type="text" name="cfunction" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter function">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">mobile</label>
                                        <input type="text" name="cmobile" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter mobile">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">landline</label>
                                        <input type="text" name="clandline" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter landline">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="cemail" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Email">
                                    </div>




                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div id="cli">
                        <div class="card card-primary mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Private Customer</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('clientCustomer') }}" method="POST">
                                @csrf
                                <div class="card-body">


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                            placeholder="Name">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Function</label>
                                        <input type="text" name="function" class="form-control" id="exampleInputEmail1"
                                            placeholder="Function">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Mobile">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">LandLIne</label>
                                        <input type="text" name="landline" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Landline">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Postal Code</label>
                                        <input type="text" name="postal_code" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Postal Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" name="city" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter City">
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <style>
        .dt-button {
            background-color: rgb(6, 115, 158);
            border: 0px;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <!-- jQuery -->
    {{-- <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> --}}
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>




    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel',
                ]
            });

            $('#pro').hide();
            $('#cli').hide();
            $("select").change(function() {
                console.log($(this).val());
                if ($(this).val() == "pro") {
                    $('#pro').show();
                    $('#cli').hide();

                }

                if ($(this).val() == "cli") {
                    $('#cli').show();
                    $('#pro').hide();

                }
            });

            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });

            });
        });
    </script>
@endsection
