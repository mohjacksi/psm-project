@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @can('dna_region_create')
                    <div style="margin-bottom: 10px;" class="row">
                        <div class="col-lg-12">
                            <a class="btn btn-success" href="{{ route('frontend.dna-regions.create') }}">
                                {{ trans('global.add') }} {{ trans('cruds.dnaRegion.title_singular') }}
                            </a>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                                {{ trans('global.app_csvImport') }}
                            </button>
                            @include('csvImport.modal', [
                                'model' => 'DnaRegion',
                                'route' => 'admin.dna-regions.parseCsvImport',
                            ])
                        </div>
                    </div>
                @endcan
                <div class="card">
                    <div class="card-header">
                        {{ trans('cruds.dnaRegion.title_singular') }} {{ trans('global.list') }}
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class=" table table-bordered table-stripd table-hover datatable datatable-DnaRegion">
                                <thead>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.dnaRegion.fields.id') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.dnaRegion.fields.name') }}
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <input class="search" type="text"
                                                placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text"
                                                placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dnaRegions as $key => $dnaRegion)
                                        <tr data-entry-id="{{ $dnaRegion->id }}">
                                            <td>
                                                {{ $dnaRegion->id ?? '' }}
                                            </td>
                                            <td>
                                                {{ $dnaRegion->name ?? '' }}
                                            </td>
                                            <td>
                                                @can('dna_region_show')
                                                    <a class="btn btn-xs btn-primary"
                                                        href="{{ route('frontend.dna-regions.show', $dnaRegion->id) }}">
                                                        {{ trans('global.view') }}
                                                    </a>
                                                @endcan

                                                @can('dna_region_edit')
                                                    <a class="btn btn-xs btn-info"
                                                        href="{{ route('frontend.dna-regions.edit', $dnaRegion->id) }}">
                                                        {{ trans('global.edit') }}
                                                    </a>
                                                @endcan

                                                @can('dna_region_delete')
                                                    <form
                                                        action="{{ route('frontend.dna-regions.destroy', $dnaRegion->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                        style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger"
                                                            value="{{ trans('global.delete') }}">
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

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('dna_region_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('frontend.dna-regions.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-DnaRegion:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

            let visibleColumnsIndexes = null;
            $('.datatable thead').on('input', '.search', function() {
                let strict = $(this).attr('strict') || false
                let value = strict && this.value ? "^" + this.value + "$" : this.value

                let index = $(this).parent().index()
                if (visibleColumnsIndexes !== null) {
                    index = visibleColumnsIndexes[index]
                }

                table
                    .column(index)
                    .search(value, strict)
                    .draw()
            });
            table.on('column-visibility.dt', function(e, settings, column, state) {
                visibleColumnsIndexes = []
                table.columns(":visible").every(function(colIdx) {
                    visibleColumnsIndexes.push(colIdx);
                });
            })
        })
    </script>
@endsection
