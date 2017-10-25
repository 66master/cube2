@extends('layout') {{-- layout.blade.phpを拡張 --}}
@section('content') {{-- sectionを定義 --}}
<div>
	<h1>マスタ管理</h1>

	<h2>商品マスタ</h2>
	<h3>概要</h3>
	<p>商品情報を管理する機能です。</p>
	<h3>商品登録</h3>
	<p>個別登録か一括登録のどちらかの方法で登録ができます。CUBE2での新規商品登録は、同時にスマイルの商品登録申請を兼ねています。商品コードは各ブランドごとに自動で最新の番号が割り当てられます。ただし、その時点でスマイル側へすぐに反映されるわけではありません。スマイルへの反映は"スマイル登録状況"カラムを参照してください。</p>
	<p>スマイル反映のタイミングは10:00～11:59となります。12:00以降にCUBE2へ商品登録した場合は全て翌日の登録となります。</p>
	<h3>商品編集</h3>
	<p>個別編集か一括編集のどちらかの方法で登録ができます。CUBE2での編集は、同時にスマイルへの商品修正申請を兼ねています。ただし、即スマイルへ反映されるわけではありません。スマイルへの反映状況は"スマイル登録状況カラム"を参照してください。</p>




	<h2>仕入先マスタ</h2>

	<h2>ブランドマスタ</h2>

	<h2>商品カテゴリマスタ</h2>



</div>
@endsection