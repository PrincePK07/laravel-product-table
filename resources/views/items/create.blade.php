@extends('items.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary">Back </a>
        </div>
    </div>
</div>
{{-- error checker --}}
@if ($errors->any())
<div class="alert alert-danger" role="alert">
    Something error!
  </div>
  @foreach($errors->all() as $error)
  <ul>
    <li>{{$error}}</li>
  </ul>
  @endforeach
    @endif

<form action="{{route('products.store')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Product Name</label>
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Product Status</label>
      <select class="form-control" id="exampleFormControlSelect1" name="status">
        <option>Active</option>
        <option>Out of stock</option>
        <option>Comming Soon</option>
</select>

    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Prooduct Category</label>
      <select multiple class="form-control" id="exampleFormControlSelect2" name="category">
        <option>Clothing and Accessories</option>
        <option>Food Products</option>
        <option>Automotive Accessories</option>
        <option>Health Care</option>
        <option>Home & Kitchen</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Product Details</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="details" rows="3"></textarea>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>

@endsection
