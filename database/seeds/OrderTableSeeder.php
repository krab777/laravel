<?php

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Order::class, 10)->create();
        DB::table('orders')->insert([
            // 'id' => 1,
        	'user_id' => '2',
        	'status_id' => '1',
        	'cart' => 'O:39:"Illuminate\Database\Eloquent\Collection":1:{s:8:"*items";a:1:{i:0;O:15:"App\Models\Cart":27:{s:11:"*fillable";a:5:{i:0;s:7:"user_id";i:1;s:7:"item_id";i:2;s:5:"price";i:3;s:5:"count";i:4;s:3:"sum";}s:10:"*guarded";a:0:{}s:13:"*connection";s:5:"mysql";s:8:"*table";s:5:"carts";s:13:"*primaryKey";s:2:"id";s:10:"*keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"*with";a:0:{}s:12:"*withCount";a:0:{}s:10:"*perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"*attributes";a:8:{s:2:"id";i:11;s:7:"user_id";i:2;s:7:"item_id";i:1;s:5:"price";s:6:"574.60";s:5:"count";i:1;s:3:"sum";s:6:"574.60";s:10:"created_at";s:19:"2020-04-14 11:20:53";s:10:"updated_at";s:19:"2020-04-14 11:20:53";}s:11:"*original";a:8:{s:2:"id";i:11;s:7:"user_id";i:2;s:7:"item_id";i:1;s:5:"price";s:6:"574.60";s:5:"count";i:1;s:3:"sum";s:6:"574.60";s:10:"created_at";s:19:"2020-04-14 11:20:53";s:10:"updated_at";s:19:"2020-04-14 11:20:53";}s:10:"*changes";a:0:{}s:8:"*casts";a:0:{}s:17:"*classCastCache";a:0:{}s:8:"*dates";a:0:{}s:13:"*dateFormat";N;s:10:"*appends";a:0:{}s:19:"*dispatchesEvents";a:0:{}s:14:"*observables";a:0:{}s:12:"*relations";a:1:{s:5:"items";O:39:"Illuminate\Database\Eloquent\Collection":1:{s:8:"*items";a:1:{i:0;O:15:"App\Models\Item":27:{s:11:"*fillable";a:5:{i:0;s:4:"name";i:1;s:11:"description";i:2;s:5:"price";i:3;s:11:"total_count";i:4;s:5:"image";}s:9:"*hidden";a:0:{}s:13:"*connection";s:5:"mysql";s:8:"*table";s:5:"items";s:13:"*primaryKey";s:2:"id";s:10:"*keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"*with";a:0:{}s:12:"*withCount";a:0:{}s:10:"*perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"*attributes";a:8:{s:2:"id";i:1;s:4:"name";s:9:"iPhone 5S";s:11:"description";s:122:"Rem nihil similique suscipit voluptas sint enim nulla. Unde sit architecto veritatis voluptatibus. Nisi nisi voluptas quo.";s:5:"price";s:6:"574.60";s:11:"total_count";i:9;s:5:"image";s:32:"https://placehold.it/700x400.png";s:10:"created_at";s:19:"2020-04-14 11:20:14";s:10:"updated_at";s:19:"2020-04-14 11:20:14";}s:11:"*original";a:8:{s:2:"id";i:1;s:4:"name";s:9:"iPhone 5S";s:11:"description";s:122:"Rem nihil similique suscipit voluptas sint enim nulla. Unde sit architecto veritatis voluptatibus. Nisi nisi voluptas quo.";s:5:"price";s:6:"574.60";s:11:"total_count";i:9;s:5:"image";s:32:"https://placehold.it/700x400.png";s:10:"created_at";s:19:"2020-04-14 11:20:14";s:10:"updated_at";s:19:"2020-04-14 11:20:14";}s:10:"*changes";a:0:{}s:8:"*casts";a:0:{}s:17:"*classCastCache";a:0:{}s:8:"*dates";a:0:{}s:13:"*dateFormat";N;s:10:"*appends";a:0:{}s:19:"*dispatchesEvents";a:0:{}s:14:"*observables";a:0:{}s:12:"*relations";a:0:{}s:10:"*touches";a:0:{}s:10:"timestamps";b:1;s:10:"*visible";a:0:{}s:10:"*guarded";a:1:{i:0;s:1:"*";}}}}}s:10:"*touches";a:0:{}s:10:"timestamps";b:1;s:9:"*hidden";a:0:{}s:10:"*visible";a:0:{}}}}',
        	'sum' => '574.60',
        	'created_at' => date('Y-m-d H:i:s')
        ]);
	}
}
