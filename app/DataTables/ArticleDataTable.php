<?php

namespace App\DataTables;

use App\Models\Article;
use App\Libraries\Encryption;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ArticleDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable()
    {
        return datatables()
            ->eloquent($this->query())
            ->addColumn('action', function ($data) {
                $actionBtn = '<a href="/articles/'.Encryption::encodeId($data->id).'" class="btn btn-sm btn-info" title="Show"><i class="fa fa-eye"></i> Show</a> ';
                $actionBtn .= '<a href="/articles/'.Encryption::encodeId($data->id).'/edit/" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i> Edit</a> ';
                $actionBtn .= '<a href="/articles/'.Encryption::encodeId($data->id).'" class="btn btn-sm btn-danger action-delete" title="Delete"><i class="fa fa-trash"></i> Delete</a>';
                return $actionBtn;
            })
            ->addColumn('status',function($data){
                return ($data->status == 1) ? "<label class='badge badge-success'> Active </label>" : "<label class='badge badge-danger'> Inactive </label>";
            })
            ->rawColumns(['status','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $data = Article::getArticleList();
        $data->select([
            'articles.*'
        ]);
        return $this->applyScopes($data);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
      return $this->builder()
                   ->columns($this->getColumns())
                   // ->minifiedAjax()
                   ->setTableId('article-table')
                   ->buttons(
                       Button::make('excel'),
                       Button::make('reset'),
                       Button::make('reload')
                   )
                   ->parameters([
                       'dom'         => 'Blfrtip',
                       'responsive'  => true,
                       'autoWidth'   => false,
                       'paging'      => true,
                       "pagingType"  => "full_numbers",
                       'searching'   => true,
                       'info'        => true,
                       'searchDelay' => 350,
                       "serverSide"  => true,
                       'pageLength'  => 10,
                       'lengthMenu'  => [[10, 20, 25, 50, 100, 500, -1], [10, 20, 25, 50, 100, 500, 'All']],
                       'order'       => [[1, 'asc']],
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
        'Title'        => ['data' => 'title', 'name' => 'title', 'orderable' => true, 'searchable' => true],
        'Author Name'  => ['data' => 'author_id', 'name' => 'author_id', 'orderable' => true, 'searchable'   => true],
        'Status'       => ['data' => 'status', 'name' => 'status', 'orderable' => true, 'searchable' => true],
        'action'       => ['searchable' => false]
     ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Articles_Lists_' .date('Y_m_d_H_i_s');;
    }
}
