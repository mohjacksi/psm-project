@can('channel_psm_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.channel-psms.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.channelPsm.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.channelPsm.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-psmChannelPsms">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.channelPsm.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.channelPsm.fields.value') }}
                        </th>
                        <th>
                            {{ trans('cruds.channelPsm.fields.channel') }}
                        </th>
                        <th>
                            {{ trans('cruds.channelPsm.fields.psm') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($channelPsms as $key => $channelPsm)
                        <tr data-entry-id="{{ $channelPsm->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $channelPsm->id ?? '' }}
                            </td>
                            <td>
                                {{ $channelPsm->value ?? '' }}
                            </td>
                            <td>
                                {{ $channelPsm->channel->name ?? '' }}
                            </td>
                            <td>
                                {{ $channelPsm->psm->spectra ?? '' }}
                            </td>
                            <td>
                                @can('channel_psm_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.channel-psms.show', $channelPsm->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('channel_psm_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.channel-psms.edit', $channelPsm->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('channel_psm_delete')
                                    <form action="{{ route('admin.channel-psms.destroy', $channelPsm->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('channel_psm_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.channel-psms.massDestroy') }}",
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
  let table = $('.datatable-psmChannelPsms:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection