<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Session;

class Content extends Model
{
    public static function getContent($murl, &$data) 
    {
        $contents = DB::table('contents as c')
            ->join('menus as m', 'm.id', '=', 'c.menu_id')
            ->where('m.murl', '=', $murl)
            ->get()
            ->toArray();

            if (!$contents) {
                abort(404);
            } else {

                $data['contents'] = $contents;
                $data['page_title'] = $contents[0]->mtitle;

            }

        }

        public static function save_new($request) 
        {
            $content = new self();
            $content->menu_id = $request['menu_id'];
            $content->ctitle = $request['title'];
            $content->carticle = $request['article'];
            $content->save();
            Session::flash('sm', 'Content Saved!');
        }
        public static function update_item($request, $id) 
        {
            $content = self::find($id);
            $content->menu_id = $request['menu_id'];
            $content->ctitle = $request['title'];
            $content->carticle = $request['article'];
            $content->save();
            Session::flash('sm', 'Content has been updated!');

        }
}
