@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{ url('categories/update/'.$category->id) }}" method="post">
        <input type="hidden" name="id" id="id" value="{{ $category->id }}">
        @csrf
        <div class="mb-3">
            <label for="nameFormControlInput1" class="form-label"> اسم الصنف </label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
</div>
@endsection
