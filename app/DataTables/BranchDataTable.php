<?php

namespace App\DataTables;

use App\Models\Branch;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class BranchDataTable extends DataTable
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
            ->addColumn('action', function($record) {
                $action  = '<div class="action-grid d-flex gap-2"><a class="action-btn bg-dark show-branch-btn" data-name="'.$record->name.'" data-address="'.$record->address.'" data-created_at="'.$record->created_at->format('Y-m-d').'" title="View" href="javascript:void(0)">
                    <i class="fi fi-rr-eye"></i>
                                    </a><a class="action-btn bg-dark editBranchBtn" title="Edit" href="javascript:void(0)" data-name="'.$record->name.'" data-address="'.$record->address.'" data-id="'.$record->id.'">
                        <i class="fi fi-rr-pencil"></i>
                    </a><form action="'.route('admin.branch.destroy', $record->id).'" method="POST" class="deleteBranchForm">
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
    public function query(Branch $model)
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
                    ->setTableId('branches-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('lfrtip')
                    ->orderBy(2)
                    ->parameters([
                        'stateSave' => true,
                        'buttons' => ['pageLength'],
                        'responsive' => true,
                        'autoWidth' => false,
                        'width' => '100%',
                        'language' => [
                            'emptyTable' => "No entries in table",
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
            Column::make('created_at')->title('Created At'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->addClass('datatable_action no-gutters'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'branches' . date('YmdHis');
    }
}
