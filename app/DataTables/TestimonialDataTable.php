<?php

namespace App\DataTables;

use App\Models\Testimonial;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class TestimonialDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('created_at', function($record) {
                return $record->created_at->format('Y-m-d');
            })
            ->editColumn('name', function($record) {
                return $record->name ?? "";
            })                
            ->editColumn('message', function ($record) {
                $message = strip_tags($record->message);
                $words = explode(' ', $message);
                if (count($words) > 50) {
                    $message = implode(' ', array_slice($words, 0, 15)) . '...';
                }
                return $message;
            })            
            ->editColumn('status', function($record) {
                return $record->status ?? "";
            })                
            ->addColumn('action', function($record) {
                $action  = '<div class="action-grid d-flex gap-2"><a class="action-btn bg-dark show-branch-btn" title="View" href="'.route('admin.testimonials.show', $record->id).'">
                    <i class="fi fi-rr-eye"></i>
                                    </a><a class="action-btn bg-dark" title="Edit" href="'.route('admin.testimonials.edit', $record->id).'">
                        <i class="fi fi-rr-pencil"></i>
                    </a><form action="'.route('admin.testimonials.destroy', $record->id).'" method="POST" class="deleteTestimonialForm">
                                    <input type="hidden" name="_method" value="DELETE"> 
                                    <input type="hidden" name="_token" value="'.csrf_token().'">
                                    <button class="action-btn bg-dark record_delete_btn" title="Delete"><i class="fi fi-rr-trash"></i></button>
                                </form><div>';
                return $action;
            })
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(created_at,'%Y-%m-%d') like ?", ["%$keyword%"]);
            })
            
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Permission $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Testimonial $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('testimonials-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('lfrtip')
                    ->orderBy(2)
                    ->parameters([
                        'stateSave' => true,
                        'buttons' => ['pageLength'],
                        'lengthMenu' => [[10, 25, 50, 100, 500, 1000, -1], [10, 25, 50, 100, 500, 1000]],
                        'responsive' => true,
                        'autoWidth' => false,
                        'width' => '100%',
                        'language' => [
                            'emptyTable' => "No entries in table",
                        ],
                        'columnDefs' => [
                            [
                                'targets' => 3,
                                'render' => 'function(data, type, row) {
                                    return data ? "Active" : "Inactive";
                                }'
                            ],                
                        ],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('#')->orderable(false)->searchable(false),
            Column::make('name')->title('Name'),
            Column::make('message')->title('Message'),
            Column::make('status')->title('Status'),
            Column::make('created_at')->title('Created At'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->addClass('datatable_action no-gutters row'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'testimonials' . date('YmdHis');
    }
}
