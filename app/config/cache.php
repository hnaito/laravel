<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| デフォルトキャッシュドライバー
	|--------------------------------------------------------------------------
	|
	| キャッシュライブラリーで使用されるデフォルトドライバーをこのオプションで
	| コントロールします。もちろんお好きな他のドライバーをいつでも使用できます。
	| これはドライバーが指定されなかった場合に使用されます。
	|
	| サポートドライバー: "file", "database", "apc", "memcached", "redis", "array"
	|
	*/

	'driver' => 'file',

	/*
	|--------------------------------------------------------------------------
	| ファイルキャッシュ保存場所
	|--------------------------------------------------------------------------
	|
	| "file"キャッシュドライバーを使用する時には、ファイルを保存しておく
	| 場所が必要となります。妥当なデフォルトが指定されていますが、あなたの
	| お好きな場所を指定できます。
	|
	*/

	'path' => storage_path().'/cache',

	/*
	|--------------------------------------------------------------------------
	| データベースキャッシュ接続
	|--------------------------------------------------------------------------
	|
	| "database"キャッシュドライバーを使用する時にキャッシュアイテムを
	| 保存するための接続を指定する必要があります。このオプションがnullであれば
	| デフォルトのデータベース接続が使用されます。
	|
	*/

	'connection' => null,

	/*
	|--------------------------------------------------------------------------
	| データベースキャッシュテーブル
	|--------------------------------------------------------------------------
	|
	| "database"キャッシュドライバーを使用する場合、キャッシュアイテムを
	| 保存するテーブルを指定する必要があります。デフォルトの名前を指定してますが
	| 自由にピッタリするものに自由に変更してください。
	|
	*/

	'table' => 'cache',

	/*
	|--------------------------------------------------------------------------
	| Memcachedサーバー
	|--------------------------------------------------------------------------
	|
	| ここではMemcachedキャッシュドライバーを使用する場合の、サーバー設定を
	| 配列で指定します。全てのサーバーを"host", "port", "weight"オプションで
	| 設定します。
	|
	*/

	'memcached' => array(

		array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),

	),

	/*
	|--------------------------------------------------------------------------
	| キャッシュキープレフィックス
	|--------------------------------------------------------------------------
	|
	| APCやMemcachedのようなRAMベースでの保存法を使用する場合、
	| 他のアプリケーションも使用しているかも知れません。衝突を避けるために
	| 全部のキーにプレフィックスをつけた値を指定します。
	|
	*/

	'prefix' => 'laravel',

);
