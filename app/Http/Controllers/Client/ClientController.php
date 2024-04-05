<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\npc_template;
use App\Models\post;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.View.trangchu');
    }
    public function tintuc()
    {
        $post = post::whereType('1')->orderBy("id", "desc")->paginate(2);
        return view('client.View.tintuc', ['post' => $post]);
    }
    public function download()
    {
        return view('client.View.download');
    }

    public function test(Request $request, $id)
    {
        $npc_template = npc_template::where('id', $id)->first();
        $shop_template = $npc_template->shop_template()->get();
        $shop = [];
        foreach ($shop_template as $shops) {
            $tab_shop = $shops->tab_shop()->get();
            $tab = [];
            foreach ($tab_shop as $tabs) {
                $item_shop = $tabs->item_shop()->orderby('id', 'ASC')->get();
                $item = [];
                foreach ($item_shop as $items) {
                    $DataVP = $items->item()->first();
                    $type_sell = ($items->type_sell > 0 && $items->type_sell()->first()) ? $items->type_sell()->first()->NAME : "Vàng";
                    $item[] = [
                        'NAME' => "[" . $DataVP->id . "] " . $DataVP->NAME,
                        'description' => $DataVP->description,
                        'amount' => $items->cost . " " . $type_sell,
                        // 'cost' => ,
                    ];
                }
                $tab["[" . $items->id . "] " . $items->NAME] = $item;
            }
            $shop["[" . $shops->id . "] " . $shops->tag_name] = $tab;
        }

        dd([$npc_template->NAME => $shop]);
    }
}
