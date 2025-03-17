@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{ url('products/update/'.$store->id) }}" method="post">
        <input type="hidden" name="id" id="id" value="{{ $store->id }}">
        @csrf
        <div class="mb-3">
            <label for="nameFormControlInput1" class="form-label"> اسم المنتج </label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $store->name }}">
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput1" class="form-label"> الكمية </label>
            <input type="number" class="form-control" name="quantity" id="quantity"  value="{{ $store->quantity }}">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput1" class="form-label"> السعر </label>
            <input type="number" class="form-control" name="price" id="price"  value="{{ $store->price }}">
        </div>
        <div class="mb-3">
            <label for="categoryFormControlInput1" class="form-label"> الصنف </label>
            <select name="category" id="category" class="form-control">
                <option value="{{ $category_name->id }}">{{ $category_name->name }}</option>
                @foreach ( $categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea1" class="form-label"> وصف المنتج </label>
            <textarea class="form-control" name="description" id="description" rows="3" >{{ $store->description }}</textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
</div>
@endsection
