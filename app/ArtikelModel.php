<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{
    public static function get_all()
    {
        $items = DB::table('artikels')->get();
        return $items;
    }
    public static function savedata($data)
    {
        $savedata = DB::table('artikels')->insert($data);
        return $savedata;
    }
    public static function find_by_artikel_id($id_artikel)
    {
        $items = DB::table('artikels')->where('id', $id_artikel)->get();
        return $items;
    }
    public static function update_artikel($id, $request)
    {
        $new_artikel = DB::table('artikels')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'slug' => $request['slug'],
                'tag' => $request['tag'],
                'isi' => $request['isi']
            ]);
        return $new_artikel;
    }
    public static function destroy($id)
    {
        $delete_artikel = DB::table('artikels')->where('id', $id)->delete();
        return $delete_artikel;
    }
}
