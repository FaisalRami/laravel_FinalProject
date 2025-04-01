@extends('layouts.admin')
@section('content')
    <div class="py-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> اسم المنتج </th>
                    <th scope="col"> الصنف </th>
                    <th scope="col"> السعر </th>
                    <th scope="col"> الكمية </th>
                    <th scope="col"> الوصف </th>
                    <th scope="col"> الأحداث </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $key => $store)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $store->name }}</td>
                        <td>{{ $categories->firstWhere('id', $store->category)->name}}</td>
                        {{-- <td>{{ $store->category->name }}</td> --}}
                        {{-- <td>{{ $categories[$store->category-1]->name }}</td> --}}
                        <td>{{ $store->price }}</td>
                        <td>{{ $store->quantity }}</td>
                        <td>{{ $store->description }}</td>
                        <td>
                            <a href="{{ url('products/delete/'.$store->id) }}" class="btn btn-danger"> حذف </a>
                            <a href="{{ url('products/edit/'.$store->id) }}" class="btn btn-info">  تعديل</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $stores->links() }}
    </div>
@endsection
