@extends('admin.index')
@section('previous')
<a type="submit" href="{{ route('admin.home') }}" class="btn btn-sm btn-primary" target="_blank" title="SHOP"><i class="fa fa-angle-left"></i> SHOP</a>
            <h2>Carts</h2>

@endsection
@section('maincontent')

    <div class="row">

        <div class="col-md-12">

            <h1>Countries</h1>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Region</th>
                    <th>Zone</th>
                    <th>Active</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>


                @foreach($countries as $country)
                    <tr>
                        <td>{{$country['id'] }}</td>
                        <td>{{$country['name'] }}</td>
                        <td>{{$country->region['name'] }}</td>
                        <td>{{$country->zone['name'] }}</td>
                        <td>{{$country['active'] }}</td>

                        <td><a href="{{route('admin.countries.show', $country['id'])}}" title="Edit this attribute" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                        <td>
                            <form method="POST" action="{{route('admin.countries.destroy', $country['id'])}}" accept-charset="UTF-8" role="form" onsubmit="return confirm('Do you really want to remove?');">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-sm btn-danger" title="Remove this attribute"><i class="fa fa-times"></i> Remove</button>
                            </form>
                        </td>
                   </tr>
                @endforeach
            </table>
            <a href="{{route('admin.countries.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add new @yield('name') </a><br /><br />
        </div>

    </div>


@endsection