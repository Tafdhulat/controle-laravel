
@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0"> product</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
        <div class="row mb-5">
            <div class="col-sm-8">
                <label for="">title</label>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-sm-8">
                <label for="">prix</label>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="col-sm-8">
                <label for="">product_code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code">
            </div>
            <div class="col-sm-8 " >
                <label for="">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
        <div class="" >
            <div class="col-sm-6">
                <button class="btn btn-dark">Submit</button>
            </div>
        </div>
        </div>
    </form>
@endsection