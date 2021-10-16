<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use App\Models\Jasa;
use App\Models\Jasaimage;
use App\Models\User;
use App\Models\Orderfile;

class OrderController extends Controller
{
    public function index()
    {
        $data = array(
            'title'=> 'Transaksi',
        );

        return view('mitra.order.index', $data);
    }

    public function list() {
        // $transaksi = DB::table('transaksi')
        //             ->join('jasa','transaksi.jasa_id','=','jasa.id')
        //             ->select('transaksi.*','jasa.nama AS nama_jasa','jasa.mitra_id')
        //             ->get();
        $transaksi = Transaksi::with('jasa')->where('mitra_id','=', Auth::user()->id)->get();
        $data = array();
        foreach ($transaksi as $key => $item) {
            $jasa_image = Jasaimage::where('jasa_id', $item->jasa_id)->take(1)->first();
            $data[$key] = $item;
            if ($jasa_image){
                $data[$key]['image'] = $jasa_image->url;
            }
        }
        foreach ($transaksi as $key => $item) {
            $mitra = User::where('id', $item->jasa->mitra_id)->take(1)->first();
            $data[$key] = $item;
            if ($mitra){
                $data[$key]['nama_mitra'] = $mitra->first_name.' '.$mitra->last_name;
            }
        }
        // dd($data);
        return DataTables::of($data)
            ->addColumn('jasa_image', function($row){
                if ($row->image){
                    return '<img src="'.public_path('images/jasa_image/').$row->image.'" class="img-fluid">';
                } else {
                    return 'No Images';
                }
            })
            ->addColumn('status_transaksi', function($row){
                if ($row->status == 'waiting'){
                    return '<div class="text-center"><span class="badge badge-warning">Waiting</span></div>';
                } else {
                    return '<div class="text-center"><span class="badge badge-success">Confirmed</span></div>';
                }
            })
            ->addColumn('action', function($row){
                return '<div class="text-center">
                <button onclick=upload('.$row->id.') 
                class="btn btn-sm btn-warning mr-1"><b><i class="fa fa-check mr-1"></i>
                Upload Order
                </b></a>
                </div>
                <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="'.url('/').'/mitra/order/form_order_store" class="dropzone" id="dropzone" method="post">
                            
                                        <input type="hidden" name="transaksi_id" value="'.$row->id.'">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple="multiple">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                            </form>
                            </div>
                            <div class="modal-footer">
                             
                            </div>
                        </div>
                    </div>
                </div>
                ';
            })
            ->rawColumns(['jasa_image','status_transaksi','action'])
            ->toJson();
    }

    public function store(Request $request)
    {
        $transaksi_id = $request->input('confirm_id');

        $transaksi = Transaksi::find($transaksi_id);
        $transaksi->status = 'paid';
        
        if ($transaksi->save()){
            return redirect('admin/transaksi');
        }
    }

    public function form_order_store(Request $request){        
        $transaksi_id = $request->input('transaksi_id');
        /** Upload Images */
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('orderfile'),$filename);
        return $request;
        /** Insert Jasa Images */
        $orderfile = Orderfile::create([
            'transaksi_id' => $transaksi_id,
            'filename' => $filename,
            'url' => $filename
        ]);
        if ($orderfile->save()){
            return redirect('mitra/order/');
        }
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
