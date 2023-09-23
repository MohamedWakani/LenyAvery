<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="information-table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Desc</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($information as $information)
                <tr>
                    <td>{{ $information->title }}</td>
                    <td>{{ $information->desc }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['information.destroy', $information->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('information.show', [$information->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('information.edit', [$information->id]) }}"
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

   
</div>
