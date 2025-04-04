@extends('layouts.admin')
@section('content')
    <div class="py-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> اسم الصنف  </th>
                    <th scope="col"> الاحداث   </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as  $key=> $category)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('categories/delete/'.$category->id) }}" class="btn btn-danger"> حذف </a>
                            <a href="{{ url('categories/edit/'.$category->id) }}" class="btn btn-info">  تعديل</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $categories->links() }} --}}
    </div>
@endsection
