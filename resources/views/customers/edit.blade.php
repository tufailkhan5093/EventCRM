@extends('welcome')

@section('body')

    <div class="container mt-3  ">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Customer</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('update',['id'=>$customer->id]) }}" method="POST">
                @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" value="{{ $customer->name }}" name="name" class="form-control"
                                    id="exampleInputEmail1" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Function</label>
                                <input type="text" value="{{ $customer->function }}" name="function"
                                    class="form-control" id="exampleInputEmail1" placeholder="Function">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mobile</label>
                                <input type="text" value="{{ $customer->mobile }}" name="mobile" class="form-control"
                                    id="exampleInputEmail1" placeholder="Enter Mobile">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">LandLIne</label>
                                <input type="text" value="{{ $customer->landline }}" name="landline"
                                    class="form-control" id="exampleInputEmail1" placeholder="Enter Landline">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" value="{{ $customer->email }}" name="email" class="form-control"
                                    id="exampleInputEmail1" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Postal Code</label>
                                <input type="text" value="{{ $customer->postal_code }}" name="postal_code"
                                    class="form-control" id="exampleInputEmail1" placeholder="Enter Postal Code">
                            </div>
                        </div>
                    </div>









                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" value="{{ $customer->city }}" name="city" class="form-control"
                            id="exampleInputEmail1" placeholder="Enter City">
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Update</button>
                </div>
            </form>
        </div>
    </div>


@endsection
