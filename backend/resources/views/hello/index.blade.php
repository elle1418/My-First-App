<html>
  <head>
    <title>憎悪も恐怖も後悔も</title>
    <style>
      body {font-size:16pt; color:#999;}
      h1 {font-size:50pt; text-align:right; color:#f0f0f0;
          margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
    </style>
  </head>
  <body>
    <h1>全て出しきれ<br>拳に乗せろ</h1>
    <p>&#064;forディレクティブの例</p>
      @foreach ($data as $item)
      @if ($loop->first)
      <p>※データ一覧</p><ul>
      @endif
      <li>No,{{$loop->iteration}}. {{$item}}</li>
      @if ($loop->last)
      </ul><p>-----ここまで</p>
      @endif
      @endforeach
  </body>
</html>