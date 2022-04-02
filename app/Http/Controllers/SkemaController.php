<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Skema;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class SkemaController extends Controller
{
    public function index()
    {
        # code...
        if (request()->ajax()) {
            return Datatables::of(Skema::with('kategori')->get())->addIndexColumn()->addColumn('aksi', function ($data) {
                $dataj = json_encode($data);

                $btn = "<ul class='list-inline mb-0'>
                <li class='list-inline-item'>
                <a href='" . url('admin/berita/show/') . '/' . $data->id . "' type='button'  class='btn btn-success btn-xs mb-1'>Unit Kompetensi</a>
                </li>
                <li class='list-inline-item'>
                <a href='" . url('admin/berita/show/') . '/' . $data->id . "' type='button'  class='btn btn-success btn-xs mb-1'>Edit</a>
                </li>
                    <li class='list-inline-item'>
                    <button type='button'  onclick='staffdel(" . $data->id . ")'   class='btn btn-danger btn-xs mb-1'>Hapus</button>
                    </li>
               
                </ul>";
                return $btn;
            })->addColumn('nama_kategori', function ($data) {

                return $data->kategori->nama;
            })->addColumn('status_p', function ($data) {
                if ($data->status == 1) {
                    $html = '<span class="label label-success">Posted</span>
                    ';
                } else {
                    $html = '<span class="label label-warning">Pending</span>';
                }
                return $html;
            })->rawColumns(['aksi', 'nama_kategori', 'status_p'])->make(true);
        }
        return view('admin.skema');
    }
}
