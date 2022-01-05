@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <form class="row justify-content-center row-cols-lg-auto g-3 align-items-center">
                <div class="col-md-4">
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Choose College</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Choose Department</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Choose Class Type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
    </div>
@endsection
