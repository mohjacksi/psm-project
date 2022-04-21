@can('person_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.people.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.person.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.person.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-projectsPeople">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.person.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.person.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.person.fields.birth_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.person.fields.sex') }}
                        </th>
                        <th>
                            {{ trans('cruds.person.fields.project') }}
                        </th>
                        <th>
                            {{ trans('cruds.person.fields.projects') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($people as $key => $person)
                        <tr data-entry-id="{{ $person->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $person->id ?? '' }}
                            </td>
                            <td>
                                {{ $person->name ?? '' }}
                            </td>
                            <td>
                                {{ $person->birth_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Person::SEX_RADIO[$person->sex] ?? '' }}
                            </td>
                            <td>
                                {{ $person->project->name ?? '' }}
                            </td>
                            <td>
                                {{ $person->projects->name ?? '' }}
                            </td>
                            <td>
                                @can('person_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.people.show', $person->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('person_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.people.edit', $person->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('person_delete')
                                    <form action="{{ route('admin.people.destroy', $person->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('person_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.people.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-projectsPeople:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection