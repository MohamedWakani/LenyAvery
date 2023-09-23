<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="abouts-table">
            <thead>
            <tr>
                <th>Title</th>
                <th>About</th>
                <th>Youtube</th>
                <th>Insta</th>
                <th>Facebook</th>
                <th>Twiter</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($abouts as $about)
                <tr>
                    <td>{{ $about->title }}</td>
                    <td>{{ $about->about }}</td>
                    <td>{{ $about->youtube }}</td>
                    <td>{{ $about->insta }}</td>
                    <td>{{ $about->facebook }}</td>
                    <td>{{ $about->twiter }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['abouts.destroy', $about->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('abouts.show', [$about->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('abouts.edit', [$about->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $abouts])
        </div>
    </div>
</div>
