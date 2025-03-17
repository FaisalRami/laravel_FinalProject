@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{ url('products/store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nameFormControlInput1" class="form-label"> اسم المنتج </label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput1" class="form-label"> الكمية </label>
            <input type="number" class="form-control" name="quantity" id="quantity">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput1" class="form-label"> السعر </label>
            <input type="number" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="categoryFormControlInput1" class="form-label"> الصنف </label>
            <select name="category" id="category" class="form-control">
                <option value="#"></option>
                @foreach ( $categories as $category )
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea1" class="form-label"> وصف المنتج </label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
</div>
@endsection
