<?php

namespace App\Services;
use Illuminate\Support\Facades\File;

class FileServices
{

    static function storegambarmateri($post_file)
    {
        $name = 'MATERI_' . time() . '.' . $post_file->getClientOriginalExtension();
        $store = $post_file->move(public_path('assets/img/materi'), $name);
        if (!$store) {
            return false;
        }
        return $name;
    }

    static function deletegambarmateri($file)
    {
        $check = File::exists(public_path('assets/img/materi/' . $file));
        if ($check) {
            $del =  File::delete(public_path('assets/img/materi/' . $file));
            if (!$del) {
                return false;
            }
            return true;
        }
    }
    static function storegambarsubmateri($post_file)
    {
        $name = 'SUBMATERI_' . time() . '.' . $post_file->getClientOriginalExtension();
        $store = $post_file->move(public_path('assets/img/submateri'), $name);
        if (!$store) {
            return false;
        }
        return $name;
    }

    static function deletegambarsubmateri($file)
    {
        $check = File::exists(public_path('assets/img/submateri/' . $file));
        if ($check) {
            $del =  File::delete(public_path('assets/img/submateri/' . $file));
            if (!$del) {
                return false;
            }
            return true;
        }
    }

    static function storeiconmapel($post_file)
    {
        $name = 'ICONMAPEL_' . time() . '.' . $post_file->getClientOriginalExtension();
        $store = $post_file->move(public_path('assets/img/mapel'), $name);
        if (!$store) {
            return false;
        }
        return $name;
    }

    static function deleteiconmapel($file)
    {
        $check = File::exists(public_path('assets/img/mapel/' . $file));
        if ($check) {
            $del =  File::delete(public_path('assets/img/mapel/' . $file));
            if (!$del) {
                return false;
            }
            return true;
        }
    }
}
