@extends('admin.layouts.app')

@section('content')
<div class="col-12 col-xl-12">
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">General information</h2>
        <form>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div><label for="first_name">First Name</label> <input class="form-control"
                            id="first_name" type="text" placeholder="Enter your first name"
                            required=""></div>
                </div>
                <div class="col-md-6 mb-3">
                    <div><label for="first_name">First Name</label> <input class="form-control"
                            id="file_pond" type="file" placeholder="Enter your first name"
                            required=""></div>
                </div>
                <div class="col-md-6 mb-3">
                    <div><label for="last_name">Last Name</label> <input class="form-control"
                            id="last_name" type="text" placeholder="Also your last name"
                            required=""></div>
                </div>
            </div>
 
  

            <div class="mt-3"><button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save
                    all</button></div>
        </form>
    </div>
</div>


@endsection
